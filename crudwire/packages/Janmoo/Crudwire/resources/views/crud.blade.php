<div>
    <table class="table">
        <thead>
            <tr>
                <input type="text" name="" id="" wire:model="searchterm">
            </tr>
        </thead>
        <thead>
            <tr>
                <th scope="col">user id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">email verified at</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @livewire('crudwire::show', ['user' => $user], key($user->id))
            @endforeach
        </tbody>
    </table>

</div>
