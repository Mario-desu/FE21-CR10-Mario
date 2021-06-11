<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM library";
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
            <td>" .$row['title']. " <span class='$stColor'>".$status."</span></td>
            <td>" .$row['authFirstName']." ".$row['authLastName']."</td>
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
        <!--Bootstrap component-->
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="css/styles.css">
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/3543c7cdbb.js" crossorigin="anonymous"></script>
        <style>
            @media screen and (max-width:1009px) {
        .deleteBtn {margin-top: 10px}
        }
        </style>     
    </head>
    <body>
        <!--Navbar-component-->
       <?php include_once "components/nav.php";?>



        <div class="manageProduct w-75 mt-3 mb-5">    
            <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add media</button></a>
            </div>
            <p class='h2'>Media</p>
            <div style="overflow-x:auto;">
            <table class='table table-striped'>
                <thead class='table-style'>
                    <tr>
                        <th>Picture</th>
                        <th>Title (status)</th>
                        <th>Author/Artist/Director</th>
                        <th>Type</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bg-light">
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