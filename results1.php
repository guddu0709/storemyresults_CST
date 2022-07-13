<!DOCTYPE html>
<html>
<link href="Css/style.css" rel="stylesheet" type="text/css" />
    <head>
       
        <link rel="stylesheet" type="text/css" href="Css/stylesheet.css" />
		<link href="Css/stylebutton.css" rel="stylesheet" type="text/css" />
		<link href="Css/slides.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/script1.js"></script>
		<style>
body {
  background-color: #E0FFFF;
}
table, th, td {
  border: 1px solid black;
}
</style>
    </head>



<body class="s1">

	<div class="whole">
    	<div class="head">
        	<div class="headcol1" id="whole"><img src="img/logo.png" width="350" /></div>

      	</div><!--end of head-->
          <body class="s1">



      </div><!--end of head-->

<body>

<div class= "btn-group">
  <button class="button" onclick = "document.location='index.html'">Logout</button>

</div>


<body>
<br></br>


<h1 style="color: orange">Result</h1>

        <table>
        <thead>
            <tr>
                <th>sem</th>
                <th>subject1</th>
                <th>subject2</th> 
                <th>subject3</th> 
                <th>subject4</th> 
                <th>subject5</th> 
                <th>subject6</th> 
                <th>subject7</th>
                <th>subject8</th>
                <th>cgpa</th>  
                <th>usn</th>
            </tr>
        </thead>
        <tbody>
    
            <?php
            	$usn= $_POST['usn'];
            $conn = new mysqli('localhost:3306','root','','storemyresults');
            if (!$conn) {
                die(mysql_error());
            }
            $stmt = $conn->prepare("select * from result where usn=?");
            $stmt -> bind_param("s",$usn);
            $execval = $stmt->execute();
            $stmt_result=$stmt -> get_result();
           
  // output data of each row
            while($row = $stmt_result->fetch_assoc()) {
                echo "<tr><td>".$row["sem"]."</td><td>".$row["subject1"]."</td><td>".$row["subject2"]."</td><td>".$row["subject3"]."</td><td>".$row["subject4"]."</td><td>".$row["subject5"]."</td><td>".$row["subject6"]."</td><td>".$row["subject7"]."</td><td>".$row["subject8"]."</td><td>".$row["cgpa"]."</td><td>".$row["usn"]."</td></tr>";
            }
            echo "</table>";
    
            $conn->close();
        ?>
</tbody>

    <body>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <div class= "btn-group">
          
            <button class="button" onclick = "">print</button>
        </div>
    </body>

</table>
    
</body>

</html>
