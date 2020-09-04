<!DOCTYPE html>
<html>
    <head>
        <title>View Student Records</title>
    </head>
    <body>
        <table border = "1">
            <tr>
                <td>Id</td>
                <td>First Name</td>
                <td>Last Name</td>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>