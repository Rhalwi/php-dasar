<?php
session_start();

$conn = mysqli_connect("localhost","root","","phpdasar");

if( isset( $_POST["login"] )) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // $query = ;
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'AND password = '$password'");

// cek username
    if(mysqli_num_rows($result) === 1){

        // cek password
        $row = mysqli_fetch_assoc($result);
            // set session
            
            header("Location: index.php");
            exit;
        // if(password_verify($password, $row["password"])){
        //     header("Location: index.php");
        //     exit;
        // }
    }
    
}
$error = true;

?>
<html lang="en">
<head>
    
    <title>Login</title>
</head>
<body>
    <form action="" method="post" >
        <ul>
            <li>
                <input type="text" placeholder="username" name="username" id="username">
            </li>
            <li>
                <input type="password" placeholder="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
        <!-- <div >
            
        </div>
        <div >
            
        </div> -->
            
    </form>  
</body>
</html>