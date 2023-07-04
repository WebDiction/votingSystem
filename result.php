

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<style>
tr:nth-child(even)
{
    background-color:gray;
    color: white;
}
</style>
</head>
<body class="bg-primary-subtle p-5">
<div class="container p-5 text-center text-white bg-dark">
        <h1>Best Capstone Project in OBJOPROG</h1>
        <h2 class="fst-italic">(Three highest votes will be determined as Top 3 Capstone Project)</h2>
       
   
</div>
<div class="container  text-center" >
<?php 

$hostname="localhost";
$username="root";
$password="";
$databaseName="votingsystem";
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $databaseName);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT MyVote FROM objoprog";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $i=0;
  echo "<div class='container mx-auto p-2 text-center'>";
  echo "<table class='text-center'><tr><th>Voter's Result</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
   $i++;
    echo "<tr> <td > ". "Voter #" . $i. " selected: Group No.  " . "\t". $row["MyVote"]. "</td></tr>";
  }
  echo "</table>";
  echo "</div>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

</div>

<div class="container text-center">
    <div class="btn p-2 btn-primary mx-auto text-center ">
        <a class="text-light" style="text-decoration:none;"  href="index.php">-<<-BACK-<<</a>
    </div>
</div>
<br />
</br />
</br />
<hr />
<footer>
      <div class="container footer ml-auto ">
        <p class=" text-body-secondary text-center">© 2023 Mary Lou F. Teñoso</p>
      
    </div>
      </footer>
</body>
</html>
