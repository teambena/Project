<!-- View Overall Data -->
<!DOCTYPE html>
<html>
    <head>
        <title>View Ticket</title>
    </head>
    <body>
        <table border = "1">
            <tr>
                <td>Movie id</td>
                <td>Theater room</td>
                <td>Seat Number</td>
                
            </tr>
            @foreach ($data as $dataRow)
            <tr>
                <td>{{ $dataRow->movie_id }}</td>
                <td>{{ $dataRow->theater_id }}</td>
                <td>{{ $dataRow->seat_id }}</td>
                
                <td></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
