<header id="header">
<nav class="navbar navbar-expand-md">
	<img src="images/icon1.jpeg" width="93" height="93" style="border-radius: 50%;">
	<a class="navbar-brand" href="#" ></a>
	
	<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="main-navigation">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li> 
			<?php 
                        if (!isset($_SESSION["userlogin"])){
                            echo 	"<li class=\"nav-item\"><a class=\"nav-link\" href=\"sign_up.php\">Sign up</a></li>";
                          }
                           ?>
		
			
			<li class="nav-item">
				<a class="nav-link" href="books.php">Mobile phones</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
			<li style="float:right;"> <a class="nav-link" id="navB"  onclick="redir()">log</a>
			</li>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                   
                </a>
            </div>
        </div>
		</ul>
	</div>
</nav>
</header>
<script>
       
       var action = <?php  if (isset($_SESSION["userlogin"])){
                          echo  json_encode('Log Out');
                        }
                        else{
                           echo json_encode('Log in');
                        } ?>; 
                           document.getElementById("navB").innerHTML= action;
                      

                        function redir(){
                            if (action=='Log Out'){
                                alert(action);
                                window.location.href ="logout.php";
                            }
                            else{
                                window.location.href ="login.php";
                            }
                        }

    </script>