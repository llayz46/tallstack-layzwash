<?php

namespace App\Livewire\Review\Create;

use App\Livewire\Review\Create\Steps\MetaStep;
use App\Livewire\Review\Create\Steps\PublishStep;
use App\Livewire\Review\Create\Steps\RatingStep;
use Spatie\LivewireWizard\Components\WizardComponent;

class CreateReview extends WizardComponent
{
    public $item;

    public function mount($item)
    {
        $this->item = $item;
    }

    public function initialState(): array
    {
        return [
            'review.create.steps.publish-step' => [
                'item' => $this->item
            ]
        ];
    }

    public function steps(): array
    {
        return [
            RatingStep::class,
            MetaStep::class,
            PublishStep::class
        ];
    }
}
