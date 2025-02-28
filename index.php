<?php
  session_start();
  require_once ('connectdb.php');

  print "
			<table class='journaltbl'>
				<tr>
					<td>NAME_SELLER</td>
					<td>SALES</td>
					<td>SALES_MONTH</td>
					<td>SALES_YEAR</td>
				</tr>
		";
  $query = "SELECT NAME_SELLER, SALES, SALES_MONTH, SALES_YEAR FROM spreadsheet_.raw_table";
  
  $query_get = mysqli_query($conn, $query); 
  while ($resultgetquery = mysqli_fetch_array($query_get)) {
		print "
				<tr>
					<td>$resultgetquery[NAME_SELLER]</td>
					<td>$resultgetquery[SALES]</td>
					<td>$resultgetquery[SALES_MONTH]</td>
					<td>$resultgetquery[SALES_YEAR]</td>
				</tr>
          ";
      }
  print "
      </table>
      ";

?>