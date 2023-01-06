<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>
<link rel="stylesheet" href="3rd.css">

<body>
	<center>
<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => vloger
	$conn = mysqli_connect("127.0.0.1", "root", "", "vloger");
		
		// Check connection
	if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
			$x= "SELECT * FROM `vlogdetails`";
         if ($is_query_run=mysqli_query($conn, $x))
            {
               // echo "Query Executed";
                // loop will iterate until all data is fetched
                   while ($query_executed = mysqli_fetch_assoc($is_query_run))
                       {
                          // these four line is for four column
                          echo "NAME ::  ".$query_executed['name'].'<br>';
                          echo "PLACE ::  ".$query_executed['place'].'<br>';
                          echo "RATING ::  ".$query_executed['rating'].'<br><br>';

						  echo "VLOG ::  ".$query_executed['vlog'].'<br><br><br><br><br><br>';
                        }
            }
          else
            {
                    echo "Error in execution";
            }
?>
	</center>
</body>

</html>