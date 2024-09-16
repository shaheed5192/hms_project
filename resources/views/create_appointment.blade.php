
<html>
    <head>
        <title> Create Appointment </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <style>
         .patient{
            width: 30%;
            margin: auto;
            text-align: center;
            background-color:skyblue;
            font-size: 22px; 
            float: left;
            height:600px;   
        }
        .appointment{
            width: 69%;
            margin-left: 5px;
            /* text-align: center; */
            /* background-color:skyblue; */
            font-size: 22px; 
            float: left;  
            height:600px; 
            /* padding-top:10px; */
        }
        .header {
            background-color: skyblue; 
            padding: 10px;
            text-align: center;
            
        }
    </style>


<body>
    <div>
        <h3 class="header"> Create Doctor Appointment </h3>   <br>
    </div>
    
    <div>
        <div class="patient">
            <h5 class="header"> Registered Patient List </h5> 
            <form action="{{ route('patient.search') }}" method="get" > 
                <input type="text" name="query" placeholder="search..." required />
                <button type "submit"> Search </button>
            </form>

            <form action="{{route('create_appointment')}}" method ="post"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        {{-- <th>Sl#</th> --}}
                        <th>Reg#</th>
                        <th>Name</th>
                        <th>Mobile </th>
                        <th> Select </th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($patients as $item)
                            <tr>
                                {{-- <td>{{ $patients->$key + firstItem() }}</td> --}}
                                {{-- <td>{{ $item->sl }}</td> --}}
                                <td>{{ $item->p_reg }}</td>
                                <td>{{ $item->pname }}</td>
                                <td>{{ $item->mobilenumber }}</td>
                                <td> <a href ="">  >>  </a>  </td>
                               
                            </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $patients->links() }} --}}

        </div>
        <div class="appointment">
           <h5 class="header"> Book an Appointment </h5> 
           <h6> <u> Patient Information: </u> </h6>
           
           <table class="table table-hover">   
            <tr>
                <td> <label for ="p_reg"> Reg #: </label> </td>
                <td> <label for ="pname"> Patient Name: </label> </td>
                <td> <label for ="mobilenumber"> Mobile No: </label></td>
                <td> <label for ="dob"> Date of Birth: </label> </td>
            </tr>
            <tr>
                <td> <input type="text" id="id" name="p_reg" /> </td>
                <td> <input type="text" id="pname" name="pname" /> </td>
                <td> <input type="number" id="mobilenumber" name="mobilenumber" maxlength="11" pattern="\d{0,11}"
                    autocomplete="off"/> </td>
                <td> <input type="text" id="dob" name="dob" /> </td>
            </tr>
            </table>  <hr>

            <h6> <u> Select Doctor: </u> </h6>
            
            
            <table class="table table-hover">   
                <tr>
                    <td> <label for ="dname"> Doctor: </label> 
                    </td>
                    <td> <label for ="room"> Room No: </label></td>
                    <td> <label for ="date"> Date: </label> </td>
                    <td> <label for ="time"> Time: </label> </td>
                </tr>
                <tr>
                    <td> <select name="dname" id="dname" required>
                        <option value=""> --Select a Doctor-- </option>
                        @foreach ($doctors as $doctor)
                        <option value="{{$doctor->id}} "> {{ $doctor->dname }} </option> 
                        @endforeach
                    </select> </td>
                    <td> <input type="text" id="pname" name="pname" /> </td>
                    <td> <input type="number" id="mobilenumber" name="mobilenumber" maxlength="11" pattern="\d{0,11}"
                        autocomplete="off"/> </td>
                    <td> <input type="text" id="dob" name="dob" /> </td>
                </tr>
                </table>  <hr>

                <button type="submit"> Submit </button> 
            
            {{-- <thead>
                   <tr>
                       <th>Reg#</th>
                       <th>Name</th>
                       <th>Mobile</th>
                       <th>Date of Birth</th>
                   </tr>  
               </thead>
               <tbody>
                   <tr>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                   </tr>
                   
               </tbody> --}}
        </form>   
        </div>

        <div>
            
        </div>


    </div>

</body>
</html>