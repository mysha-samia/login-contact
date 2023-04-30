<?php
required("connection.php");
?> 


<html>
<head>
<title>HTML_NEW</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
    <h2>ADMIN LOGIN</h2>
    <form method="POST">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Admin Name" name="AdminName">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="AdminPassword">
        </div>
        
        <button type="submit" name ="Signin">Sign In</button>

        <div class="extra">
            <a href="#">Forgot Password ?</a>
            <a href="#">Create an Account</a>
        </div>

    </form>
</div>
<?php
if(isset($_POST['Signin'])){
    echo "clicked";
    $query="SELECT * FROM `admin_login` WHERE `Admin_Name` = '$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword] ";
    $data=mysqli_query($con,& $query);
    if(mysqli_num_rows($data)==1)
    {
        session_start();
    }
    else{
        echo "<script>alert('Incorrect Password');</script>";
    }
}
?>

</body>
</html> 