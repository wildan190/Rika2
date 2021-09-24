<?php
include 'includes/data.php';

if(isset($_POST['insert']))
{
    $fasilitas         = clean($_POST['fasilitas']);

    $keterangan     = clean($_POST['keterangan']);
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "images/".$image_name;


    move_uploaded_file($image, $location);


    $query = "INSERT INTO facilities (fasilitas,keterangan,image) VALUES ('".escape($fasilitas)."','".escape($keterangan)."' , '$image_name')";

    $result = mysqli_query($conn,$query);

    if($result == true)
    {
        header("Location:fasilitas.php");
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
    <title>Insert Data</title>
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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
    <input type="text" name="fasilitas" class="form-control" placeholder="Enter fasilitas">
</div>
<div class="form-group">
    <label for="name">Keterangan:</label>
    <textarea type="text" name="keterangan" class="form-control" placeholder="Enter Pelajaran"></textarea>
    <p id="demo"></p>
    <script>
    function myFunction(event) {
    var x = event.keyCode;
    var res;
    if(x==13){
    res="&ltp&gt" + document.getElementById("texta").value +"&lt/p&gt";
    document.getElementById("demo").innerHTML = res;
        }
    }
    </script>
</div>
<div class="form-group">
    <label for="name">Image:</label>
    <input type="file" class="btn btn-primary" name="image" class="form-control" placeholder="Enter Image">
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
