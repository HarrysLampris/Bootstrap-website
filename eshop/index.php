<?php 

session_start();

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<html lang="en">

<head>
    <title>Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="main.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script> -->
</head>

<body>

    <!--Navigation bar-->
    <?php 
        include 'nav.php';
    ?>

    <header class="page-header header container-fluid">

        <div class="overlay"></div>

        <div class="description">
            <h1>Welcome to our Eshop!</h1>
            <p>Here you can find the latest technology on smartphones. Please feel free to brwose our website, we have
                everything you need!</p>
        </div>

    </header>


    <div class="container features">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">NEWS</h3>
                <img src="images/news.jpg" height="200px" width="350px">

                <li>Our sign up form is up and working. Go check it out by clicking sign up now!</li>
                <li>Now we have added a contact form! By using the contact form you can get it touch with us.</li>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">ANNOUNCMENTS</h3>
                <img src="images/announcements.jpg" height="200px" width="350px">

                <li>New price drop on iPhone 13, get one for yourself fast!</li>
                <li>You want something cheap and reliable? Try Realme C11 2021, it has just what you need!</li>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">EVENTS</h3>
                <img src="images/events.jpg" height="200px" width="350px">

                <li>The Galaxy S21 did not do so well in the end. Although the sales targets were revised downwards.</li>
                <li>The Galaxy S21 FE is official and blurs the line between flagship and mid-range </li>
                <li>Xiaomi Redmi Note 11: We learned the price that will come in Europe </li>
            </div>
        </div>
    </div>
</body>

<!--footer-->
<?php 
    include 'footer1.php';
?>

</html>