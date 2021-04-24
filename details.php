<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $title = $data['title'];
        $authFirstName = $data['authFirstName'];
        $authLastName = $data['authLastName'];
        $ISBN = $data['ISBN'];
        $description = $data['description'];
        $status = $data['status']; 
        $image = $data['image'];



        $table = "<tr>
            <td><img class='mb-3' src='pictures/" .$image."'</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>" .$title."</td>
        </tr>    
        <tr>
            <th>Author/Artist/Director</th>
            <td>" .$authFirstName." ".$authLastName."</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>" .$ISBN."</td>
        </tr>
        <tr>
            <th>Description</th>
            <td class='pb-5'>" .$description."</td>
        </tr>
        <tr>
            <th>Availability Status</th>
            <td>" .$status."</td>
        </tr>";

    } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CR10 Mario CRUD</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="css/styles.css">
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 13vh;
                margin-bottom: 13vh;
                width: 95% ;
            }  
   
        </style>
    </head>
    <body>
        <!--Navbar-component-->
       <?php include_once "components/nav.php";?>
        <fieldset>
            <legend class='h2'>Details for:<br><br> <?php echo $title ?> </legend>
            <form action="details.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                <?php echo $table;?>
                </table>
            </form>
        </fieldset>
        <!--Footer-component-->
        <?php include_once "components/footer.php";?>
    </body>
</html>