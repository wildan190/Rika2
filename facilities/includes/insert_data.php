<?php

include 'data.php';


if(isset($_POST['insert'])){
    
    $fasilitas  = clean($_POST['fasilitas']);
    
    $keterangan = clean($_POST['keterangan']);
    
    $query = "INSERT INTO `facilities` (fasilitas,keterangan) VALUES ('".escape($fasilitas)."','".escape($keterangan)."') ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:../events.php');
    }
    
}


?>