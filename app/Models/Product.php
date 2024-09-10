<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'usage',
        'price',
        'status',
        'brand_id',
        'category_id',
    ];

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImages::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(ProductComment::class);
    }

    public function sales(): HasMany
    {
        return $this->hasMany(ProductSales::class);
    }

    public function getFormattedPrice(): string
    {
        return '$'.number_format($this->price, 2, '.', ' ');
    }

    public function getAmount(): int
    {
        return $this->price * 100;
    }

    public function mainImage(): ProductImages
    {
        return $this->images->where('main', true)->first();
    }

    public static function search(string $query)
    {
        if (strlen($query) < 2) {
            return collect();
        }

        return self::where('products.name', 'like', '%' . $query . '%')
            ->orWhereHas('brand', function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%');
            })
            ->with('brand')
            ->get();
    }

    public function getSimilarProducts(Product $product, string $priority = 'brand')
    {
        $fetchedProductIds = [$product->id];
        $maxIterations = 2;

        $this->similarProducts = Product::where(function ($query) use ($product, $priority) {
            if ($priority === 'brand') {
                $query->where('brand_id', $product->brand_id);
            } else {
                $query->where('category_id', $product->category_id);
            }
        })
            ->whereNotIn('id', $fetchedProductIds)
            ->inRandomOrder()
            ->limit(2)
            ->get();

        $fetchedProductIds = $this->similarProducts->pluck('id')->toArray();

        while (count($this->similarProducts) < 4 && $maxIterations > 0) {
            $additionalProducts = Product::where(function ($query) use ($product, $priority) {
                if ($priority === 'brand') {
                    $query->where('category_id', $product->category_id);
                } else {
                    $query->where('brand_id', $product->brand_id);
                }
            })
                ->whereNotIn('id', $fetchedProductIds)
                ->inRandomOrder()
                ->limit(2)
                ->get();

            $this->similarProducts = $this->similarProducts->concat($additionalProducts);
            $fetchedProductIds = array_merge($fetchedProductIds, $additionalProducts->pluck('id')->toArray());

            $priority = $priority === 'brand' ? 'category' : 'brand'; // Alterner la priorité à chaque itération
            $maxIterations--;
        }

        return $this->similarProducts;
    }
}
