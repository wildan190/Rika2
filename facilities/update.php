<?php
include 'includes/data.php';
?>

<?php 

if(isset($_GET['update'])){
    
    
    $id = $_GET['update'];
    

$query = "SELECT * FROM facilities WHERE id = $id";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
            $fasilitas  = $row['fasilitas'];
            $keterangan = $row['keterangan'];
            $image = $row['image'];

        }
    }
}

if(isset($_POST['update'])){
    

    $fasilitas         = clean($_POST['fasilitas']);
    $keterangan = clean($_POST['keterangan']);
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "images/".$image_name;

    move_uploaded_file($image, $location);

    $query  = "UPDATE facilities SET ";
    $query .= "fasilitas = '".escape($fasilitas)."', ";
    
    $query .= "keterangan = '".escape($keterangan)."', ";
    $query .= "image = '{$image_name}' ";
    $query .= "WHERE id = {$id} ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:fasilitas.php');
    }
    else
    {
        die('error' . mysql_error($conn));
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
<div class="container">
    <div class="jumbotron text-center">
        <h2> Update Data</h2>
    </div>
    <br>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="fasilitas" class="form-control" placeholder="Enter fasilitas" value="<?php echo $fasilitas ?>">
    </div>
    <div class="form-group">
        <label for="name">Keterangan:</label>
        <textarea type="text" name="keterangan" class="form-control" placeholder="Enter Pelajaran" value="<?php echo $keterangan ?>"></textarea>
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
        <img src= "<?= "images/".$image?>" alt="" width="100px" height="100px" class="thumbnail">
        <input type="file" name="image" class="form-control" placeholder="Enter email" value="<?php echo $email ?>">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Update data" name="update">
    </div>
</form>

</div>
</body>
</html>
