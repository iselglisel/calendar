<?php include "Include.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<title>Year, Months, Days</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="JavaScript:updateDays();">
	<div class="container">
		<div class="thumbnail span10 offset1" style = "margin-top:100px">
			<div class="table" style = "margin-left:30px">
				<table>
					<theader>
						<tr>
							<th>Year:</th>
							<th>Month:</th>
							<th>Day:</th>
						</tr>
					</theader>
					<tbody>
						<tr>
							<td>
								<select id="dob_y" name="year" onchange="JavaScript:updateDays();">
									<?php
									  $min_age = 0; 
									  $max_age = 24; 
									  
									  $start_year = date(Y) - $max_age;
									  $end_year = date(Y) - $min_age;
									  
									  for ($year=$start_year; $year <= $end_year; $year++) {
									      echo "\t<option value=\"$year\">$year</option>\n";   
									   
									  } 
									?>
							    </select>
							</td>
							<td>
								<select id="dob_m" name="month" onchange="JavaScript:updateDays();">
									<?php
									    $info = cal_info(0);
									    for ($m=1; $m<=count($info[months]); $m++) {
									       echo "\t<option value=\"$m\">" . $info[months][$m] . "</option>\n";
									   
									  }
									?> 
							    </select>
							</td>
							<td>
								<span id="dob_d"></span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>     
    <br/><br/>
    <div class = "span4 offset3" style = "position:fixed">
    	<div class="well">
		    <input type="button" name="submit" value="OK" onclick="JavaScript:Display(); return false;"/>
		    <div id="results">
		          <b>Year Selected: </b><span id="sel_y">Please Select...</span>  <br />
		          <b>Month Selected: </b><span id="sel_m">Please Select...</span> <br />
		          <b>Day Selected: </b><span id="sel_d">Please Select...</span>   <br />
		    </div> 
		</div>
	</div>
<script type="text/javascript" language="JavaScript" src="js/ajax.js"></script>
</body>
</html> 