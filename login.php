<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (@$_SESSION['login']) {
    header("location: index.php");
}

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 justify-content-center">
            <h1 class="text-center"> LOGIN </h1>
            <form action="aksi/cek-login.php" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="username" placeholder="Email@example.com" />
                    <label class="form-label" for="email">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="psw" name="password" placeholder="Password" class="form-control" />
                    <label class="form-label" for="psw">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Masuk</button>
            </form>
        </div>
    </div>
</body>

</html>