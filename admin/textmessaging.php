<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>




<?php
 include("includes/header.php")
?>

<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Home</h2>
                                <p class="pageheader-text">Send New Bulk SMS to All Members</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Text Messaging</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->


                    <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="influence-profile-content pills-regular">
                            <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">Send Bulk SMS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="false">View All Sent Messages</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                    <div class="card">
                                        <h5 class="card-header">Type Your Message here</h5>
                                        <div class="card-body">
                                            <form method="post" action="send.php" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Your Message</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="message"></textarea>
                                                </div>
                                                <input type ="submit" name = "insert" id= "insert" value="SEND TEXT" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Basic Table</h5>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered first">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Message</th>
                                                                <th>Status</th>
                                                                <th>Time Delivered</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $query2 = "SELECT * FROM textmessages";
                                                                $result = $mysqli->query($query2) or die($mysqli->error);
                                                                $count = 0;
                                                                while ($row = $result->fetch_assoc())
                                                            {
                                                                $count++;?>
                                                            <tr>
                                                                <td><?php echo $count;?></td>
                                                                <td><?php echo $row['messages']; ?></td>
                                                                <td><?php echo $row['status']; ?></td>
                                                                <?php
                                                                    $dt = $row['time'];
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
                                                                    $m_time = $new_timee[0] . ":" . $new_timee[1]; ?>
                                                                <td><?php echo $day,',',$month,$year, ' - ', $m_time; ?></td>
                                                            </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Message</th>
                                                                <th>Status</th>
                                                                <th>Time Delivered</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                     </div>

</div>
<?php
include("includes/footer.php");
?>