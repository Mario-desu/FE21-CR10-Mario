<?php
require_once 'actions/db_connect.php';

// for dropdown availability

$status = "";
$result = mysqli_query($connect, "SELECT * FROM library GROUP BY status");

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $status .=
        "<option value='{$row['status']}'>{$row['status']}</option>";
}

// for dropdown publisher size

$pubSize = "";
$result = mysqli_query($connect, "SELECT * FROM library GROUP BY pubSize");

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $pubSize .=
        "<option value='{$row['pubSize']}'>{$row['pubSize']}</option>";
}

// for dropdown media type

$type = "";
$result = mysqli_query($connect, "SELECT * FROM library GROUP BY mediaType");

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $type .=
        "<option value='{$row['mediaType']}'>{$row['mediaType']}</option>";
}


?>



<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <?php require_once 'components/boot.php'?>
       <title>CR10 Mario CRUD</title>
       <style>
           <?php include "css/styles.css" ?> 
       </style>
   </head>
   <body>
              <!--Navbar-component-->
              <?php include_once "components/nav.php";?> 
        <fieldset>
            <legend class='h2'>Add Media</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Title" /></td>
                    </tr>    
                    <tr>
                        <th>First Name Author/Artist/Director</th>
                        <td><input class='form-control' type="text" name="authFirstName"  placeholder="First Name" /></td>
                    </tr>
                    <tr>
                        <th>Last Name Author/Artist/Director</th>
                        <td><input class='form-control' type="text" name="authLastName"  placeholder="Last Name or Band" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="ISBN"  placeholder="ISBN" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description"  placeholder="Description" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name="publishDate"  placeholder="Publish Date" /></td>
                    </tr>
                    <tr>
                        <th>Media Type</th>
                        <td>
                        <select select class="form-select" name="mediaType" aria-label="Default select example">
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
                        <td><input class='form-control' type="text" name="pubName"  placeholder="Publisher" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name="pubAddress"  placeholder="Publisher Address" /></td>
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
                        <td><button class='btn btn-success' type="submit">Insert Media</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                    
                </table>
            </form>
        </fieldset>
        <!--Footer-component-->
       <?php include_once "components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
   </body>
</html>