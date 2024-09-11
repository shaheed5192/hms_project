<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<html>
<head> 
    <title> User Data </title>

</head>
    <body>
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Name </th>
                        <th>Email </th>
                        <th>Created at</th>
                    </tr>                   
                </thead>
            
            <tbody>
                @foreach ($users as $key => $item)
                <tr>
                    {{-- <td> {{ $users->firstItem() +$key }} </td> --}}
                    <td> {{ $users->firstItem() +$key }}</td>
                    <td> {{ $item->name }}  </td>
                    <td> {{ $item->email }} </td>
                    <td> {{ $item->created_at }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>


</html>