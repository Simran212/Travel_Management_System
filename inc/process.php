<?php 
session_start();
include 'config.php';
$pId = $_GET['pid'];

// $nameErr = $pwdErr = $emailErr = $genderErr = $cityErr = "";
$userName = $password =  "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $userName = $_POST['uName'];
  $password = $_POST['password'];
  
  $sql = "SELECT cId, cusName FROM customers WHERE cusName = '$userName' AND cusPwd = '$password' AND cusStatus = 1 ";
  
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      
      $_SESSION['uId'] = $row['cId'];   
      $_SESSION['uName'] = $row['cusName'];   
      $_SESSION['auth'] = 1;
      $cId = $row['cId']; 
      if(isset($pId) && $pId != ''){
        header('Location: ../admin/bookingPack.php?pid='.$pId.'&cid='.$cId);
      }else{
      header('Location:../admin/dashboard.php');
      }
    }
  }else{
    header('Location:../index.php');
  }
  
}
?>



