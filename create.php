<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <?php require_once 'components/boot.php'?>
       <link rel="stylesheet" href="css/styles.css">
       <title>CR10 Mario CRUD</title>
       <style>
           fieldset {
               margin: auto;
               margin-top: 13vh;
               margin-bottom: 13vh;
               width: 70% ;
           }      
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
                        <td><input class='form-control' type="text" name="mediaType"  placeholder="Media Type" /></td>
                    </tr>
                    <tr>
                        <th>Availability Status</th>
                        <td><input class='form-control' type="text" name="status"  placeholder="Status" /></td>
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
                        <td><input class='form-control' type="text" name="pubSize"  placeholder="Publisher Size" /></td>
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