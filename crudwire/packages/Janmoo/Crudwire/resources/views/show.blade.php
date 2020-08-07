<tr>
    @if ($edit=== true)
        <td><p>{{ $user->id }}</p></td>
        <td>
            <input form="edituser"type="text" name="" id="" value="{{ $name }}"        wire:model="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </td>
        <td>
            <input form="edituser"type="text" name="" id="" value="{{ $email }}"       wire:model="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </td>
        <td>
            <input form="edituser"type="text" name="" id="" value="{{ $verified_at}}"  wire:model="verified_at">
            @error('verified_at') <span class="error">{{ $message }}</span> @enderror
        </td>
        <td><button wire:click="cancel">cancel</button></td>
        <td><form wire:submit.prevent="updateuser" id="edituser" action=""><button type="submit">save</button></form></td>
    @else
        <td><p>{{ $user->id }}</p></td>
        <td><p>{{ $user->name }}</p></td>
        <td><p>{{ $user->email }}</p></td>
        <td><p>{{ $user->email_verified_at }}</p></td>
        <td><button wire:click="edit">edit</button></td>
        <td><button>delete</button></td>
    @endif
</tr>
