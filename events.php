<?php
 include("includes/header.php")
?>
<?php
  $query2 = "SELECT * FROM background WHERE page = 'events' LIMIT 1";
  $result = $mysqli->query($query2) or die($mysqli->error);
  $row = $result->fetch_assoc();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/images/<?php echo $row['picture']; ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Our Events</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Events <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Events</span>
            <h2>Recent Events</h2>
          </div>
        </div>
        <div class="row d-flex">
          <?php
            $query2 = "SELECT * FROM events ORDER BY id DESC";
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
                <h3 class="heading mt-2"><a href="#"><?php echo $row['theme']; ?></a></h3>
                <p><?php echo $row['location']; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section-parallax bg-secondary">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


<?php
include("includes/footer.php");
?>