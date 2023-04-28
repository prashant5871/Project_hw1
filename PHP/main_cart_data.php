<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="\Project_practies\CSS\main_cart_data.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cart Data</title>

    <style>
        .container {
          /* display: flex; */
          display: grid;
          grid-template-columns: repeat(4,1fr);
        }
        .cart_info{
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <?php

    session_start();
    include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

    include 'C:\xampp\htdocs\Project_practies\PHP\navbar.php';

    $id = $_SESSION['id'];

    $select_query = "select * from cart where id=$id";
    $query = mysqli_query($con, $select_query);
    ?>
    <div class="container">
        <?php
        while ($arr = mysqli_fetch_assoc($query)) {
            // echo $arr['name'];
        ?>

            <div class="cart_info">
                <table>
                    <tr>
                        <td colspan="2">
                            <img src="<?php echo $arr['photo']; ?>" alt="<?php echo $arr['name']; ?>" height="200">
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo  $arr['name']; ?></td>
                    </tr>
                    <tr>
                        <td>price</td>
                        <td><?php echo  $arr['price']; ?></td>
                    </tr>
                    <tr>
                        <td>disscount</td>
                        <td><?php echo  $arr['disscount']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="\Project_practies\PHP\main_remove_cart.php?name=<?php echo $arr['name']
                                                                                        ?>">
                                <img src="\Project_practies\images\delete_logo.png" alt="Delte logo" title="Delete" height="30">
                            </a>

                        </td>
                    </tr>
                </table>
            </div>

        <?php
            // echo '<br>';
        }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>