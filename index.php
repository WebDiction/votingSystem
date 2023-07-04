<?php
        
    if(isset($_POST['submit']))
    {
	$hostname="localhost";
	$username="root";
	$password="";
	$databaseName="votingsystem";

	$ln=$_POST['ln'];
	$fn=$_POST['fn'];
	$sel=$_POST['sel'];
	
    $count=0;

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	$query = "INSERT INTO `objoprog`(`LastName`, `FirstName`, `MyVote`) VALUES ('$ln','$fn','$sel')";

    $result=mysqli_query($connect, $query);
    
    if($result)
    {
       
        echo '<script>alert("Thank you! Your vote is recorded.")</script>';
    }

    else{
        echo '<script>alert("Please fill up all necessary fields. ")</script>';
    }

    
    mysqli_close($connect);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-primary-subtle p-5">
    <div class="container p-5 text-center text-white bg-dark">
        <h1>Best Capstone Project in OBJOPROG</h1>
        <h2 class="fst-italic">(Three highest votes will be determined as Top 3 Capstone Project)</h2>
       
   
    </div>


    <div class="container p-5">
        <hr />
        <form action = "index.php" method="post" class="row g-3 needs-validation">
            <div>
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
              </svg>  You are allowed to vote once. Any duplication will be invalidated.</h3>
            </div>
            <div class="col-md-3 ">
              <label for="validationCustom01" class="form-label">Last Name: </label>
              <input type="text" name = "ln" class="form-control" id="validationCustom01" value="" required>
            </div>
            <div class="col-md-3 ">
              <label for="validationCustom02" class="form-label">First Name:</label>
              <input type="text" name="fn" class="form-control" id="validationCustom02" value="" required>
            </div>
            
            
           
           <br />
           <br />
           <hr />
        <div class="w-90">
            <p>Choose your best in capstone project by selecting here:</p>
            <select name="sel" class="form-select" aria-label="Default select example" required>
                <option selected></option>
                <option value="1">Group 1</option>
                <option value="2">Group 2</option>
                <option value="3">Group 3</option>
                <option value="4">Group 4</option>
                <option value="5">Group 5</option>
                <option value="6">Group 6</option>
                <option value="7">Group 7</option>
                <option value="8">Group 8</option>
                <option value="9">Group 9</option>
                <option value="10">Group 10</option>
                <option value="11">Group 11</option>
                <option value="12">Group 12</option>
                <option value="13">Group 13</option>
                <option value="14">Group 14</option>
                <option value="15">Group 15</option>
                <option value="16">Group 16</option>
            </select>
            </div>
            <div class="mx-auto p-5 w-50 text-center">
                <button class="btn btn-primary" name = "submit" type="submit">Submit</button></div>
            <div class="text-center" ><a href="result.php" class="btn-primary text-center" >View Result</a>        
            </div>
        </form>  
    </div>
 

    
    <!--footer-->

    <footer>
      <div class="container footer ml-auto">
        <p class=" text-body-secondary text-center">© 2023 Mary Lou F. Teñoso</p>
      
    </div>
      </footer>
</body>
</html>