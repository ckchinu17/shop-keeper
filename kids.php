<?php session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("kundan");
$sql="select * from kids";
	$rs=mysql_query($sql);
	
	
	//if($row=mysql_fetch_array($rs)){
   // while(	$row=mysql_fetch_array($rs)){
	//	echo $row['id'];
	
	//}
	
	//}
	//else{
		
	//}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopkeeper</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
    .row1
    {
      margin-top: 100px;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: black;
      padding: 25px;
    }

  </style>
</head>
<body>

<!--<div class="jumbotron">
  <!--<div class="container text-center">
    <h1>Store Keeper</h1>      
    <p>Mission, Vission & Values</p>
  </div>-->
   <!--<div class="container">
  <br>-->
 

<nav class="navbar navbar-inverse  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Shopkeeper</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<?php if(isset($_SESSION['username'])): ?>
	  <li><a href="new 2.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'];?></a></li>
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <?php else:?>
      <li><a href="new 2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="new 3.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  <?php endif;?>
    </ul>
  </div>
</nav>

<div class="container">
 <div class="row1">    
  <div class="row">
  <?php    while($row=mysql_fetch_array($rs)): ?>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
     
	
        <img src="<?php echo $row['pic'];?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><?php echo $row['name'];?> RS.<U><?php echo $row['price'];?></U><br><a href="product-kids.php?id=<?php echo $row['id'];?>">Buy Now</a></div>
      </div>
    </div>
	<?php endwhile;?>
  <!--   <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/kid.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/red.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/paint.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>-->
  </div>
</div>
</div><br>

<!--<div class="container">    
  <div class="row">
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/pink1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/baby.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/white.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/baby1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
  </div>
</div><br>
<div class="container">    
  <div class="row">
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/jeans1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/hudies.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/jeans.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/girls.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
  </div>
</div><br>
<div class="container">    
  <div class="row">
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/babies.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/flowers.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/top.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        
        <img src="kids/tops.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <div class="panel-footer"><a href="product-details.php">Buy Now</a></div>
      </div>
    </div>
  </div>
</div><br>-->

<footer class="container-fluid text-center">
  <p>@Shopkeeper Copyright</p>  
  <!--<form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>-->
</footer>

</body>
</html>
