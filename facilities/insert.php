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
        header("Location:events.php");
    }
    else
    {
        die('error' . mysqli_error($conn));
    }

}


?>
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
        <input type="file" class="btn btn-primary" name="image" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Insert data" name="insert">
    </div>
</form>
</div>
</div>

</div>
