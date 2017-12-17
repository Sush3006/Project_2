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


<body>
<center>
 
    <h3> Edit Details </h3>
<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post" class = "form-inline" id="form1">
<div class = "form-group">
<label>ID-</label>
<input type="text" class="form-control" name="id" value="<?php echo $data->id;?>" readonly>
</div><br><br>

<div class = "form-group">
<label>Owner Email-</label>
<input type="text" class="form-control" name="owneremail" value="<?php echo $data->owneremail;?>">
</div><br><br>

<div class = "form-group">
<label>Owner ID-</label>
<input type="text" class="form-control" name="ownerid" value="<?php echo $data->ownerid;?>" readonly>
</div><br><br>

<div class = "form-group">
<label>Created Date-</label>
<input type="text" class="form-control" name="createddate" value="<?php echo $data->createddate;?>">
</div><br><br>

<div class = "form-group">
<label>Due Date-</label>
<input type="text" class="form-control" name="duedate" value="<?php echo $data->duedate;?>">
</div><br><br>

<div class = "form-group">
<label>Message-</label>
<input type="text" class="form-control" name="message" value="<?php echo $data->message;?>">
</div><br><br>

<div class = "form-group">
<label>Is Done-</label>
<input type="text" class="form-control" name="isdone" value="<?php echo $data->isdone;?>">
</div><br><br>

<button type="submit" class="btn btn-primary" form="form1" value="save">Save</button>
</form>

</center>


<script src="js/scripts.js"></script>
</body>
</html>