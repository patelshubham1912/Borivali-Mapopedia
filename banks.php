<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Borivali MapoPedia</title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="static/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body style="background-image:url(static/images/1.jpg)">
<?php include 'db.php';

 $con = connect();

// $result = mysqli_query($con,"SELECT * FROM hangouts");
$result = mysqli_query($con, "SELECT h.b_name as Name, e.b_add as Address FROM banks h, b_add e where h.b_id = e.b_id");

 // while($row = mysqli_fetch_array($result))
 //  {
	//   echo "<tr>{$row['h_id'] . " " . $row['h_name']";
	  
 //  }


close($con);
?>

    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="Homepage.html">Borivali Mapopedia</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Borivali <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="hangouts.php">Hangouts</a></li>
                    <li><a href="#">About</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Details <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                   <li><a href="restaurants.php">Restaurants</a></li>
                    <li><a href="banks.php">Banks</a></li>
                    <li><a href="hospitals.php">Hospitals</a></li>
                    <li><a href="shopping.php">Markets</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

	  <div class="container">
      <font color="black">
	  	<h1 align='center'>Details of Banks </h1>

	    <table class="table table-hover">
	      <thead>
	        <tr>
	          <?php col_name($result); ?>
	        </tr>
	      </thead>
	      <tbody>

			 <?php while($row = mysqli_fetch_row($result)) 
			 {
			    echo "<tr>";
			    foreach($row as $_column) 
			    {
			        echo "<td>{$_column}</td>";
			    }
			    echo "</tr>";
			} ?>

	      </tbody>
	    </table>
    </font>
	  </div><!-- /example -->

<script src="static/js/jquery.min.js"></script>
    <script src="static/js/holder.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

</body>
</html>