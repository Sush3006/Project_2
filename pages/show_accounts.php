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

    <h3> Details </h3>
<form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>" method="post" class = "form-inline">
    
    <div class = "form-group">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>"readonly>
    </div><br><br>

    <div class = "form-group" align="center">
    <label>Last  name-</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $data->lname; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>E-mail  ID-</label>
    <input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Phone No-</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $data->phone; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value="<?php echo $data->birthday; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value="<?php echo $data->gender; ?>"readonly>
    </div>
    <br>
    <br>
    
    <input type="submit" class="btn btn-primary" value="Edit">
    <br>
    <br>
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" class="btn btn-primary" form="form1" value="delete">Delete</button>
</form>

</center>


<script src="js/scripts.js"></script>
</body>
</html>
