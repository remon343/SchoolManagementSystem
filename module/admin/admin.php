<?php
// include "../../check_login/conn.php";

include "../../extra_php/count.php";
$username = $_SESSION['login_id'];

if(isset($username)){

    $session = $conn->query("SELECT Name FROM users WHERE username = '$username'");
    $row = mysqli_fetch_array($session);
    $login_session = $logged_user = $row['Name'];
   
}
else{   
    header("Location:../../");
}

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Admin</title>
</head>

<body>
    <h1>This is homepage for Admin</h1>
    <ul class="navbar">
        <li><a href="admin.php">Home</a></li>
        <li><a href="updateFacilitator.php">Update Facilitator</a></li>
        <li><a href="updateStudent.php">UpdateStudent</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
    <h1>Hey <?php echo "$logged_user";?></h1>

    <p style="font-size: 20px;">

        <?php
        echo "$count_admin Admins <br>";
        echo "$count_facilitator Facilitators <br>";
        echo "$count_student students.";
        ?>
    </p>
</body>

</html>