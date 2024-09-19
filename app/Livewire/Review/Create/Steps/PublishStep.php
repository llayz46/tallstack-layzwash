<?php

namespace App\Livewire\Review\Create\Steps;

use App\Models\ProductComment;
use Spatie\LivewireWizard\Components\StepComponent;
use WireUi\Traits\WireUiActions;

class PublishStep extends StepComponent
{
    use WireUiActions;

    public $item;

    public function mount()
    {
        $this->item = $this->state()->forStep('review.create.steps.publish-step')['item'];
    }

    public function stepInfo(): array
    {
        return [
            'label' => 'Publish'
        ];
    }

    public function stateToStore()
    {
        return [
            'title' => $this->state()->forStep('review.create.steps.meta-step')['title'],
            'content' => $this->state()->forStep('review.create.steps.meta-step')['content'],
            'rating' => $this->state()->forStep('review.create.steps.rating-step')['rating'],
            'user_id' => auth()->id(),
            'product_id' => $this->item
        ];
    }

    public function submit()
    {
        if (auth()->user()->hasReviewed($this->item)) {
            $review = auth()->user()->reviewedProduct($this->item);

            $review->update($this->stateToStore());
        } else {
            ProductComment::create($this->stateToStore());
        }

        $this->dispatch('published');

        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Thank you!',
            'description' => 'Your review has been submitted successfully.',
        ]);
    }

    public function render()
    {
        return view('livewire.review.create.steps.publish-step', [
            'state' => $this->stateToStore()
        ]);
    }
}
