<?php
 include("includes/header.php")
?>
<?php
    $query2 = "SELECT * FROM home";
    $result = $mysqli->query($query2) or die($mysqli->error);
    $row = $result->fetch_assoc()
?>
<div class="hero-wrap js-fullheight" style="background-image: url('admin/images/<?php echo $row['picture']; ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">

            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            	<span><?php echo $row['text']; ?></span>
            </h1>
            <p><a href="#" class="btn btn-primary py-3 px-4">OKEHI BRANCH</a></p>
			<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">...Promoting the rule of law!</h2>
          </div>
        </div>
      </div>
    </div>

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

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Practice Areas</span>
            <h2 class="mb-4">Practice Areas</h2>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-family"></span>
        			</div>
        			<h3><a href="#">Family Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-auction"></span>
        			</div>
        			<h3><a href="#">Business Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-shield"></span>
        			</div>
        			<h3><a href="#">Insurance Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-handcuffs"></span>
        			</div>
        			<h3><a href="#">Criminal Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-house"></span>
        			</div>
        			<h3><a href="#">Property Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-employee"></span>
        			</div>
        			<h3><a href="#">Employment Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-fire"></span>
        			</div>
        			<h3><a href="#">Fire Accident</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-money"></span>
        			</div>
        			<h3><a href="#">Financial Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-medicine"></span>
        			</div>
        			<h3><a href="#">Drug Offenses</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-handcuffs"></span>
        			</div>
        			<h3><a href="#">Sexual Offenses</a></h3>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-secondary">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<!-- <span class="subheading">Our Executives</span> -->
            <h2 class="mb-4">Our Association Executives</h2>
          </div>
        </div>
        <div class="row">
		<?php
			$query2 = "SELECT * FROM executives ORDER BY id DESC";
			$result = $mysqli->query($query2) or die($mysqli->error);
			while ($row = $result->fetch_assoc())
			{
		?>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(admin/images/<?php echo $row['picture']; ?>);">
	                <div class="box">
	                  <h2><?php echo $row['name']; ?></h2>
	                  <p><?php echo $row['portfolio']; ?></p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;<?php echo $row['about']; ?>&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="admin/images/<?php echo $row['picture']; ?>" alt="">
	                  </div>
	                  <div class="name align-self-center"><?php echo $row['name']; ?> <span class="position"><?php echo $row['name']; ?></span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
			<?php } ?>

        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">NEWS</span>
            <h2>Recent Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
		<?php
            $query2 = "SELECT * FROM blog ORDER BY id DESC";
            $result = $mysqli->query($query2) or die($mysqli->error);
            while ($row = $result->fetch_assoc())
            {
              $dt = $row['dt'];
              $new_dt = explode(" ", $dt);
              $date = date("M, j, Y", strtotime($new_dt[0]));
              $new_dt2 = explode(",", $date);
              $month = $new_dt2[0];
              $day = $new_dt2[1];
              $year= $new_dt2[2];
              $timw = $new_dt[1];
              $new_time = explode(".", $timw);
              $timee = $new_time[0];
              $new_timee = explode(":", $timee);
              $m_time = $new_timee[0] . ":" . $new_timee[1];
          ?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('admin/images/<?php echo $row['picture']; ?>');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day"><?php echo $day; ?></span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr"><?php echo $year; ?></span>
              			<span class="mos"><?php echo $month; ?></span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#"><?php echo $row['title']; ?></a></h3>
                <p><?php echo $row['summary']; ?></p>
              </div>
            </div>
          </div>
			<?php } ?>
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
						<a href="admin/images/<?php echo $row['picture']?> " class="gallery image-popup img d-flex align-items-center" style="background-image: url(admin/images/<?php echo $row['picture']?>);">
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