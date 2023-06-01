<?php 

session_start(); 


include "../includes/db.php";
$mobile=$_POST['phone'];
$email=$_POST['email'];
$uname=$_POST['name'];
$pass=$_POST['password'];


if (empty($_POST['name'] || $_POST['email'] || $_POST['phone'] || $_POST['password'])) {
    echo' <script>alert("Please complete the registration form!")
    history.back()
    </script>';
}else{
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo' <script>alert("Email is not valid!")
        history.back()
        </script>';
        exit();
    }elseif (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        echo' <script>alert("Password must be between 5 and 20 characters long!")
        history.back()
        </script>';
        exit();
    }elseif (preg_match('/^[a-zA-Z0-9]+$/', $_POST['password']) == 0) {
        echo' <script>alert("password should not contain /^[a-zA-Z0-9]+$/!")
        history.back()
        </script>';
        exit();
    }elseif (strlen($_POST['phone']) < 10 || strlen($_POST['phone']) <10) {
        echo' <script>alert("enter valid number without country code")
        history.back()
        </script>';
        exit();
    }else{
    $user = "SELECT * FROM `user` WHERE `phone`='$mobile' ";
    $user_run=mysqli_query($conn,$user);
    $usere = "SELECT * FROM `user` WHERE `email`='$email' ";
    $usere_run=mysqli_query($conn,$usere);
    if(mysqli_num_rows($user_run)>0){
        echo' <script>alert("mobile alredy exists")
        history.back()
                </script>';
                exit();

    }elseif(mysqli_num_rows($usere_run)>0){
        echo' <script>alert("email alredy exists")
        history.back()
                </script>';
                exit();
    }else{
         // Insert image file name into database
         $insert = $conn->query("INSERT into user (name, phone ,email,pass) VALUES ('$uname',' $mobile','$email','$pass')");
        
         if($insert){
            echo' <script>alert("User registered successfully")
                location.href = "../"
                </script>';
                exit();

         }
    }

    }
}
?>
