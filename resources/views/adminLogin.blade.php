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
        <div class="mb-3 admin-login ">
            <h3 class="d-flex justify-content-between align-items-center"><img src="../blue-logo.png"
                    alt="logo"><span class="ms-2">ADMIN</span></h3>
        </div>
        <div class="row g-3 align-items-center">
            <div class="mb-3">
                <label for="adminuser" class="form-label">User</label>
                <input type="text" name="adminuser" id="adminuser" class="form-control">
            </div>
            <div class="mb-3">
                <label for="adminpass" class="form-label">Password</label>
                <input type="password" name="adminpass" id="adminpass" class="form-control">
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-secondary">Login</button>
            <a href="{{ route('admin') }}">Admin</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
