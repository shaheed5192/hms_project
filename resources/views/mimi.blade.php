<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


    <body>
        <table class="table">

            <thead>
                <th> ID  </th>
                <th>Name </th>
                <th>Email</th>
                <th>Created at</th>
            </thead>

            <tbody>
                @foreach ($users as $key =>$item)
                <tr> 
                    <td> {{$users->firstItem() +$key }} </td>
                    <td> {($item->name)}</td>
                    <td> {($item->email)}</td>
                    <td> {{ $item->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}


    </body>


</html>