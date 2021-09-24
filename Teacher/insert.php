<?php
include 'includes/db.php';

if(isset($_POST['insert']))
{
    $name         = clean($_POST['name']);
    $NIP        = clean($_POST['NIP']);
    $email        = clean($_POST['email']);
    $pelajaran     = clean($_POST['pelajaran']);
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "images/".$image_name;


    move_uploaded_file($image, $location);


    $query = "INSERT INTO teacher (name,NIP,email,pelajaran,image) VALUES ('".escape($name)."', '".escape($NIP)."','".escape($email)."','".escape($pelajaran)."' , '$image_name')";

    $result = mysqli_query($conn,$query);

    if($result == true)
    {
        header("Location:teacher.php");
    }
    else
    {
        die('error' . mysqli_error($conn));
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data pengajar</title>
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
<div class="container">

<div class="jumbotron text-center">
    <h2>Add Data</h2>
</div>
<br>
<div class="row">
<div class="col-md-12">

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Name">
</div>
<div class="form-group">
    <label for="name">NIP:</label>
    <input type="text" name="NIP" class="form-control" placeholder="Enter NIP">
</div>
<div class="form-group">
    <label for="name">Email:</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
</div>
<div class="form-group">
    <label for="name">Pelajaran:</label>
    <input type="text" name="pelajaran" class="form-control" placeholder="Enter Pelajaran">
</div>
<div class="form-group">
    <label for="name">Image:</label>
    <input type="file" class="btn btn-primary" name="image" class="form-control" placeholder="Enter email">
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success" value="Insert data" name="insert">
</div>
</form>
</div>
</div>

</div>
    
</body>
</html>
