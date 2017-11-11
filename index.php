<?php
$db_host = 'sql1.njit.edu'; // Server Name
$db_user = 'lt59'; // Username
$db_pass = '7QqPE65F'; // Password
$db_name = 'lt59'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

?>

<!doctype html>
<html class="no-js" lang=""> 
    
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
 
        <title>Wrong Way Airline</title>
	 <link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="img/WWlogo.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

 
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

  
       <div id="wrapper">
	<div id="header">
	<div id="logo">
     <div id = "lg"></div>
		  <div id="name">Test Page</div></a>
		
		</div>
   
		<div id="menu">
        
		</div>
	</div>

<style>
  table.bottomBorder { 
    border-collapse: collapse; 
  }
  table.bottomBorder td, 
  table.bottomBorder th { 
    border-bottom: 1px solid #dedede;; 
    padding: 10px; 
    text-align: left;
  }
</style>


	
	<div id="contact">
     <div id="grey">

 <h3></h3><br>
 
 
 <table align = "center" class="bottomBorder">
		<thead>
			<tr>
        <th>display</th>
        <th>insert</th>
        <th>delete</th>
        <th>update</th>
			</tr>
		</thead>
		<tbody>
		<?php
   
		$no 	= 0;
		$total 	= 1;
   
 
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['email'] == 1 ? '' : number_format($row['email']);
			echo '<tr>
			
					<td>'.$row['display'].'</td>
					<td>'.$row['insert'].'</td>
           <td>'.$row['delete'].'</td>
           <td>'.$row['update'].'</td>
				</tr>';
        
      $total += $row['Origin'];
			$no++;
        
        
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">Records</th>
				<th><?=number_format($no)?></th>
			</tr>
		</tfoot>
	</table>
 
 
 
	<div id="footer">
			<div id="footer-1">
		
	</div>
	</div>	
        <p></p>
	
    </body>
</html>
