<?php
require_once 'db_connect.php';
require_once  'file_upload.php';

if ($_POST) {  
   $title = $_POST['title'];
   $authFirstName = $_POST['authFirstName'];
   $authLastName = $_POST['authLastName'];
   $ISBN = $_POST['ISBN'];
   $description = $_POST['description'];
   $publishDate = $_POST['publishDate'];
   $mediaType = $_POST['mediaType'];
   $status = $_POST['status'];
   $pubName = $_POST['pubName'];
   $pubAddress = $_POST['pubAddress'];
   $pubSize = $_POST['pubSize'];
   $uploadError = '';
   //this function exists in the service file upload.
   $image = file_upload($_FILES['image']);  
 
   $sql = "INSERT INTO library (title, image, ISBN, description, publishDate, mediaType, status, authFirstName, authLastName, pubName, pubAddress, pubSize) VALUES ('$title', '$image->fileName', '$ISBN', '$description', '$publishDate', '$mediaType', '$status', '$authFirstName', '$authLastName', '$pubName', '$pubAddress', '$pubSize')";

   if ($connect->query($sql) === true ) {
       $class = "success";
       $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $authLastName </td>
            </tr></table><hr>";
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while creating record. Try again: <br>" . $connect->error;
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   }
   $connect->close();
} else {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/boot.php' ?>
       <style>
           <?php include_once "../css/styles.php";?>
       </style>
   </head>
   <body>
   <?php include_once "../components/nav.php";?>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Create request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary"  type='button'>Home</button></a>
           </div >
       </div>
       <?php include_once "../components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "../components/boot_js.php";?>
   </body>
</html>