<?php 

session_start();

	

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Bootstrap </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Contact Form -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="main.css">

  <!--Navigation bar-->
  <?php 
    include 'nav.php';
  ?>
  <!--end of Navigation bar-->

  <!-- Contact Form -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <div class="container">
    <h2 class="text-center">Contact Form</h2>
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 pb-5">

        <!--Form with header-->
        <form action="mail.php" method="post">
          <div class="card border-primary rounded-0">
            <div class="card-header p-0">
              <div class="bg-info text-white text-center py-2">
                <h3><i class="fa fa-envelope"></i> Get in touch!</h3>
                <p class="m-0">We would love to hear from you!</p>
              </div>
            </div>
            <div class="card-body p-3">

              <!--Body-->
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                  </div>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                  </div>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com"
                    required>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                  </div>
                  <textarea id="message" name="message" class="form-control" placeholder="Message" required></textarea>
                </div>
              </div>

              <div class="text-center">
                <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2"
                  onclick="validateForm();">
              </div>
            </div>

          </div>
        </form>
        <!--Form with header-->


      </div>
    </div>
  </div>

  <script>
    function validateForm() {
      var name = document.getElementById('name').value;
      if (name == "") {
        document.querySelector('.status').innerHTML = "Name cannot be empty";
        return false;
      }
      var email = document.getElementById('email').value;
      if (email == "") {
        document.querySelector('.status').innerHTML = "Email cannot be empty";
        return false;
      } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(email)) {
          document.querySelector('.status').innerHTML = "Email format invalid";
          return false;
        }
      }
      var message = document.getElementById('message').value;
      if (message == "") {
        document.querySelector('.status').innerHTML = "Message cannot be empty";
        return false;
      }
      // document.querySelector('.status').innerHTML = "Sending...";
    }
  </script>
</body>

<!--footer-->
<?php 
  include 'footer1.php';
?>
<!--end of footer-->

</html>