<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

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
    $id = $_POST['id'];
    //variable for upload pictures errors is initialized
    $uploadError = '';

    $image = file_upload($_FILES['image']);//file_upload() called  
    if($image->error===0){
        ($_POST["image"]=="product.png")?: unlink("../pictures/$_POST[image]");           
        $sql = "UPDATE library SET title = '$title', authFirstName = '$authFirstName', authLastName = '$authLastName', ISBN = '$ISBN', description = '$description', publishDate = '$publishDate', mediaType = '$mediaType', status = '$status', pubName = '$pubName', pubAddress = '$pubAddress', pubSize = '$pubSize', image = '$image->fileName' WHERE id = {$id}";
    }else{
        $sql = "UPDATE library SET title = '$title', authFirstName = '$authFirstName', authLastName = '$authLastName', ISBN = '$ISBN', description = '$description', publishDate = '$publishDate', mediaType = '$mediaType', status = '$status', pubName = '$pubName', pubAddress = '$pubAddress', pubSize = '$pubSize' WHERE id = {$id}";
    }    
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }
    $connect->close();    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>