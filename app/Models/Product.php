<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
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

    public function getSimilarProducts(Product $product): Collection
    {
        $this->similarProducts = Product::where('id', '!=', $product->id)
            ->where(function ($query) use ($product) {
                $query->where('category_id', $product->category_id)
                    ->orWhere('brand_id', $product->brand_id);
            })
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return $this->similarProducts;
    }

    public function getRating(): float
    {
        $ratings = $this->comments->pluck('rating');

        if ($ratings->isEmpty()) {
            return 0;
        }

        return round($ratings->average(), 1);
    }
}
