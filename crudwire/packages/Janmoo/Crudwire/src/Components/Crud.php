<?php
namespace Janmoo\Crudwire\Components;

use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Crud extends Component
{
    public $users;

    public function mount(){
        $this->users = User::all();
    }

    public function render()
    {
        return view('crudwire::crud');
    }
}
