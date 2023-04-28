<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BBK Check Employees</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Stint+Ultra+Expanded" rel="stylesheet">
<style>
@import url(1.css);

</style>
</head>

<body>


<div id="container">
                    <header>
                        <nav>
                            <ul>
                                <li><a href="successful-login.html">Home</a></li>
                                <li><a href="main-page.html">BBK Website</a></li>
                            </ul>
                        </nav>

                        <h1><img src="BBK-logo.png " alt="BKK Towing logo"></h1>
                        <h1>Employees</h1>


                    </header>
        </div>
        
        
	<div id="menu" align="center">
            <table border="1" cellpadding="5">
                <caption><h2>List of Employess</h2></caption>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Pass</th>
			<th>type</th>
			
		</tr>

		<?php
			$file = fopen("EmployeeList.csv", "r"); // Open CSV file for reading

			// Loop through each row in the CSV file
			while (($data = fgetcsv($file)) !== FALSE) {
				echo "<tr>";
				for ($i=0; $i < count($data); $i++) {
					echo "<td>$data[$i]</td>"; // Print each column as a table cell
				}
				echo "</tr>";
			}

			fclose($file); // Close CSV file
		?>
	</table>
	</div>
	
	
	<br>
        <br>
        <footer>


        <p><small>All content copyright &copy; 2023, part of class project</small></p>

        </footer>
</body>
</html>

