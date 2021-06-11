<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = {$id}" ;
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    if ($result->num_rows == 1) {
        $title = $data['title'];
        $authFirstName = $data['authFirstName'];
        $authLastName = $data['authLastName'];
        $ISBN = $data['ISBN'];
        $description = $data['description'];
        $publishDate = $data['publishDate'];
        $mediaType = $data['mediaType'];
        $status = $data['status'];
        $pubName = $data['pubName'];
        $pubAddress = $data['pubAddress'];
        $pubSize = $data['pubSize'];
        $image = $data['image'];;
        
    } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CR10 Mario CRUD</title>
        <?php require_once 'components/boot.php'?>
        <style>
            <?php include "css/styles.css" ?> 
            fieldset {
                margin: auto;
                margin-top: 16vh;
                margin-bottom: 16vh;
                width: 70% ;
            }     
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }    
        </style>
    </head>
    <body>
         <!--Navbar-component-->
       <?php include_once "components/nav.php";?>
        <fieldset class="shadow-lg rounded">
            <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $title?></td>
                    <td><?php echo $authFirstName." ".$authLastName?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this media?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="image" value="<?php echo $image?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
            </form>
        </fieldset>
        <!--Footer-component-->
        <?php include_once "components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
    </body>

</html>