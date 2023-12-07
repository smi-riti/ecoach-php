<?php include_once "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<?php include_once "include/header.php";?>

<div class="container mt-5">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card">
                <div class="card-header"><h3>Login Here</h3></div>
                <div class="card-body">
                    <form>
                            <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example1" class="form-control" />
                            <label class="form-label" for="form1Example1">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example2" class="form-control" />
                            <label class="form-label" for="form1Example2">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Remember me </label>
                            </div>
                            </div>

                            <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                            <!-- Submit button -->
                            <div class="mb-3">
                            <input href="" name= "create"class="btn btn-primary ms-5 btn-lg" value="Sign in"/>
                            </div>

                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>