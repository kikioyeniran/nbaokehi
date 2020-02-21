<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
//Home Update Function===================================================================================================
if(isset($_POST["update_home"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('text');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))){
            $errors[] = $fieldname;
        }
    }
    if(empty($errors))
    {
        $id = 1;
        $text = addslashes($_POST['text']);
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE home SET text = '{$text}' WHERE id = 1";
        }else{
            $query = "UPDATE home SET text = '{$text}', picture = '{$image}' WHERE id = 1";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: home.php");
            }
            else
            {
                echo "<script>alert(\"The update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}

//About Page Update Function=============================================================================================
if(isset($_POST["update_about"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('header', 'about_text');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
    }
    if(empty($errors))
    {
        $id = 1;
        $header = addslashes($_POST['header']);
        $about_text = nl2br(addslashes($_POST['about_text']));
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE about SET header = '{$header}', about_text = '{$about_text}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE about SET header = '{$header}', about_text = '{$about_text}', picture = '{$image}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: about.php");
            }
            else
            {
                echo "<script>alert(\"The update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there are errors";
        var_dump($errors);
    }
}

//Vision/Mission Page Update Function=============================================================================================
if(isset($_POST["update_vision"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('vision', 'mission');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
    }
    if(empty($errors))
    {
        $id = 1;
        $vision = nl2br(addslashes($_POST['vision']));
        $mission = nl2br(addslashes($_POST['mission']));
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE vision SET vision = '{$vision}', mission = '{$mission}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE vision SET vision = '{$vision}', mission = '{$mission}', picture = '{$image}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: vision.php");
            }
            else
            {
                echo "<script>alert(\"The update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there are errors";
        var_dump($errors);
    }
}

//History Page Update Function=============================================================================================
if(isset($_POST["update_history"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('heading', 'history');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
    }
    if(empty($errors))
    {
        $id = 1;
        $heading = nl2br(addslashes($_POST['heading']));
        $history = nl2br(addslashes($_POST['history']));
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE history SET heading = '{$heading}', history = '{$history}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE history SET heading = '{$heading}', history = '{$history}', picture = '{$image}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: history.php");
            }
            else
            {
                echo "<script>alert(\"The update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there are errors";
        var_dump($errors);
    }
}

//Edit Single executive=======================================
if(isset($_POST["upd_executive"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('name', 'about', 'portfolio');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
        }

    if(empty($errors))
    {
        $id = addslashes($_GET['executive']);
        $name = addslashes($_POST['name']);
        $about = addslashes($_POST['about']);
        $portfolio = addslashes($_POST['portfolio']);
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE executives SET name = '{$name}', about = '{$about}', portfolio = '{$portfolio}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE executives SET name = '{$name}', about = '{$about}', portfolio = '{$portfolio}', picture = '{$image}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target)
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: executives.php");
            }
            else
            {
            echo "<script>alert(\"The executive update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}

// Edit Event Post========================================
if(isset($_POST["upd_event"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('theme', 'location', 'dt', 'about');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
    }
    if(empty($errors))
    {
        $id = addslashes($_GET['event']);
        $theme = addslashes($_POST['theme']);
        $location = addslashes($_POST['location']);
        $about = addslashes($_POST['about']);
        $date = addslashes(date('d-m-y H:i:s', strtotime($_POST['dt'])));
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE events SET theme = '{$theme}', location = '{$location}', about = '{$about}', dt = '{$date}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE events SET theme = '{$theme}', location = '{$location}', about = '{$about}', dt = '{$date}', picture = '{$image}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: event.php");
            }
            else
            {
                echo "<script>alert(\"The event update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }

}

// Edit Blog Post========================================
if(isset($_POST["upd_blog"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('title', 'author', 'dt', 'summary','main_post');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
    }
    if(empty($errors))
    {
        $id = addslashes($_GET['blog']);
        $title = addslashes($_POST['title']);
        $author = addslashes($_POST['author']);
        $summary = addslashes($_POST['summary']);
        $main_post = addslashes($_POST['main_post']);
        $date = addslashes(date('d-m-y H:i:s', strtotime($_POST['dt'])));
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE blog SET title = '{$title}', author = '{$author}', summary = '{$summary}', dt = '{$date}', main_post = '{$main_post}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE blog SET title = '{$title}', author = '{$author}', summary = '{$summary}', dt = '{$date}',main_post = '{$main_post}', picture = '{$image}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: blog.php");
            }
            else
            {
                echo "<script>alert(\"The blog update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }

}

// Edit Departmental Event Post========================================
if(isset($_POST["upd_dept"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('theme', 'location', 'dt', 'about');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
    }
    if(empty($errors))
    {
        $id = addslashes($_GET['deptid']);
        $theme = addslashes($_POST['theme']);
        $location = addslashes($_POST['location']);
        $about = addslashes($_POST['about']);
        $dept = addslashes($_POST['dept']);
        $date = addslashes(date('d-m-y H:i:s', strtotime($_POST['dt'])));
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE deptevents SET theme = '{$theme}', location = '{$location}', about = '{$about}', dt = '{$date}', dept = '{$dept}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE deptevents SET theme = '{$theme}', location = '{$location}', about = '{$about}', dt = '{$date}', picture = '{$image}', dept = '{$dept}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: men.php");
            }
            else
            {
                echo "<script>alert(\"The event update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }

}

//EDit Single member account=======================================
if(isset($_POST["upd_members"]))
{
    $dir = "membersons/";
    $errors = array();
    $required_fields = array('name', 'phone','portfolio', 'email');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
        }
    if(empty($errors))
    {
        $id = addslashes($_GET['members']);
        $name = addslashes($_POST['name']);
        $phone = addslashes($_POST['phone']);
        $portfolio = addslashes($_POST['portfolio']);
        $email = addslashes($_POST['email']);
        $call_year = addslashes($_POST['call_year']);
        $call_num = addslashes($_POST['call_num']);
        $query = "UPDATE members SET name = '{$name}', phone = '{$phone}', portfolio = '{$portfolio}', email = '{$email}', call_year = '{$call_year}', call_num = '{$call_num}' WHERE id = {$id} ";
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            header("Location: members.php");
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}

//    ==================================ALL BACKGROUND PHOTOS UPDATE START===============================================

// All Pages background photos update==============================
if(isset($_POST["upd_bg"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $id = addslashes($_GET['upd_bg']);
    $picture = $_FILES['image']['name'];
    $query = "UPDATE background SET picture = '{$picture}' WHERE id = {$id} ";
    if($result = $mysqli->query($query) or die($mysqli->error))
    {
        confirm_query($result);
        if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
            header("Location: background.php");
        }
        else
        {
            echo "<script>alert(\"The update failed\")<script>";
        }
    }
    else
    {
        echo "<script>alert('Info not inserted into the database')</script>";
        echo mysql_error();
    }
}


//    ==================================ALL BACKGROUND PHOTOS UPDATE END=================================================
