<?php

if(isset($_GET['keyword'])){
	$keyword = $_GET['keyword'];
}
if(!empty($keyword)){

$db = mysqli_connect('localhost', 'root', '', 'ajax')or die(mysqli_error($db));
$query = mysqli_query($db, "SELECT names FROM names WHERE names LIKE '".mysqli_real_escape_string($db, $keyword)."%'")or die(mysqli_error($db));

  while($query_row = mysqli_fetch_array($query)){
  	echo $name = $query_row['names'].'<br>';
  }
}
  ?>