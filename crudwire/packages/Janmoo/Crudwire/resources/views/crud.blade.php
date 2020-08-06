<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">user id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">email verified at</th>
                <th scope="col">password</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td><p>{{ $user->id }}</p></td>
                <td><p>{{ $user->name }}</p></td>
                <td><p>{{ $user->email }}</p></td>
                <td><p>{{ $user->email_verified_at }}</p></td>
                <td><p>{{ $user->password }}</p></td>
                <td><button>edit</button></td>
                <td><button>delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
