<tr>
    @if ($edit=== true)
        <td><input type="text" name="" id="" value="{{ $user->id }}"></td>
        <td><input type="text" name="" id="" value="{{ $user->id }}"></td>
        <td><input type="text" name="" id="" value="{{ $user->id }}"></td>
        <td><input type="text" name="" id="" value="{{ $user->id }}"></td>
        <td><input type="text" name="" id="" value="{{ $user->id }}"></td>
        <td><button wire:click="cancel">cancel</button></td>
        <td><button>save</button></td>
    @else
        <td><p>{{ $user->id }}</p></td>
        <td><p>{{ $user->name }}</p></td>
        <td><p>{{ $user->email }}</p></td>
        <td><p>{{ $user->email_verified_at }}</p></td>
        <td><p>{{ $user->password }}</p></td>
        <td><button wire:click="edit">edit</button></td>
        <td><button>delete</button></td>
    @endif
</tr>
