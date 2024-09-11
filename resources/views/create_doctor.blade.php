<html>

<head>
    <title> Create Doctor </title>
</head>

<style>
    .form {
        text-align: left;
        height: 400px;
        width: 500px;
        background-color: lightgray;
        margin: auto;
        padding: 50px 20px;
    }
</style>

<body>
    <div class="form">
        <h1>Doctors Information</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('doctor_store') }}" method="post">
            @csrf
            {{-- <label for ="sl"></label> --}}

                {{-- @error('p_reg')
                {{ $message }}
            @enderror --}}
            <label for ="dname"> Doctor Name: </label>
            <input type="text" id="dname" name="dname">  <br> <br>
            {{-- @error('pname')
                {{ $message }}
            @enderror --}}
            <label for ="designation"> Designation: </label>
            <input type="text" id="designation" name="designation"> <br> <br>
            <label for ="mobilenumber"> Mobile No: </label>
            <input type="text" id="mobilenumber" name="mobilenumber"> <br> <br>
            <label for ="email"> Email: </label>
            <input type="text" id="email" name="email"> <br> <br>

            <input type="submit" value="Submit">
        </form>
    </div>


</body>

</html>
