<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SDTP Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-login d-flex justify-content-center m-0 p-0 align-items-center">
    <div class="login d-flex flex-column justify-content-center">
        <div class="mb-3">
            <h3 class="d-flex justify-content-between align-items-center"><img src="../blue-logo.png" alt="logo">
                <span class="ms-2">Enter Your ID</span>
            </h3>
        </div>
        <div class="row g-3 align-items-center">
            <div class="mb-3 d-flex align-items-center">
                <label for="userid" class="form-label">ID</label>
                <input type="text" id="userid" class="ms-3 form-control" name="userid">
            </div>
        </div>
        <div class="mt-3">
            <a type="button" class="btn btn-secondary" href="{{ route('adminlogin') }}">Admin</a>
            <button type="submit" class="btn btn-secondary">Login</button>
            <a href="{{ route('trainee') }}">Trainee</a>
            <a href="{{ route('faci') }}">Faci</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
