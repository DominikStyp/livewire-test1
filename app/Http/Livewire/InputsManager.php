<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class InputsManager extends Component
{
    public array $inputs;

    public function mount()
    {
        $this->inputs = Session::has('inputs-manager') ?
            json_decode(Session::get('inputs-manager')) :
            ['Initial input'];
    }

    private function storeState()
    {
        Session::put('inputs-manager', json_encode($this->inputs));
    }

    public function removeField(int $index)
    {
        unset($this->inputs[$index]);

        $this->inputs = array_values($this->inputs);

        $this->storeState();
    }

    public function addField(string $text)
    {
        $this->inputs[] = $text;

        $this->storeState();
    }

    public function updatedInputs($value)
    {
        $this->storeState();
    }

    public function render()
    {
        return view('livewire.inputsManager');
    }
}
