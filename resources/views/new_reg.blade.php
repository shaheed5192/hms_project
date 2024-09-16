<html>

<head>
    <title> Patient Registration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<style>
    .form {
        text-align: left;
        height: auto;
        width: 500px;
        background-color: lightgray;
        margin: auto;
        padding: 50px 20px;

    }
</style>

<body>
    <div class="form">
        <h2 class="text-success text-center my-3">Patient Registration</h2>
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
            <table class="table">
                <tr>
                    <td> <label for ="p_reg"> Registration Number: </label> </td>
                    <td> <input type="text" id="id" name="p_reg" /> </td>
                    {{-- placeholder="auto generate id" --}}

                </tr>
                <tr>
                    <td> <label for ="pname"> Patient Name: </label> </td>
                    <td> <input type="text" id="pname" name="pname" /> </td>
                </tr>
                <tr>
                    <td> <label for ="nid"> NID No: </label> </td>
                    <td> <input type="text" id="nid" name="nid" /> </td>
                </tr>
                <tr>
                    <td> <label for ="mobilenumber"> Mobile No: </label></td>
                    <td> <input type="number" id="mobilenumber" name="mobilenumber" maxlength="11" pattern="\d{0,11}"
                            autocomplete="off" /> </td>
                </tr>

                <tr>
                    <td> <label for ="address"> DOB: </label> </td>
                    <td> <input type="text" id="dob" name="dob" /> </td>
                </tr>

            </table> <br> <br>
            <div class="container text-center">
                <input type="submit" class="btn btn-success" value="Submit & Print" />
            </div>
        </form>
    </div>



</body>

</html>


{{-- @error('p_reg')
                    {{ $message }}
                @enderror --}}


{{-- @error('pname')
                    {{ $message }}
                @enderror --}}












{{-- <label for ="p_reg"> Registration Number: </label>
                <input type="text" id="id" name="p_reg" placeholder="auto generate id"/> <br> <br>
                {{-- @error('p_reg')
                    {{ $message }}
                @enderror --}}
{{-- <label for ="pname"> Patient Name: </label>
                <input type="text" id="pname" name="pname"/> --}}
{{-- @error('pname')
                    {{ $message }}
                @enderror --}}
{{-- <br> <br>
                <label for ="nid"> NID No: </label>
                <input type="text" id="nid" name="nid"/> <br> <br>

                <label for ="mobilenumber"> Mobile No: </label>
                <input type="number" id="mobilenumber" name="mobilenumber" maxlength="11" pattern="\d{0,11}" autocomplete="off"/> <br> <br>
                
                <label for ="address"> DOB: </label>
                <input type="text" id="dob" name="dob" /> <br> <br>

                <input type="submit" value="Submit & Print"  /> --}}
