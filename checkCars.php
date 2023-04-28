<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BBK Check cars on site</title>
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
                        <h1>Cars in Yard</h1>


                    </header>
        </div>


        <div id="menu" align="center">
            <table border="1" cellpadding="5">
                <caption><h2>List of Cars</h2></caption>
                <tr>
                    <th>ID</th>
                    <th>Plate</th>
                    <th>Car Type</th>
                    <th>Car Color</th>
                    <th>Car Make</th>
                    <th>Car Model</th>
                    <th>Car Year</th>
                    <th>Condition</th>
                    <th>Status</th>

                </tr>
                <?php
                    // Open the CSV file for reading
                    //$file = fopen("carList.csv", "r");

                    // Loop through each line of the file and display the data in the table
                    /*while (($data = fgetcsv($file)) !== false) {
                        echo "<tr>";
                        foreach ($data as $value) {
                            echo "<td>" . htmlspecialchars($value) . "</td>";
                        }
                        echo "</tr>";
                    }

                    // Close the file
                    fclose($file);*/
                    
                    $csv = array_map('str_getcsv', file('carList.csv'));
                    foreach ($csv as $row) {
                        if (end($row) == '0') { // filter rows with last value equal to '0'
                            echo "<tr style=\"text-align:center\">";
                            echo "<td>".$row[0]."</td>";
                            echo "<td>".$row[1]."</td>";
                            echo "<td>".$row[2]."</td>";
                            echo "<td>".$row[3]."</td>";
                            echo "<td>".$row[4]."</td>";
                            echo "<td>".$row[5]."</td>";
                            echo "<td>".$row[6]."</td>";
                            echo "<td>".$row[7]."</td>";
                            echo "<td>".$row[8]."</td>";
                            echo "</tr>";
                        }
                    }
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

