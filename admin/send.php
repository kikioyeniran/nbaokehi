<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php
if(isset($_POST['insert'])){
    //https://account.kudisms.net/api/?username=nbaokehiapps@yahoo.com&password=cAncel78$&message=test&sender=kiki&mobiles=2348108055762
    $curl = curl_init();
    echo "<script>alert('message is being sent')</script>";
    $username = 'nbaokehiapps@yahoo.com';
    $password = "cAncel78$";
    $message = addslashes($_POST["message"]);
    $sender = "NBA-OKEHI";
    $numbers = [];
    $query2 = "SELECT * FROM members";
    $result = $mysqli->query($query2) or die($mysqli->error);
    //$count = 0;
    while ($row = $result->fetch_assoc())
    {
        array_push($numbers, $row['phone']);
       // var_dump($numbers);
     }
     $numbers2 = implode(",", $numbers);
    // print_r($numbers);
    $url = "https://account.kudisms.net/api/?username=$username&password=$password&message=$message&sender=$sender&mobiles=$numbers2";

    print_r($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($curl);
    echo $result;
    if($result){
        // echo "<script>alert('Your message has been sent successfully')</script>";\
        $status = "successful";
        $query = "INSERT INTO textmessages(messages,status) Values ('$message', '$status')";
        if($mysqli->query($query) or die($mysqli->error))
        {
            header("Location: textmessaging.php");
        }
        else{
            echo "<script>alert('error connecting to DB')</script>";
        }

    }else{
        $status = "failed";
        $query = "INSERT INTO textmessages(messages,status) Values ('$message', '$status')";
        if($mysqli->query($query) or die($mysqli->error))
        {
            header("Location: textmessaging.php");
        }
        else{
            echo "<script>alert('error connecting to DB')</script>";
        }
    }
    curl_close($curl);
}
?>
