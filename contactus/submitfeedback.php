<?php 

session_start(); 
$uid=$_SESSION['uid'];

include "../includes/db.php";
$mobile=$_POST['phone'];
$email=$_POST['email'];
$uname=$_POST['name'];
$msg=$_POST['msg'];


if(isset($_POST['submit'])){

if (empty($mobile ||$email || $uname )) {
    // One or more values are empty.
    echo' <script>alert("Please complete the form !")
    history.back()
    </script>';
}else{
   
         // Insert image file name into database
         $insert = $conn->query("INSERT into feedback (`name`, `phone` ,`email`,`msg`,`uid`) VALUES ('$uname',' $mobile','$email','$msg','$uid')");
         echo $insert;
        
         if($insert){
            echo' <script>alert("Submited")
            history.back()
            </script>';
                exit();

         }

    }
}else{
    echo "Someting went wrong";
}
?>
