<?php
    include "conn.php";
    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM sheesh WHERE id='$ref_id'");

    while($d=mysqli_fetch_object($getdata)){
        $name = $d -> name;
        $email = $d -> email;
        $pass = $d -> password;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <form action="process.php?id=<?php echo $ref_id?>" method="POST">
    <label>Name</label></br>
    <input type="text" name="up_name" value="<?php echo $name; ?>" required></p>

    <label>Email</label></br>
    <input type="text" name="up_mail" value="<?php echo $email; ?>" required></p>
    <label>Password</label></br>
    <input type="text" name="up_pass"value="<?php echo $pass; ?>" required></p>

    <input type="submit" name="update" value="UPDATE"></p>


    </form>

</body>
</html>