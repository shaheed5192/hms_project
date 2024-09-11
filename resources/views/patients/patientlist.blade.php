<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
    .header {
        width: 100%;
        height: 50px;
        margin-bottom: 5px;
        text-align: center;
        background-color: skyblue;
    }

    .header1 {
        padding: 5 5 5 5;
        text-align: center;
        height: 50px;
        background-color: rgb(73, 153, 134);
    }

    .sidebar {
        width: 20%;
        float: left;
        height: 400px;
        background-color: skyblue;
    }

    .container {
        width: 80%;
        float: left;
        height: 600px;
        margin: auto;

    }

    .inner-container {
        width: 100%;
        float: left;
        height: 100px;
        text-align: center;
        background-color: ;
        margin-left: 5px;
        margin-bottom: 20px;
    }
    a:link{
            text-decoration:none;        
        }
        .btn{
            text-decoration-color:white;
            border: none;
            height: 40;
            padding: 10; 
            text-align:center;
            font-size: 16;
            margin:0 0 2 0;
            width:100%;
            background-color: rgb(12, 141, 150);
        }
        .header3{
            background-color: rgb(20, 159, 152); 
            color:white; 
            padding: 5px; 
            text-align:center;
            margin:auto;
        }
</style>

<body>
    <div class="header">
        <h2> Hospital Management System </h2>
    </div> <br>

    <div>
        <div class="sidebar">
            <div>
                <button class="btn"><a href ="{{route('dashboard') }}">DASHBOARD</a></button>
                <button class="btn"><a href ="{{route('patientlist') }}">Patient Registration</a> </button> 
                <button class="btn"><a href ="{{route('doctorlist') }}"> Doctors Information </a> </button>

            </div>
        </div>
        <div class="container">
            <div class="inner-container">
                <h3 class="header3"> Patient Information </h3> <br>
                <button> <a href ="{{ route('new_reg') }}"> New Registration </a> </button> <br> <br>

                @if (session('success'))
                    <p> {{ session('success') }}</p>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th> Sl# </th>
                            <th>Registration Number</th>
                            <th>Patient Name</th>
                            <th>NID</th>
                            <th>Mobile Number</th>
                            <th>Date of Birth</th>
                            {{-- <th>Create Date</th>
                            <th>Update Date</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $item)
                            <tr>
                                {{-- <td>{{ $patients->$key + firstItem() }}</td> --}}
                                <td>{{ $item->sl }}</td>
                                <td>{{ $item->p_reg }}</td>
                                <td>{{ $item->pname }}</td>
                                <td>{{ $item->nid }}</td>
                                <td>{{ $item->mobilenumber }}</td>
                                <td>{{ $item->dob }}</td>
                                {{-- <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $patients->links() }}
                {{-- {{ $patients->links()}} --}}
                    
                {{-- @elsePush()
                    
                @pushEndIf }} --}}
            </div>


        </div>

    </div>
    <div class = "Logout">
        <a href ="{{ route('logout') }}"> Logout </a>
    </div>

</body>

</html>
