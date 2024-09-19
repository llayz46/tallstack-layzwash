<?php

namespace App\Livewire\Review\Create\Steps;

use Livewire\Attributes\Validate;
use Spatie\LivewireWizard\Components\StepComponent;

class MetaStep extends StepComponent
{
    #[Validate('required', message: 'The title is required.')]
    #[Validate('min:3', message: 'The title need to be at least 3 characters')]
    #[Validate('max:100', message: 'The title may not be greater than 100 characters')]
    public string $title;

    #[Validate('required', message: 'The description is required.')]
    #[Validate('min:10', message: 'The description need to be at least 3 characters')]
    #[Validate('max:1000', message: 'The description may not be greater than 1000 characters')]
    public string $content;

    public function stepInfo(): array
    {
        return [
            'label' => 'Review'
        ];
    }

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.review.create.steps.meta-step');
    }
}
