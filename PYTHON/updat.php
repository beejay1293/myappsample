<?php 


$db = mysqli_connect('localhost', 'root', '', 'ajax') or die(mysqli_error($db));
 if(isset($_POST['text'])){
 	$text = $_POST['text'];
 	if(!empty($text)){
    $query = mysqli_query($db, "INSERT INTO data VALUES(NULL, '".mysqli_real_escape_string($db, $text)."')")or die(mysqli_error($db));
     if($query){
     	echo 'done';
     }
 	}else{
 		echo 'please type a name';
 	}
 }
 ?>