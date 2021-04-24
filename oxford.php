<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM library WHERE pubName ='Oxford University Press'";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row['image']."'</td>
            <td>" .$row['title']."</td>
            <td>" .$row['authFirstName']." ".$row['authLastName']."</td>
            <td>" .$row['ISBN']."</td>
            <td>" .$row['description']."</td>
            <td>" .$row['publishDate']."</td>
            <td>" .$row['mediaType']."</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm mb-1' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            <td><a href='details.php?id=" .$row['id']."'><button class='btn btn-info btn-sm' type='button'>Show Media</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='8'><center>No Data Available </center></td></tr>";
}

$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CR10 Mario CRUD</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="css/styles.css">
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
     <!--Navbar-component-->
       <?php include_once "components/nav.php";?>
        <div class="manageProduct w-75 mt-3 mb-5">    

            <p class='h2'>Oxford University Press</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Picture</th>
                        <th>Title</th>
                        <th>Author/Artist/Director</th>
                        <th>ISBN</th>
                        <th>Description</th>
                        <th>Publish Date</th>
                        <th>Type</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class='bg-light'>
                    <?php echo "$tbody";?>
                </tbody>
            </table>
        </div>
        <!--Footer-component-->
        <?php include_once "components/footer.php";?>
    </body>
</html>