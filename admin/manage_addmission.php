<?php include_once "../config.php";
//checkAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MAnage Addmission | Admin Panel - Ecoach | An Application for coaching</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<?php include_once "admin_header.php";?>
<div class=" text-light px-5 py-3" style="background-color:darkcyan" >
    <h2>Admin / Addmission</h2>
</div>
<div class="container-fluid w-100 mt-5">
    <div class="row">
        <div class="col-3">
            <?php include_once "sidebar.php";?>

        </div>
        <div class="col-9">
            <div class="row">
                    <table class="table table-bordered  table-hover table-striped">
                        <thead class = "table-primary">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $callingData = callingData("student","status='0'");
                            foreach($callingData as $value):
                                ?>

                                <tr>
                                    <td><?= $value['roll'];?></td>
                                    <td><?= $value['name'];?></td>
                                    <td><?= $value['contact'];?></td>
                                    <td><?= $value['email'];?></td>
                                    <td><?= $value['gender'];?></td>
                                    <td><?= $value['address'];?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="?approve=<?= $value['roll'];?>" class="btn btn-info">Approve</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                            <a href="" class="btn btn-success">Edit</a>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach;?>
                        </tbody>
                            </table>
                </div>
            </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>

<?php
if(isset($_GET['approve'])){
    $id = $_GET['approve'];
    if(approveStudents($id)){
        redirect('manage_students.php');
    }
}
?>