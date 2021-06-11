<?php 
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $image = $_POST['image'];
    ($image =="product.png")?: unlink("../pictures/$image");

    $sql = "DELETE FROM library WHERE id = {$id}";
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "Successfully Deleted!";
    } else {
        $class = "danger";
        $message = "The entry was not deleted due to: <br>" . $connect->error;
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
        <title>Delete</title>
        <?php require_once '../components/boot.php'?>
        <style>
          <?php include_once "../css/styles.php";?>  
        </style>
    </head>
    <body>
    <?php include_once "../components/nav.php";?>  
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Delete request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?=$message;?></p>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
        <?php include_once "../components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "../components/boot_js.php";?>
    </body>
</html>