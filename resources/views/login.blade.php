<html>
    <head>
        <title> Shaheed </title>
    </head>

    <style> 
        .form{
            text-align: center;
            height: 400px;
            width: 500px;
            background-color: lightgray;
            margin: auto;
            padding-top: 50px;
            
        }
    </style>
    <body>
        <div class="form"> 
            <h1>Login Page</h1> 
            <form action="{{ route('dashboard') }}" method="get">
                <label for ="username"> Username: </label> 
                <input type="text" id="username" name="username" value="shaheed" readonly required> <br> <br>
                <label for ="password"> Password: </label> 
                <input type="password" id="password" name="password" required> <br> <br>
                <input type="submit" value="Submit">
            </form>
        </div>

        {{-- {{ hi }}

        

        @foreach ( as )
            
        @endforeach

        @csrf

        @auth
        $name
        @endauth

        @guest
        $guest
        @endguest --}}
        
        
    </body>
</html>