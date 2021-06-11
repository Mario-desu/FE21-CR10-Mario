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
        $date = $data['publishDate'];
        $type = $data ['mediaType'];
        $image = $data['image'];
        $publisher = $data['pubName'];

        //color depending on status

        if ($status == 'reserved'){
            $stColor = 'text-danger';
        }else if ($status == 'available')
            $stColor = 'text-success';

        $table = " <div class='row'>
        <div class='col-sm-4 my-3'>
            <div class='card p-2 shadow-lg' style='width: 50rem;'>
                <img src='pictures/" .$image."' class='card-img-top' alt=' .$title.'>
                <div class='card-body'>
                    <h5 class='card-title'>" .$title."</h5>
                    <p class='card-text'><b>Author/Artist/Director:</b> " .$authFirstName." ".$authLastName." </p>
                    <p class='card-text'><b>ISBN:</b> " .$ISBN."</p>
                    <p class='card-text'><b>Description:</b><br> " .$description."</p>
                    <p class='card-text'><b>Published:</b><br> " .$date."</p>
                    <p class='card-text'><b>Media Type:</b><br> " .$type."</p>
                    <p class='card-text'><b>Publisher:</b><br> " .$publisher."</p>
                    <p class='card-text ".$stColor."'><b>Availability Status:</b> " .$status."</p>
    
                                                    

                    <a href='index.php' class='btn btn-danger'>Back to all media</a>


                </div>
            </div>
        </div>
        </div>";

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
        
        <style>

            <?php include "css/styles.css" ?> 
            .card {
                margin: auto;
                margin-top: 13vh;
                margin-bottom: 13vh;
                }  
   
        </style>
    </head>
    <body>
        <!--Navbar-component-->
       <?php include_once "components/nav.php";?>
        
            
            <form action="details.php"  method="post" enctype="multipart/form-data">
                <div class="container d-flex justify-content-center">
                    <?php echo $table;?>
                </div>
            </form>
      
        <!--Footer-component-->
        <?php include_once "components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
    </body>
</html>