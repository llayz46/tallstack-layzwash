<?php

namespace App\Livewire\Review\Create\Steps;

use Livewire\Attributes\Validate;
use Spatie\LivewireWizard\Components\StepComponent;

class RatingStep extends StepComponent
{
    #[Validate('required', 'numeric', 'min:1', 'max:5')]
    public $rating;

    public function stepInfo(): array
    {
        return [
            'label' => 'Rating'
        ];
    }

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.review.create.steps.rating-step');
    }
}
