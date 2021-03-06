<?php 
require_once 'actions/db_connect.php';
if ($_GET['id']) {
    $id = $_GET['id'];

}


$sql = "SELECT * FROM library WHERE pubName = '$id'";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){  
        
        
             
        //color depending on status

        if ($row['status'] == 'reserved'){
            $stColor = 'text-danger';
        }else if ($row['status'] == 'available')
            $stColor = 'text-success';

            
         
            $status = '<i class="fas fa-circle"></i>';
        

        


        $tbody .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row['image']."'</td>
            <td>" .$row['title']. " <span class='$stColor'>$status</span></td>
            <td>" .$row['authFirstName']." ".$row['authLastName']."</td>
            <td>" .$row['ISBN']."</td>
            <td>" .$row['publishDate']."</td>
            <td>" .$row['mediaType']."</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm deleteBtn' type='button'>Delete</button></a></td>
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
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/3543c7cdbb.js" crossorigin="anonymous"></script>
        <style>

            <?php include "css/styles.css" ?>   
           
        </style>
  
    </head>
    <body>
     <!--Navbar-component-->
       <?php include_once "components/nav.php";?>
        <div class="manageProduct mt-3 mb-5">    

            <p class='h2'><?php echo $id ?></p>
            <div style="overflow-x:auto;">
                <table class='table table-striped shadow-lg rounded'>
                    <thead class='table-success'>
                        <tr>
                            <th>Picture</th>
                            <th>Title (status)</th>
                            <th>Author/Artist/Director</th>
                            <th>ISBN</th>
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
        </div>
        <!--Footer-component-->
        <?php include_once "components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
    </body>
</html>