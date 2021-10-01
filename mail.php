<?php


if($_POST["message"] && $_POST('name') && $_POST('email')) {


mail("manuesteban1990@gmail.com", "Message Portfolio",


$_POST["You have a message"]. 'from ' $_POST['name']. ' '. 'person that has this email '.  $_POST['email']. ' '. 'and tel you that:'. $_POST['message'];


}


?>
