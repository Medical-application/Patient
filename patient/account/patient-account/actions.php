<?php
session_start();
$server_name = "localhost";
$server_user = "root";
$db_password = "";
$db_name = "users";



try{
$conn = mysqli_connect($server_name, $server_user, $db_password, $db_name);

}
catch(mysqli_sql_exception){
    echo "connection error";
}

if(isset($_POST["register-submit"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $password=password_hash($password,PASSWORD_DEFAULT);
    $new_user="INSERT INTO persons (username,email,phone,pass)
                        VALUES ('$username','$email','$phone','$password')";
    if(mysqli_query($conn,$new_user)){
        $userId="SELECT id FROM persons
                        WHERE email='$email'";
       if($userId=mysqli_query($conn,$userId)){
            $row=mysqli_fetch_assoc($userId);
            $userId=$row['id'];
              $new_partient="INSERT INTO patients (user_id,fullname,emai,phone)
                                VALUES ('$userId','$username','$email','$phone')";
            mysqli_query($conn,$new_partient);
       }
    }
          $_SESSION["name"]=$username;
            header("Location: account.php");
}

?>