<?php
 include("includes/header.php")
?>
<?php
if(isset($_GET['blog'])){
?>
<?php
  $query2 = "SELECT * FROM background WHERE page = 'blog-single' LIMIT 1";
  $result = $mysqli->query($query2) or die($mysqli->error);
  $row = $result->fetch_assoc();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/images/<?php echo $row['picture']; ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Blog Single</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <?php
      $id = $_GET['blog'];
      $query2 = "SELECT * FROM blog WHERE id={$id} LIMIT 1";
      $result = $mysqli->query($query2) or die($mysqli->error);
      $row = $result->fetch_assoc();
    ?>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">
          	<p>
              <img src="admin/images/<?php echo $row['picture']; ?>" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3"><?php echo $row['title'];?></h2>
            <p><?php echo $row['summary']; ?></p>
            <p><?php echo $row['main_post']?></p>
            <!-- <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div> -->


          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <!-- <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div> -->
            <!-- <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Family Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Business Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Criminal Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Insurance Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Emloyment Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Property Law <span class="ion-ios-arrow-forward"></span></a></li>
              </div>
            </div> -->

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <?php
                $query2 = "SELECT * FROM blog";
                $result = $mysqli->query($query2) or die($mysqli->error);
                while($row = $result->fetch_assoc()){
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
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(admin/images/<?php echo $row['picture']; ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#"><?php echo $row['title']?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php echo $month. " ". $day. ", ". $year ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php echo $row['author']?></a></div>
                    <!-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
                  </div>
                </div>
              </div>
                <?php } ?>
            </div>

            <!-- <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div> -->
          </div>

        </div>
      </div>
    </section> <!-- .section -->

<?php
include("includes/footer.php");
}else{
  redirect_to("blog.php");
}
?>