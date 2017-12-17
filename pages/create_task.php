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
<center>
 
    <h3> Enter Task Details </h3>
    
<form action="index.php?page=tasks&action=store&id=" method="post" id="form1" class = "form-inline">

<div class = "form-group">
<label>Owner Email-</label>
<input type="text" class="form-control" name="owneremail" value="">
</div>
<br><br>

<div class = "form-group">
<label>Owner ID-</label>
<input type="text" class="form-control" name="ownerid" value="<?php session_start(); echo $_SESSION["userID"]; ?>">
</div>
<br><br>


<div class = "form-group">
<label>Created Date-</label>
<input type="text" class="form-control" name="createddate" value="">
</div>
<br><br>

<div class = "form-group">
<label>Due Date-</label>
<input type="text" class="form-control" name="duedate" value="">
</div>
<br><br>

<div class = "form-group">
<label>Message-</label>
<input type="text" class="form-control" name="message" value="">
</div>
<br><br>

<div class = "form-group">
<label>Is Done-</label>
<input type="text" class="form-control" name="isdone" value="">
</div>
<br><br>

<button type="submit" class="btn btn-primary" form="form1" value="create">Create</button>
</form>


</center>
<script src="js/scripts.js"></script>
</body>
</html>