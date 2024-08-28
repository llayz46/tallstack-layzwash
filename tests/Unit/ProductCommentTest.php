<?php

use App\Models\Product;
use App\Models\ProductComment;
use App\Models\User;

it('can create a product comment', function () {
    $product = Product::factory()->create();
    $user = User::factory()->create();

    $comment = ProductComment::factory()->make([
        'user_id' => $user->id,
        'product_id' => $product->id,
    ]);

    $product->comments()->save($comment);

    expect($product->comments->count())->toBe(1)
        ->and($product->comments->first()->user->id)->toBe($user->id);
});

it('can delete a comment of a product', function () {
    $product = Product::factory()
        ->hasComments(3)
        ->create();

    expect($product->comments->count())->toBe(3);

    $firstComment = $product->comments->first();
    $firstComment->delete();

    $product->refresh();

    expect($product->comments->count())->toBe(2);
});

it('has a rating between 1 and 5', function () {
    $comment = ProductComment::factory()->make([
        'rating' => 3,
    ]);

    expect($comment->rating)->toBe(3);
});

it('belongs to a user', function () {
    $user = User::factory()->create();

    $comment = ProductComment::factory()->make([
        'user_id' => $user->id,
    ]);

    expect($comment->user->id)->toBe($user->id);
});

it('belongs to a product', function () {
    $product = Product::factory()->create();

    $comment = ProductComment::factory()->make([
        'product_id' => $product->id,
    ]);

    expect($comment->product->id)->toBe($product->id);
});

it('has a title', function () {
    $comment = ProductComment::factory()->make([
        'title' => 'This is a title',
    ]);

    expect($comment->title)->toBe('This is a title');
});

it('has a content', function () {
    $comment = ProductComment::factory()->make([
        'content' => 'This is a content',
    ]);

    expect($comment->content)->toBe('This is a content');
});
