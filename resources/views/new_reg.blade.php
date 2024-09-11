<html>

<head>
    <title> Patient Registration </title>
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
        <h1>Patient Registration</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('patient_store') }}" method="post">
            @csrf

            {{-- <label for ="sl"></label> --}}

            <label for ="p_reg"> Registration Number: </label>
            <input type="text" id="id" name="p_reg" placeholder="auto generate id"/> <br> <br>
            {{-- @error('p_reg')
                {{ $message }}
            @enderror --}}
            <label for ="pname"> Patient Name: </label>
            <input type="text" id="pname" name="pname"/>
            {{-- @error('pname')
                {{ $message }}
            @enderror --}}
            <br> <br>
            <label for ="nid"> NID No: </label>
            <input type="text" id="nid" name="nid"/> <br> <br>
            <label for ="mobilenumber"> Mobile No: </label>
            <input type="number" id="mobilenumber" name="mobilenumber" maxlength="11" pattern="\d{0,11}" autocomplete="off"/> <br> <br>
            <label for ="address"> DOB: </label>
            <input type="text" id="dob" name="dob" /> <br> <br>

            <input type="submit" value="Submit & Print"  />
        </form>
    </div>


</body>

</html>
