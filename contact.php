<?php
 include("includes/header.php");

 if(isset($_POST['submit']))
{
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $query = "INSERT INTO contact(fullname, email, message, subject) Values ('$name', '$email', '$message', '$subject')";
    if($mysqli->query($query) or die($mysqli->error))
    {

        echo "<script>alert('Your message has been sent Succesfully.')</script>";

    }
    else{
        echo "<script>alert('Your message could not be sent')</script>";
    }

}
?>
<?php
  $query2 = "SELECT * FROM background WHERE page = 'articles' LIMIT 1";
  $result = $mysqli->query($query2) or die($mysqli->error);
  $row = $result->fetch_assoc();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/images/<?php echo $row['picture']; ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Port-Harcourt, Nigeria</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="#">info@nigerianbarokehi.ng</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">nigerianbarokehi.ng</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">
            <form action="contact.php" method="POST" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="fullname">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-lg-6 d-flex">
          	<!-- <div id="map" class="bg-white"></div> -->
            <!-- <div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url(admin/images/<?php //echo $row['picture']; ?>);">
    					<a href="#" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="flaticon-auction"></span>
    					</a>
    				</div> -->
            <div class="half order-md-last mt-md-0 d-flex justify-content-center align-items-center img" style="background-image: url(images/bg_1.jpg);">
              <div class="overlay"></div>
              <div class="desc text-center">
                <!-- <div class="icon"><span class="flaticon-auction"></span></div> -->
                <h1><a href="index.php"><br><span>...Promoting the rule of law</span></a></h1>
              </div>
    			  </div>
          </div>
        </div>
      </div>
    </section>
<?php
include("includes/footer.php");
?>