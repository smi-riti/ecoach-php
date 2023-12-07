

<?php include_once "../config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Ecoach | An Application for coaching</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<?php include_once "admin_header.php";
// $data = [
//     'email'=>'smriti@gmail.com',
//     'password'=>md5('12345')
// ];
// insertData("admin",$data);


?>
<div class=" text-light px-5 py-3" style="background-color:darkcyan" >
    <h2>Admin-Login / Dashboard</h2>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card">
                <div class="card-header"><h3> Admin Login </h3></div>
                <div class="card-body">
                    <form method="post">
                            <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form1Example1" class="form-control" />
                            <label class="form-label" for="form1Example1">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form1Example2" class="form-control" />
                            <label class="form-label" for="form1Example2">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                       

                            <!-- Submit button -->
                            <div class="mb-3">
                            <button name="admin_login" class="btn btn-primary ms-5 btn-block" >Sign IN </button>
                            </div>

                            
                    </form>

                    <?php 
                    if(isset($_POST['admin_login'])){
                    
                            
                            $email = $_POST['email'];
                            
                            $password = md5($_POST['password']);
                        
                        $query = $connect->query("select * from admin where email ='$email' and password = '$password'");
                        $count = $query->num_rows;
                        if($count > 0){
                            $_SESSION['admin'] = $email;
                            redirect('index.php');
                        }
                        else{
                            alert("emiail or password may incorrect try again");
                            redirect("login.php");
                        }
            }
              ?> 
              </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>