<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InputsManager extends Component
{
    public array $inputs = [];

    public function __construct($id = null)
    {
        parent::__construct($id);

        $this->inputs[] = 'Test input';
    }

    public function removeField(int $index)
    {
        unset($this->inputs[$index]);

        $this->inputs = array_values($this->inputs);
    }

    public function addField(string $text)
    {
        $this->inputs[] = $text;
    }

    public function render()
    {
        return view('livewire.inputsManager');
    }
}
