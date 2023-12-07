<?php include_once "../config.php";
//checkAdmin();
?>
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
<?php include_once "admin_header.php";?>
<div class=" text-light px-5 py-3" style="background-color:darkcyan" >
    <h2>Admin / Dashboard</h2>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <?php include_once "sidebar.php";?>

        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-3">
                    <div class="card border border-success text-success">
                        <div class="card-body">
                            <h2><?= countRecords('student',"status = '0'");?></h2>
                            <h6>Total Admissions</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-2 border-warning text-warning">
                        <div class="card-body">
                            <h2><?= countRecords('student',"status='1'");?></h2>
                            <h6>Total Students</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border border-danger text-danger">
                        <div class="card-body">
                            <h2><?= countRecords('categories');?></h2>
                            <h6>Total Categories</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border border-info text-info">
                        <div class="card-body">
                            <h2><?= countRecords('courses');?></h2>
                            <h6>Total Courses</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>