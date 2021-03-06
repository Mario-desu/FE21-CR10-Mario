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
        $publishDate = $data['publishDate'];
        $mediaType = $data['mediaType'];
        $aStatus = $data['status'];
        $pubName = $data['pubName'];
        $pubAddress = $data['pubAddress'];
        $publisherSize = $data['pubSize'];
        $image = $data['image'];

        // for dropdown availability

        $status = "";
        $result = mysqli_query($connect, "SELECT * FROM library GROUP BY status");

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            if($aStatus==$row["status"]){
                $selected="selected"; 
            }else{
                $selected="";		//Vorauswahl wird gefüllt
            }


            $status .=
                "<option value='{$row['status']}' $selected>{$row['status']}</option>";
        }



        // for dropdown publisher size

        $pubSize = "";
        $result = mysqli_query($connect, "SELECT * FROM library GROUP BY pubSize");

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            if($publisherSize==$row["pubSize"]){
                $selected="selected"; 
            }else{
                $selected="";		//Vorauswahl wird gefüllt
            }


            $pubSize .=
                "<option value='{$row['pubSize']}' $selected>{$row['pubSize']}</option>";
        }





        // for dropdown media type

        $type = "";
        $result = mysqli_query($connect, "SELECT * FROM library GROUP BY mediaType");

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            if($mediaType==$row["mediaType"]){
                $selected="selected"; 
            }else{
                $selected="";		//Vorauswahl wird gefüllt
            }


            $type .=
                "<option value='{$row['mediaType']}' $selected>{$row['mediaType']}</option>";
        }



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
        <title>Edit Media</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="css/styles.css">
        <style>

             <?php include "css/styles.css" ?>

            .img-thumbnail{
                
                height: 70px !important;
            }     

          </style>
    </head>
    <body>
        <!--Navbar-component-->
       <?php include_once "components/nav.php";?>
        <fieldset class="shadow-lg rounded">
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Title" value="<?php echo $title ?>"/></td>
                    </tr>    
                    <tr>
                        <th>First Name Author/Artist/Director</th>
                        <td><input class='form-control' type="text" name="authFirstName"  placeholder="First Name" value="<?php echo $authFirstName ?>" /></td>
                    </tr>
                    <tr>
                        <th>Last Name Author/Artist/Director</th>
                        <td><input class='form-control' type="text" name="authLastName"  placeholder="Last Name or Band" value="<?php echo $authLastName ?>"/></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="ISBN"  placeholder="ISBN" value="<?php echo $ISBN ?>"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description"  placeholder="Description" value="<?php echo $description ?>"/></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name="publishDate"  placeholder="Publish Date" value="<?php echo $publishDate ?>"/></td>
                    </tr>
                    <tr>
                        <th>Media Type</th>
                        <td>
                        <select select class="form-select" name="status" aria-label="Default select example">
                            <?php echo  $type; ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Availability Status</th>
                        <td>
                        <select select class="form-select" name="status" aria-label="Default select example">
                            <?php echo  $status; ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name="pubName"  placeholder="Publisher" value="<?php echo $pubName ?>"/></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name="pubAddress"  placeholder="Publisher Address" value="<?php echo $pubAddress ?>"/></td>
                    </tr>
                    <tr>
                        <th>Publisher Size</th>
                        <td>
                        <select select class="form-select" name="pubSize" aria-label="Default select example">
                            <?php echo  $pubSize; ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <!--Footer-component-->
        <?php include_once "components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
</html>