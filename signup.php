<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'partials/_dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoginSystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<title>SignUp</title>

<body>
    <?php
    require_once 'partials/_navbar.php';
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Account is now Created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="container">
        <h1 class="text-center">Hello, It is SignUp Page</h1>
        <h2 class="text-center">Please SignUp to our Website</h2><br><br>

        <form>
            <div class="mb-3 col-md-4">
                <label for="username" class="form-label">username</label>
                <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 col-md-4">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>