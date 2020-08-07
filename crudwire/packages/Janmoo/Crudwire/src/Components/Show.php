<?php
namespace Janmoo\Crudwire\Components;

use Illuminate\Foundation\Auth\User;
use Livewire\Component;

class show extends Component
{
    public $user, $edit, $name, $email, $verified_at;

    public function mount(User $user)
    {
        $this->user         = $user;

        $this->name         = $user->name;
        $this->email        = $user->email;
        $this->verified_at  = $user->email_verified_at;
    }

    public function edit()
    {
        $this->edit= true;
    }

    public function cancel()
    {
        $this->edit= false;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name'  => 'min:6',
            'email' => 'email',

        ]);
    }

    public function render()
    {
        return view('crudwire::show');
    }
}
