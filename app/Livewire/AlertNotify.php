<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class AlertNotify extends Component
{
    public $message;

    #[On('appointmentAdded')]
    public function showMessage($message)
    {
        $this->message = $message;
    }

    public function close(){
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.alert-notify');
    }
}
