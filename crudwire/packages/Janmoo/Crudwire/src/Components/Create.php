<?php
namespace Janmoo\Crudwire\Components;

use Livewire\Component;

class Create extends Component
{
    public function create(){
        $this->validate([
            'name'                => 'required|min:6',
            'email'               => 'required|email',
            'email_verified_at'   => 'nullable|date-format:Y-m-d G:i:s'
        ]);
    }
    public function render()
    {
        return view('crudwire::create');
    }
}
