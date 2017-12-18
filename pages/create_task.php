<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    .row.content {height: 650px}
    
    
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
    .glyphicon {
    height:42px;
    font-size: 18px;
}
    label{
      width:100px;
    }
  </style>
  <h3><a href="index.php?page=accounts&action=logout">Logout</a></h3>
</head>


<body text-align:center>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      /*<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>*/
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
      <li><div>
    
        </form></div></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center"> 
     
    <h3> Enter Task Details </h3>
    
<form action="index.php?page=tasks&action=store&id=" method="post" id="form1" class = "form-inline">

<div class = "form-group" align ="center">
<label>Owner Email-</label>
<input type="text" class="form-control" name= "owneremail" value= "<?php session_start(); echo $_SESSION["email"]; ?>" >
</div>
<br><br>

<div class = "form-group" align ="center">
<label>Owner ID-</label>
<input type="text" class="form-control" name="ownerid" value="<?php echo $_SESSION["userID"]; ?>" readonly>
</div>
<br><br>

<?php date_default_timezone_set("America/New_York"); ?>
<div class = "form-group" align ="center">
<label>Created Date-</label>
<input type="text" class="form-control" name="createddate" value="<?php echo date("Y-m-d").' '.date("h:i:sa"); ?>"readonly>
</div>
<br><br>

<div class = "form-group" align ="center">
<label>Due Date-</label>
<input type="text" class="form-control" name="duedate" value="">
</div>
<br><br>

<div class = "form-group" align ="center">
<label>Message-</label>
<input type="text" class="form-control" name="message" value="">
</div>
<br><br>

<div class = "form-group" align ="center">
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