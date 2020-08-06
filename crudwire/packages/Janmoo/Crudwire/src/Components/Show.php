<?php
namespace Janmoo\Crudwire\Components;

use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class show extends Component
{
    public $user, $edit;

    public function mount(User $user)
    {
        $this->user= $user;
    }

    public function edit()
    {
        $this->edit= true;
    }

    public function cancel()
    {
        $this->edit= false;
    }

    public function render()
    {
        return view('crudwire::show');
    }
}
