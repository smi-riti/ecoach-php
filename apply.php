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
                <div class="card-header"><h3>Apply for Addmission</h3></div>
                <div class="card-body">
                    <form method="post">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                            <div class="form-outline">
                                <input type="text" name="name" id="form6Example1" class="form-control" />
                                <label class="form-label" for="form6Example1"> name</label>
                            </div>
                            </div>
                            
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form6Example3" class="form-control" />
                            <label class="form-label" for="form6Example3">Email</label>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form6Example4" class="form-control" />
                            <label class="form-label" for="form6Example4">password</label>
                        </div>
                        

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <select  name="gender" id="form6Example5" class="form-control" >
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="o">Others</option>
                            </select>
                            <label class="form-label" for="form6Example5">Gender</label>
                        </div>

                        <!-- Number input -->
                        <div class="form-outline mb-4">
                            <input type="number" name="contact" id="form6Example6" class="form-control" />
                            <label class="form-label" for="form6Example6">Contact</label>
                        </div>

                        <!-- Message input -->
                        
                        <div class="form-outline mb-4">
                            <textarea type="text" name="address" id="form6Example4" class="form-control"></textarea>
                            <label class="form-label" for="form6Example4">Address</label>
                        </div>

                        <!-- Checkbox -->
                        

                        <!-- Submit button -->
                        <button type="submit" name="send" class="btn btn-primary btn-block mb-4">Submit</button>
                    </form>

                    <?php 
                    if(isset($_POST['send'])){
                                $data =[
                                    "name" => $_POST['name'],
                                    "contact" => $_POST['contact'],
                                    "email" => $_POST['email'],
                                    "gender" => $_POST['gender'],
                                    "address" => $_POST['address'],
                                    "password" => md5($_POST['password'])
                                ];
                                $result = insertData("student",$data);
                                ($result)? redirect("index.php") : alert("falied");
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