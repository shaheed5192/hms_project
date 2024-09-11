<html>
    <head>
        <title> Welcome </title>
    </head>

    <style> 
        .header{
            width: 90%;
            margin: auto;
            text-align: center;
            background-color:skyblue;
            font-size: 22px; 
            float: left;
            height:100px;   
        }
        .login{
            width: 10%;
            margin: auto;
            text-align: center;
            background-color:skyblue;
            font-size: 22px; 
            float: left;  
            height:100px; 
            /* padding-top:10px; */
        }
        .btn{
            /* width: 10%; */
            margin-top: 35;
            text-align: center;
            background-color:skyblue;
            font-size: 18px; 
            border: none;
            /* height:100px;  */
            /* padding-top:30px; */
        }
        a:link {
        color: green;
        background-color: transparent;
        text-decoration: none; 
        }
        a:hover {
        color: rgb(165, 142, 12);
        background-color: transparent;
        text-decoration: underline;
        }
    </style>
    <body>
        <div>
            <div class="header"> 
                <h1>Welcome to Hospital Management System</h1> 
            </div>
            <!--  <h3 style= "text-align: center; ">LOGIN </h3>  -->
            <div class = "login" >
                <button class="btn"><a href ="{{ route('login') }}">Login</a></button> 
            </div>    
        </div>
        {{-- <br> <br> <br> <br><br> <br><br> <br> --}}
        <div>
            <img style="margin-top:50px;" src="{{ url('assets/img/hospital.png') }}" alt="hospital" width="1000" height="400">
        </div>
    </body>
</html>