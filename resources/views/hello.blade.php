<h1>Hello World</h1>

<table class="table table-bordered">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($usrs as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button class="btn btn-primary">Action 1</button>
                    <button class="btn btn-warning">Action 2</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
