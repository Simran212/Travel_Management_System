<?php
include './inc/config.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $plcName = $_POST['place'];
    $members = $_POST['members'];
    $arriv = $_POST['arrivals'];
    $leav = $_POST['leaving'];
    $errCount = 0;

    if (isset($plcName) && $plcName !='') {
        // $nameErr = 1;    
        $errCount = 0;
    } 
    else{
        $errCount = 1;
    }

    if (isset($members) && $members !='') {
        // $nameErr = 1;    
        $errCount = 0;
    } 
    else{
        $errCount = 1;
    }
      
    if (isset($arriv) && $arriv !='') {
    // $emailErr = 1;
    $errCount = 0;
    } 
    else{
        $errCount = 1;
    }
    
    if (isset($leav) && $leav !='') {
    // $genderErr = 1;
    $errCount = 0;
    } 
    else{
        $errCount = 1;
    }

 
if($errCount == 0){
    
    $sql = "INSERT INTO bookings (bId, placeName, members, arrivals, leaving) VALUE (NULL, '$plcName', '$members', '$arriv', '$leav')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
         header('Location:index.php');
        //header("Location: https://example.com/myOtherPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
else{
    
    header('Location:index.php');
   
}
   
}


mysqli_close($conn);
?>


