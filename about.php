<?php
 include("includes/header.php")
?>
<?php
  $query2 = "SELECT * FROM background WHERE page = 'about' LIMIT 1";
  $result = $mysqli->query($query2) or die($mysqli->error);
  $row = $result->fetch_assoc();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/images/<?php echo $row['picture']; ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <?php
      $query2 = "SELECT * FROM about LIMIT 1";
      $result = $mysqli->query($query2) or die($mysqli->error);
      $row = $result->fetch_assoc();
    ?>
    <section class="ftco-counter" id="section-counter">
    	<div class="container-fluid">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url(admin/images/<?php echo $row['picture']; ?>);">
    					<a href="#" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="flaticon-auction"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">NBA OKEHI BRANCH</span>
		            <h2 class="mb-4"><?php echo $row['header']?></h2>
		            <p><?php echo $row['about_text'];?></p>
		          </div>
		        </div>
            <?php
              $query2 = "SELECT * FROM history LIMIT 1";
              $result = $mysqli->query($query2) or die($mysqli->error);
              $row = $result->fetch_assoc();
            ?>
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">NBA OKEHI BRANCH HISTORY</span>
		            <h2 class="mb-4"><?php echo $row['heading']?></h2>
		            <p><?php echo $row['history'];?></p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-lawyer"></span>
		              	</div>
		                <strong class="number" data-number="500">0</strong>
		                <span>Qualified Lawyers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-medal"></span>
		              	</div>
		                <strong class="number" data-number="100">0</strong>
		                <span>Honors &amp; Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb services-section">
      <div class="container">
        <div class="row no-gutters d-flex">
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-auction"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Integrity</a></h3>
              <p>Maintenance and defence of the integrity and independence of the Bar and the Judiciary.</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-lawyer"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Professionalism</a></h3>
              <p> Promote timely and affordable access to Justice</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-medal"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Courage</a></h3>
              <p>Promote and protect the principles of the Rule of Law and respect for Human Rights</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-handshake"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Excellence</a></h3>
              <p>Maintenance of the highest standards of professional conduct, etiquette and discipline among lawyers.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      $query2 = "SELECT * FROM vision LIMIT 1";
      $result = $mysqli->query($query2) or die($mysqli->error);
      $row = $result->fetch_assoc();
    ?>
		<section class="ftco-consultation">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
    			<div class="half order-md-last mt-md-0 d-flex justify-content-center align-items-center img" style="background-image: url(images/bg_1.jpg);">
    				<div class="overlay"></div>
    				<div class="desc text-center">
    					<div class="icon"><span class="flaticon-auction"></span></div>
    					<h1><a href="index.php">NIGERIAN BAR ASSOCIATION <br><span>...Promoting the rule of law</span></a></h1>
    				</div>
    			</div>
    			<div class="half p-3 p-md-5 ftco-animate">
    				<h3 class="mb-4">Our Vision</h3>
            <br/>
            <p><?php echo $row['vision']; ?></p>
            <br/>
            <h3 class="mb-4">Our Mission</h3>
    				<p><?php echo $row['mission']; ?></p>
    			</div>
    		</div>
    	</div>
    </section>



    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
          <?php
          $query2 = "SELECT * FROM gallery ORDER BY id DESC";
          $result = $mysqli->query($query2) or die($mysqli->error);
          while ($row = $result->fetch_assoc())
          {
          ?>
            <div class="col-md-3 ftco-animate">
              <a href="admin/images/<?php echo $row['picture']?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(admin/images/<?php echo $row['picture']?>);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
                </div>
              </a>
            </div>
          <?php } ?>
        </div>
    	</div>
    </section>

<?php
include("includes/footer.php");
?>