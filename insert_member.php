<?php

include "connection.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $name , $email , $password;

$sql = "insert into member (firstname , email , password) values ( '$name' , '$email' , '$password' )";
if (mysqli_query($conn, $sql)) {

    echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
    echo "<script>window.location='login.php'</script>";

    } else {
    
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    
    }
    
    mysqli_close($conn);
?>