<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<body>

<?php
$a='';
$a.='<center>';
$a.='<h2>Pending Tasks</h2><br>';
$a.='<a href="index.php?page=tasks&action=create">Create New Task</a>';
if($data==FALSE){
  $a.='<br>No records found';
  $a.='</center>';
  echo $a;
}
else{
$a.=utility\htmlTable::genarateTableFromMultiArray($data);
$a.='</center>';
echo $a;
}
?>


<script src="js/scripts.js"></script>
</body>
</html>