<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>

<?php

if(isset($_POST['insert']))
{
    $name = addslashes($_POST['name']);
    $phone = addslashes($_POST['phone']);
    $portfolio = addslashes($_POST['portfolio']);
    $email = addslashes($_POST['email']);
    $call_year = addslashes($_POST['call_year']);
    $call_num = addslashes($_POST['call_num']);
    $query = "INSERT INTO members(name,phone,portfolio,email,call_year,call_num) Values ('$name', '$phone', '$portfolio', '$email','$call_year','$call_num')";
    if($mysqli->query($query) or die($mysqli->error))
    {
        echo "<script>alert('Member Added succesfully')</script>";
    }
    else{
        echo "<script>alert('error connecting to DB')</script>";
    }
}

?>

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
                                <p class="pageheader-text">Edit Blog</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                                <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">Register New Member</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="false">View Registered Members</a>
                            </li>
                        </ul>
                        <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"> -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                    <div class="card">
                                        <h5 class="card-header">Register a New Member</h5>
                                        <div class="card-body">
                                            <form method="post" action="members.php" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Full Name</label>
                                                            <input id="inputText3" type="text" class="form-control" name="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Phone</label>
                                                            <input id="inputText3" type="text" class="form-control" name="phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Portfolio</label>
                                                            <input id="inputText3" type="text" class="form-control" name="portfolio">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Email Address</label>
                                                            <input id="inputText3" type="email" class="form-control" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Year of Call</label>
                                                            <input id="inputText3" type="text" class="form-control" name="call_year">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Call Number</label>
                                                            <input id="inputText3" type="text" class="form-control" name="call_num">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type ="submit" name = "insert" id= "insert" value="Submit" class="btn btn-primary">
                                                    </div>
                                                </div>
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
                                                                <th>Name</th>
                                                                <th>Portfolio</th>
                                                                <th>Phone Number</th>
                                                                <th>Email Address</th>
                                                                <th>Year of Call</th>
                                                                <th>Call Number</th>
                                                                <th>Update</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php
                                                                    $query2 = "SELECT * FROM members";
                                                                    $result = $mysqli->query($query2) or die($mysqli->error);
                                                                    $count = 0;
                                                                    while ($row = $result->fetch_assoc())
                                                                {
                                                                    $count++;?>
                                                            <tr>
                                                                <td><?php echo $count;?></td>
                                                                <td><?php echo $row['name']; ?></td>
                                                                <td><?php echo $row['portfolio']; ?></td>
                                                                <td><?php echo $row['phone']; ?></td>
                                                                <td><?php echo $row['email']; ?></td>
                                                                <td><?php echo $row['call_year']; ?></td>
                                                                <td><?php echo $row['call_num']; ?></td>
                                                                <td><a href="edit.php?members=<?php echo $row['id']; ?>">Update</a></td>
                                                                <td><a href="delete.php?memberid=<?php echo $row['id']; ?>"><i class="fas fa-trash" style="color:red;"></i></a></td>
                                                            </tr>
                                                                <?php } ?>

                                                        </tbody>
                                                        <tfoot>
                                                                <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Portfolio</th>
                                                                <th>Phone Number</th>
                                                                <th>Email Address</th>
                                                                <th>Update</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->

                     </div>


                     </div>





                    </div>

</div>



<?php
include("includes/footer.php");
?>