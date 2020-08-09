<?php
namespace Janmoo\Crudwire\Components;

use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Crud extends Component
{
    public $users;
    public $searchterm;

    public function mount(){

    }

    public function render()
    {
        $searchterm         = '%'.$this->searchterm.'%';
        $this->users        = User::Where('name', 'like', $searchterm )
                                ->orWhere('email', 'like', $searchterm )
                                ->get();

        return view('crudwire::crud');
    }
}
