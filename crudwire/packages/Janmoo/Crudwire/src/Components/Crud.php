<?php
namespace Janmoo\Crudwire\Components;

use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Crud extends Component
{
    use WithPagination;

    public $results_per_page = 100;
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('crudwire::crud',[
            'users' => User::Where('name', 'like', '%'.$this->search.'%' )
                        ->orWhere('email', 'like', '%'.$this->search.'%' )
                        ->paginate($this->results_per_page),
        ]);
    }
}
