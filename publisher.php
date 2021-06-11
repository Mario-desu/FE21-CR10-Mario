<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM library GROUP BY pubName";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table

//created column in db for publisher subpage, so that it is dynamic
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td><a href='puball.php?id=" .$row['pubName']."'>".$row['pubName']."</a></td>
            
            <td>" .$row['pubAddress']."</td>
            <td>" .$row['pubSize']."</td>
            <td>for all media of this Publisher <b>click name!</b></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='4'><center>No Data Available </center></td></tr>";
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
        <style>
            .manageProduct table{
                margin-bottom: 40vh;
            }

        </style>    
       
    </head>
    <body>
                <!--Navbar-component-->
       <?php include_once "components/nav.php";?>
        <div class="manageProduct w-75 mt-5 mb-5">    
            
            <p class='h2'>Publishers</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Publisher</th>
                        <th>Address</th>
                        <th>Size</th>
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
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
    </body>
</html>