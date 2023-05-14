<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);


if(!$con){
 die("Conncetion to  this database is failed due to ".
    mysqli_connect_error());
}


// echo "Succesfully conneceted database";
$name=$_POST['name'];
$age=$_POST['age'];
$reg=$_POST['reg']; 
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `reg`, `phone`, `desc`, `dt`) VALUES ( '$name', '$age', 
'$reg', '$phone', '$desc', current_timestamp())"; 


if($con->query($sql) == true){
    // echo "Succesfully inserted";

    $insert=true;
}
else{
 echo "ERROR:$sql <br> $con->error";
}

$con->close();

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivek Fitness center</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <style>
        *{
margin:0;
padding:0;
box-sizing: border-box;
}

.containter{
max-width: 80%;
/* background-color:rgb(198,152,240); */
padding:33px;
margin:auto;
}

.containter h3,h1{
text-align: center;
font-family: 'Fira Sans', sans-serif;
font-family: 'Lato', sans-serif;
font-family: 'Roboto', sans-serif;
}

input,textarea{
border:2px solid black ;
border-radius: 3px;
width:80%;
padding:10px;
margin:11px auto;
font-size:18px;
outline: none;
display: block;

}

form{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;

}

.btn{
color:white;
background:purple;
padding:15px 10px;
border: 2px solid white;;
font-size: 20px;
border-radius: 15px;
cursor: pointer;
}
        
        
        body {
            color: white;
            background: url("image.jpg");
            margin: 0px;
            padding: 0px;
            font-family: 'Roboto', sans-serif;
        }

        .left {
            position: absolute;
            display: inline-block;
            /* border: 2px solid red; */
            margin: 20px;
            border: 15px;
            left: 20px;
            top: -50px;
            right: 10px;
        }

        .left img {
            width: 200px;
            height: 200px;
            padding: 5px;
            filter: invert(100%);
        }

        .mid {
            display: block;
            width: 42%;
            margin: 18px auto;
            /* border: 2px solid green; */
        }

        .right {
            position: absolute;
            right: 34px;
            top: 33px;
            display: inline-block;
            /* border: 2px solid yellow; */
        }

        .navbar{
            display: inline-block;
        }

        .navbar li {
            display: inline-block;
            font-size: 20px;
            cursor:pointer;
        }

        .navbar li a{
            color: white;
            text-decoration: none;
            padding: 34px 24px;
        }

        .navbar li a:hover{
            text-decoration:underline;
            color: blue;
            cursor:pointer;
        }

        .btn {
            margin: 0px 9px;
            background-color: black;
            color: white;
            padding: 3px 14px;
            border: 2px solid grey;
            border-radius: 10px;
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            border: 2px solid white;
            margin: 123px 80px;
            padding: 5px;
            width: 48%;
            justify-content: center;
            border-radius: 28px;
            font-family: 'Roboto', sans-serif;
        }

        /* .form-group input {
            text-align: center;
            display: block;
            width: 340px;
            padding: 6px;
            border: 2px solid black;
            margin: 3px auto;
            font-size: 15px;
            border-radius: 8px;

        } */

        .container h1 {
            text-align: center;
        }

        .container button {
            display: block;
            width: 70%;
            margin: 10px auto;
        }
    </style>


</head>

<body>
    <header class="header">
        <div class="left">
            <img src="./logo.jpg">
        </div>

        <div class="mid">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Fitness center</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="right">
            <button class="btn">Call Us Now</button> <button class="btn">Email Us</button>
        </div>
  <center>
        <div class="container">
            <h1>Join the best Gym in Chennai</h1>
            
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="number" name="age" id="name" placeholder="Enter your age">
                <input type="text" name="reg" id="name" placeholder="Enter your reg no">
                <input type="number" name="phone" id="name" placeholder="Enter your Phone number"><br>
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other info"></textarea>
           
                 <button class="btn">Submit</button>
        
            </form>
    
            <!-- <form action="noaction.php">

                <div class="form-group">
                    <input type="text" name="" placeholder="Enter your name">
                </div>

                <div class="form-group">
                    <input type="text" name="" placeholder="Age">
                </div>

                <div class="form-group">
                    <input type="text" name="" placeholder="Gender">
                </div>
                <button class="btn">Submit</button>
            </form> -->
        </div>
        </center>
    </header>
</body>

</html>