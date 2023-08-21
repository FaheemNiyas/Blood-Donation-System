<!DOCTYPE html>
<html>

<head>
    <title>login Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
</head>

<body>


    
    <div class="container vh-100 my-5 py-5 ">
        <div class="row justify-content-center h-100">
            <div class="card w-35 my-auto shadow-lg">
                <div class="card-header text-center bg-dark text-white">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form action="login_func_location.php" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" />
                        </div>
                        <input type="submit" class="btn btn-dark w-100" value="Login" name="">
                    </form>
                    <p class="mt-3">Don't have an account <a href="register.php">Register Here</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>