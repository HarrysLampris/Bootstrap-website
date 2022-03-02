<!DOCTYPE html>
<html lang="en">
    <head>
 
        <title>Bootstrap Tutorial Sample Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>	
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="phone.css">
	
	
	
	<!--Navigation bar-->
<?php 
include 'nav.php';
?>
<!--end of Navigation bar-->

	<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex flex-row justify-content-between align-items-center filters">
                <h6>Showing 291 tasks</h6>
                <div class="right-sort">
                    <div class="sort-by"><span class="mr-1">Sort by:</span><a href="#">Most popular</a><i class="fa fa-angle-down ml-1"></i><button class="btn btn-outline-dark btn-sm ml-3 filter" type="button">Filters&nbsp;<i class="fa fa-flask"></i></button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-8"> <a href="#" class="title" data-abc="true">ASUS Laptop - 5GB RAM</a> </div>
                        <div class="col-md-4">
                            <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                </figcaption>
                <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                    <div class="price-wrap"> <span class="price h5">$999</span> <br> <small class="text-success">Free shipping</small> </div>
                </div>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571751108/Ecommerce/laptop-dell-xps-15-computer-monitors-laptops.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-8"> <a href="#" class="title" data-abc="true">Dell Laptop - 5GB RAM</a> </div>
                        <div class="col-md-4">
                            <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                </figcaption>
                <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                    <div class="price-wrap"> <span class="price h5">$999</span> <br> <small class="text-success">Free shipping</small> </div>
                </div>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750722/Ecommerce/acer-v-17-nitro-realsense.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-8"> <a href="#" class="title" data-abc="true">Acer Laptop - 5GB RAM</a> </div>
                        <div class="col-md-4">
                            <div class="rating text-right"> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                </figcaption>
                <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                    <div class="price-wrap"> <span class="price h5">$999</span> <br> <small class="text-success">Free shipping</small> </div>
                </div>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750391/Ecommerce/hp-17-x061nr-white-background.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-8"> <a href="#" class="title" data-abc="true">HP Laptop - 5GB RAM</a> </div>
                        <div class="col-md-4">
                            <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                </figcaption>
                <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                    <div class="price-wrap"> <span class="price h5">$999</span> <br> <small class="text-success">Free shipping</small> </div>
                </div>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750338/Ecommerce/Laptop-3.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-8"> <a href="#" class="title" data-abc="true">Dell Laptop - 5GB RAM</a> </div>
                        <div class="col-md-4">
                            <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                </figcaption>
                <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                    <div class="price-wrap"> <span class="price h5">$399</span> <br> <small class="text-success">Free shipping</small> </div>
                </div>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-8"> <a href="#" class="title" data-abc="true">Dell Laptop - 5GB RAM</a> </div>
                        <div class="col-md-4">
                            <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                </figcaption>
                <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                    <div class="price-wrap"> <span class="price h5">$599</span> <br> <small class="text-success">Free shipping</small> </div>
                </div>
            </figure>
        </div>
    </div>
    <div class="d-flex justify-content-end text-right mt-2">
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="books.php" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="page-item"><a class="page-link" href="books.php">1</a></li>
                <li class="page-item"><a class="page-link" href="books1.php">2</a></li>
                <li class="page-item"><a class="page-link" href="books2.php">3</a></li>
                <li class="page-item"><a class="page-link" href="books2.php" aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
        </nav>
    </div>
</div>
	
        <script src="jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
    </body>
	
		<!--footer-->
<?php 
include 'footer1.php';
?>
<!--end of footer-->
    
</html>