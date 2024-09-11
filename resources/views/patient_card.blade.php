
<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration Card</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: auto; }
        h1 { text-align: center; }
        .patient-info { margin: 20px 0; }
        .patient-info div { margin: 5px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Patient Registration Card</h1>
        <div class="patient-info">
            <div><strong>Registration Number:</strong> {{ $patients['p_reg'] }}</div>
            <div><strong>Name:</strong> {{ $patients['pname'] }}</div>
            <div><strong>NID:</strong> {{ $patients['nid'] }}</div>
            <div><strong>Mobile Number:</strong> {{ $patients['mobilenumber'] }}</div>
            {{-- <div><strong>Address:</strong> {{ $patientData['address'] }}</div>
            <div><strong>Contact:</strong> {{ $patientData['contact'] }}</div> --}}
        </div>
    </div>
</body>
</html>
