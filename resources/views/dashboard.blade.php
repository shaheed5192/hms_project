<html>
    <head>
        <title> Dashboard </title>
    </head>

    <style> 
        .header{
            width: 100%;
            height: 50px;
            margin-bottom: 5px;
            text-align: center;
            background-color:skyblue;     
        }
        .header1{
            margin-bottom: 5px;
            text-align: center;
            height: 40px;
            background-color:rgb(73, 153, 134);     
        }
        .container{
            width: 80%;
            float: left;
            height: 600px;
            margin: auto;  
        }
       
        .sidebar{
            width: 20%;
            float: left;
            height: 400px;
            background-color: skyblue;
        }
        
        .inner-container{
            width: 20%;
            float: left;
            height: 100px;
            text-align: center;
            background-color: goldenrod;
            margin-left: 20px;
            margin-bottom: 20px;
        }
        a:link{
            text-decoration:none;        
        }
        .btn{
            color:white;
            border: none;
            height: 40;
            padding: 10; 
            text-align:center;
            font-size: 16;
            margin:0 0 2 0;
            width:100%;
            background-color: rgb(12, 141, 150);
        }

    </style>
    <body>
        <div class="header"> 
            <h1> Hospital Management System</h1> <br>
        </div>
        <div class="header1"> 
            <h2>Dashboard</h2> 
        </div>
        <div>
            <div class="sidebar">
                <div>
                    <button class="btn"><a class="btn"href ="{{route('dashboard') }}">DASHBOARD</a></button>
                    <button class="btn"><a class="btn"href ="{{route('patientlist') }}">Patient Registration</a></button> 
                    <button class="btn"><a class="btn"href ="{{route('doctorlist') }}"> Doctors Information </a> </button>
                </div>
            </div>
            <div class="container">
                <div class="inner-container" >
                    <h3>  50</h3>
                    <h3> Total OPD Patient</h3>
                </div>
                <div class="inner-container" >
                    <h3>  50</h3>
                    <h3> Total OPD Patient</h3>
                </div>
                <div class="inner-container" >
                    <h3>  50</h3>
                    <h3> Total OPD Patient</h3>
                </div>
                <div class="inner-container" >
                    <h3>  50</h3>
                    <h3> Total OPD Patient</h3>
                </div> <br> <br>  <br>
                <div class="inner-container" >
                    <h3>  50</h3>
                    <h3> Total OPD Patient</h3>
                </div>
                <div class="inner-container" >
                    <h3>  50</h3>
                    <h3> Total OPD Patient</h3>
                </div>
                <div class="inner-container" >
                    <h3>  50</h3>
                    <h3> Total OPD Patient</h3>
                </div>
                <div class="inner-container" >
                    <h3>  50</h3>
                    <h3> Total OPD Patient</h3>
                </div>
            </div>

        </div>
        <div class = "Logout" >
            <a href ="{{ route('logout') }}" > Logout </a>
        </div>
        
    </body>
</html>