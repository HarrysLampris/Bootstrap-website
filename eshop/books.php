<?php 

session_start();

	

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}


require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Mobile phones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Phones -->
    <style>
        /* #phones_body {
            margin: 0;
            font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: .8125rem;
            font-weight: 400;
            line-height: 1.5385;
            color: #333;
            text-align: left;
            background-color: #f5f5f5
        } */

        .mt-50 {
            margin-top: 50px
        }

        .mb-50 {
            margin-bottom: 50px
        }

        .bg-teal-400 {
            background-color: #26a69a
        }

        a {
            text-decoration: none !important
        }

        .fa {
            color: red
        }
    </style>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="phone.css">



    <!--Navigation bar-->
    <?php 
        include 'nav.php';
    ?>
    <!--end of Navigation bar-->

    <!-- Phones -->
    <div class="container" >
            <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>
        </div>
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-content-end text-right mt-2">
            <nav>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                aria-hidden="true">«</span></a></li>
                    <li class="page-item"><a class="page-link" href="books.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="books1.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="books2.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="books1.php" aria-label="Next"><span
                                aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    
   


</body>

<!--footer-->
<?php 
include 'footer1.php';
?>
<!--end of footer-->

</html>