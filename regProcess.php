<?php 
include './inc/config.php';
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $userName = $_POST['uName'];
    $mobNo = $_POST['uNo'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    $password = $_POST['password'];
    $errCount = 0;

    if (isset($userName) && $userName !='') {
        // $nameErr = 1;    
        $errCount = 0;
    } 
    else{
        $errCount = 1;
    }

    if (isset($mobNo) && $mobNo !='') {
        // $nameErr = 1;    
        $errCount = 0;
    } 
    else{
        $errCount = 1;
    }

    if (isset($add) && $add !=''){
        // $pwdErr = 1;
        $errCount = 0;
    }
    else{
        $errCount = 1;
    }


    if (isset($password) && $password !=''){
        // $pwdErr = 1;
        $errCount = 0;
    }
    else{
        $errCount = 1;
    }
      
    if (isset($email) && $email !='') {
    // $emailErr = 1;
    $errCount = 0;
    } 
    else{
        $errCount = 1;
    }
    

 
if($errCount == 0){

    $sql = "INSERT INTO customers (cId, cusName, cusMob, cusEmail, cusAdd, cusPwd, cusStatus) VALUES (NULL, '$userName', $mobNo, '$email', '$add','$password', '1')";

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        header('Location:index.php');
        echo "New record created successfully";
        //header("Location: https://example.com/myOtherPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// else{
    
//     // header('Location:index.php?errName=1&errPwd=1&errEmail=1&errGen=1&errCity=1');
   
// }
   
}


mysqli_close($conn);
?>