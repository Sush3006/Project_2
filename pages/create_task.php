<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>


<body text-align:center>

 
    <h3> Enter Task Details </h3>
    
<form action="index.php?page=tasks&action=store&id=" method="post" id="form1" class = "form-inline">

<div class = "form-group">
<label>Owner Email-</label>
<input type="text" class="form-control" name="owneremail" value="<?php session_start(); echo $_SESSION["email"]; ?>">
</div>
<br><br>

<div class = "form-group">
<label>Owner ID-</label>
<input type="text" class="form-control" name="ownerid" value="<?php echo $_SESSION["userID"]; ?>">
</div>
<br><br>

<?php date_default_timezone_set("America/New_York"); ?>
<div class = "form-group">
<label>Created Date-</label>
<input type="text" class="form-control" name="createddate" value="<?php echo date("Y-m-d").' '.date("h:i:sa"); ?>"readonly>
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

</div>

<div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Web System Development</p>
</footer>

<script src="js/scripts.js"></script>
</body>
</html>