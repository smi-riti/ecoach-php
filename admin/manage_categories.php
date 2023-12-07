
<?php include_once "../config.php";
//checkAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MAnage categories | Admin Panel - Ecoach | An Application for coaching</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<?php include_once "admin_header.php";?>
<div class="  px-5 py-3 d-flex justify-content-between" style="background-color:darkcyan" >
    <h2 class="text-light">Admin / categories
        
    </h2>
    <a href="#rock" class="btn btn-light pt-2" data-bs-toggle="modal">Insert New categories</a>
    <div class="modal fade-in" id = "rock">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">Insert new caregories</div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="cat_title">Title</label>
                        <input type="text" name="cat_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cat_description">Description</label>
                        <textarea type="text" name="cat_description" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="insert_cat" class="btn btn-primary w-100"  value="Insert Category">
                    </div>
                </form>
                <?php
                    if(isset($_POST['insert_cat'])){
                        $data = [
                            'cat_title' => $_POST['cat_title'],
                            'cat_description' => $_POST['cat_description']
                        ];
                        if(insertData("categories",$data)){
                            redirect("manage_categories.php");
                        }
                        else{
                            alert("failes");
                            redirect("manage_categories.php");
                        }
                    }

                ?>

            </div>
            </div>
           
        </div>

    </div>
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
                                <th>Cat_Id</th>
                                <th>Title</th>
                                
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $callingData = callingData("categories");
                            foreach($callingData as $value):
                                ?>

                                <tr>
                                    <td><?= $value['cat_id'];?></td>
                                    <td><?= $value['cat_title'];?></td>
                                    <td><?= $value['cat_description'];?></td>
                                    
                                    <td>
                                        <div class="btn-group">
                                            
                                            <a href="?cat_delete=<?= $value['cat_id'];?>" class="btn btn-danger">Delete</a>
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
if(isset($_GET['cat_delete'])){
    $id = $_GET['cat_delete'];
    if(deleteRecord('categories',"cat_id='$id'")){
        redirect("manage_categories.php");
    }
    else{
        alert("fail to delete");
    }
}
?>