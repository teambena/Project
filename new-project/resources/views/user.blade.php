<!-- View Overall Data -->
<!DOCTYPE html>
<html>
    <head>
        <title>View User Records</title>
    </head>
    <body>
        <table border = "1" class="table table-sm">
            <tr>
                <td>Id</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Edit</td>
                <td>Delete</td>

            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td><a href = 'edit/{{ $user->user_id }}'>Edit</a></td>    
                <td><a href = 'delete/{{ $user->user_id }}'>Delete</a></td>
            
                <td></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>