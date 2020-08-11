<?php
namespace Janmoo\Crudwire\Components;

use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Crud extends Component
{
    use WithPagination;

    public $results_per_page, $search, $sortby, $sortAsc;
    public function mount()
    {
        $this->sortby = "'id', 'asc'";
    }


    public function dump()
    {

        dd($this->sortby);

    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        return view('crudwire::crud',[
            'users' => User::Where('name', 'like', '%'.$this->search.'%' )
                        ->orWhere('email', 'like', '%'.$this->search.'%' )
                        ->orderBy($this->sortby)
                        ->paginate($this->results_per_page),
        ]);
    }
}
