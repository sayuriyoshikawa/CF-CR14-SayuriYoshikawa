<?php
require_once '../../components/db_connect.php';
require_once  'file_upload.php';

if ($_POST) {  
    $locationName = $_POST['locationName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $duration = $_POST['duration'];
    $continent = $_POST['continent'];	
   $uploadError = '';
   //this function exists in the service file upload.
   $picture = file_upload($_FILES['picture']);  
 
   $sql = "INSERT INTO travel (locationName, price, duration, description, longitude, latitude, picture, continent) VALUES ('$locationName', $price, '$duration', '$description', '$longitude', '$latitude', '$picture->fileName' ,'$continent')" ;


   if (mysqli_query($connect, $sql) === true) {
       $class = "success";
       $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $locationName </td>
            <td> $price </td>
            </tr></table><hr>";
       $uploadError = ($picture->error != 0)? $picture->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while creating record. Try again: <br>" . $connect->error;
       $uploadError = ($picture->error != 0)? $picture->ErrorMessage :'';
   }
   mysqli_close($connect);
} else  {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../../components/boot_css.php'?>
    </head>
   <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>"  role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? '' ; ?></p>
                <a href='../../index.php'><button class="btn btn-primary"  type='button'>Home</button></a>
            </div>
       </div>
   </body>
</html>