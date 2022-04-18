
<?php
	
	// include database connection file

    $dbHost     = "localhost"; 
	$dbUsername = "id11160819_pranjal"; 
	$dbPassword = "Y[w(a*s_6W@%i]FM"; 
	$dbName     = "id11160819_ocards"; 

	// Create database connection 
	$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}


	// autocomplete textbox jquery ajax in PHP
	
	if (isset($_GET['key'])) {

  		$output = "";
  		$city = $_GET['key'];
  		$query = "SELECT * FROM product_info WHERE title LIKE '%{$city}%'";
  		$result = $con->query($query);

  		$output = '<ul class="list-unstyled">';		

  		if ($result->num_rows > 0) {
  			while ($row = $result->fetch_array()) {
  				$output .= '<li>'.ucwords($row['title']).'</li>';
  			}
  		}else{
  			  $output .= '<li> books not Found</li>';
  		}
  		
	  	$output .= '</ul>';
	  	echo $output;

	}
    ?>00