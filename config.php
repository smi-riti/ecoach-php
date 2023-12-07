<?php 

$connect = new mysqli("localhost","root","","ecoach");
session_start();

if($connect->connect_error){
    echo "fail";
}


//redirect function

function redirect($page){
    global $connect;
    echo "<script>window.open('$page','_self')</script>";
}
 // alert function

 function alert($msg){
    echo "<script>alert('$msg')</script>";
 }

//insert work

function insertData($table,$data){
    global $connect;

    $cols = implode("," , array_keys($data));
    $values = implode("','" , $data);
    $q = "insert into $table ($cols) values ('$values')";
    $query = $connect->query($q);

    return $query;
}

//calling function

function callingData($table, $cond = NULL){
    global $connect;
    if($cond == NULL){
        $q = "select * from $table";
    }
    else{
        $q = "SELECT * from $table WHERE $cond";
    }
    $query = $connect->query($q);
    $data = $query->fetch_all(MYSQLI_ASSOC);
    return $data;

}


//delete function

function deleteRecord($table ,$cond){
    global $connect;
    $q = $connect->query("DELETE from $table WHERE $cond");
    return $q;
}

//count record function

function countRecords($table, $cond = NULL){
    global $connect;
    if($cond == NULL){
        $query = "select * from $table";
    }
    else{
        $query = "select * from $table WHERE $cond";
    }
    $result = $connect->query($query);
    $count = $result->num_rows;
    return $count;
}

//student approve function

function approveStudents($roll){
    global $connect;
    $query = $connect->query("UPDATE student SET status='1' WHERE roll = '$roll' AND status ='0'");
    return $query;
}

// function for disabled student 
function disabledStudent($roll)
{
    global $connect;
    $query = $connect->query("UPDATE student SET status='2' WHERE roll = '$roll' AND status ='1'");
    return $query;

}
//check if admin logged or not
function checkAdmin(){
    if(!isset($_SESSION['admin'])){
        redirect('login.php');
    }
}

?>