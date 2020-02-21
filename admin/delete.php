<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
if(isset($_GET['rowid']))
{$id = mysql_prep($_GET['rowid']);
	if($id){
		$query = "DELETE FROM events WHERE id = {$id} LIMIT 1";
		$result = $mysqli->query($query) or die($mysqli->error);
		if(mysqli_affected_rows($mysqli) == 1){
			echo "<script>alert(\"Image deleted from database\")<script>";
            //redirect_to("event.php");
            header("Location: event.php");
			}else{
				//Deletion Failed
				echo "<script>alert(\"Image deleted from database\")<script>";
				echo "<p>" .  mysql_error() .  "</p>";
				echo "<a href = 'event.php'>Return to Main Page</a>";
				}
    }
    else
    {//subject didn't exist in  database
        //redirect_to("event.php");
        header("Location: event.php");
    }
}
if(isset($_GET['blogid']))
{
        $id = mysql_prep($_GET['blogid']);
        if($id)
        {$query = "DELETE FROM blog WHERE id = {$id} LIMIT 1";
            $result = $mysqli->query($query) or die($mysqli->error);
            if(mysqli_affected_rows($mysqli) == 1){
                echo "<script>alert(\"Image deleted from database\")<script>";
                //redirect_to("blog.php");
                header("Location: blog.php");
                }
                else{
                    //Deletion Failed
                    echo "<script>alert(\"Image deleted from database\")<script>";
                    echo "<p>" .  mysql_error() .  "</p>";
                    echo "<a href = 'event.php'>Return to Main Page</a>";
                    }
            }else{
                //subject didn't exist in  database
                //redirect_to("blog.php");
                header("Location: blog.php");
                }
}
if(isset($_GET['galleryid']))
   {$id = mysql_prep($_GET['galleryid']);
            if($id)
            {$query = "DELETE FROM gallery WHERE id = {$id} LIMIT 1";
                $result = $mysqli->query($query) or die($mysqli->error);
                if(mysqli_affected_rows($mysqli) == 1){
                    echo "<script>alert(\"Image deleted from database\")<script>";
                    //redirect_to("gallery.php");
                    header("Location: gallery.php");
                    }
                    else{
                        //Deletion Failed
                        echo "<script>alert(\"Image deleted from database\")<script>";
                        echo "<p>" .  mysql_error() .  "</p>";
                        echo "<a href = 'event.php'>Return to Main Page</a>";
                        }
                }else{
                    //subject didn't exist in  database
                    //redirect_to("gallery.php");
                    header("Location: gallery.php");
                    }
    }if(isset($_GET['executiveid']))
    {$id = mysql_prep($_GET['executiveid']);
                if($id)
                {$query = "DELETE FROM executives WHERE id = {$id} LIMIT 1";
                    $result = $mysqli->query($query) or die($mysqli->error);
                    if(mysqli_affected_rows($mysqli) == 1){
                       header("Location: executives.php");
                        }
                        else{
                            //Deletion Failed
                            echo "<script>alert(\"Image deleted from database\")<script>";
                            echo "<p>" .  mysql_error() .  "</p>";
                            echo "<a href = 'event.php'>Return to Main Page</a>";
                            }
                    }else{
                       header("Location: executives.php");
                        }
    }if(isset($_GET['memberid']))
    {$id = mysql_prep($_GET['memberid']);
                if($id)
                {$query = "DELETE FROM members WHERE id = {$id} LIMIT 1";
                    $result = $mysqli->query($query) or die($mysqli->error);
                    if(mysqli_affected_rows($mysqli) == 1){
                        header("Location: members.php");
                        }
                        else{
                            //Deletion Failed
                            echo "<script>alert(\"Image deleted from database\")<script>";
                            echo "<p>" .  mysql_error() .  "</p>";
                            echo "<a href = 'members.php'>Return to Main Page</a>";
                            }
                    }else{
                        header("Location: members.php");
                        }}
     if(isset($_GET['eventid']))
    {$id = mysql_prep($_GET['eventid']);
                if($id)
                {$query = "DELETE FROM events WHERE id = {$id} LIMIT 1";
                    $result = $mysqli->query($query) or die($mysqli->error);
                    if(mysqli_affected_rows($mysqli) == 1){
                        header("Location: event.php");
                        }
                        else{
                            //Deletion Failed
                            echo "<a href = 'event.php'>Return to Main Page</a>";
                            }
                    }else{
                        header("Location: event.php");
                        }}
                        ?>