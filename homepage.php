

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="airline.css">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

	<script type="text/javascript" src="airline.js"></script>
  <style>
    body{
      background-size: cover;
      background-repeat: no-repeat;
      font-family: Roboto;
    }
    .flight{
      width: 35%;
      margin-left: 30px;
      border-radius: 10px;
      margin-top: 25px;
    }
    .btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  width: 45%;
}
input[type = text], input[type = date]{
  width: 55%;
  height: auto;
  border: 0.5px solid #B9B9BA;
  padding: 10px;

}

  </style>
  
  
	<title>AIRLINE DATABASE</title>
</head>

<body background="538085.jpg">
	<header>AVION AIRLINES</header>
	
  <nav class="navbar navbar-inverse" id="n1">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AVION</a>
    </div>
    <div class="tab">
    <ul class="nav navbar-nav">
      <li class="active"><a>Home</a></li>
      <li class="navv"><a href="tickets.html">Tickets</a></li>
      <li class="navv"><a href="">Manage Booking</a></li>
      <li class="navv"><a href="">Offers</a></li>
      <li class="navv"><a href="">Contact</a></li>
      <li class="navv"><a href="">Services</a></li>
      <li class="navv"><a onclick="openForm1()">Login</a></li>
      <div class="form-popup" id="myForm1">
  <form class="form-container" action="login.php" method="post">

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter User name" name="user" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btncancel" onclick="closeForm1()">Close</button><br><br>
    
    <a href="demo2.html">Sign up?</a><br>
    <!--signup page -->
    <a href="">Forgot Password</a>
  </form>
</div>
     </ul>
   </div>
  </div>
</nav><br>
  <div class="flight"><pre>
    <input type="radio" name="trip" value="Oneway">One way    <input type="radio" name="trip" value="Roundtrip">Round trip<br>
    FROM: <input type="text" name="from" required><br>
    TO:   <input type="text" name="to" required><br>
    DEPARTURE DATE: <input id="dateInput" type="date" name="depdate"><br>
        <button type="submit" class="btn">CHECK FLIGHTS</button>
    <script>
    let dateInput = document.getElementById('dateInput');
 
 const cur_date = new Date();
 const cur_month = cur_date.getMonth() > 9 ? cur_date.getMonth() + 1 : '0' + (cur_date.getMonth() + 1);
 const cur_day = cur_date.getDate() > 9 ? cur_date.getDate() : '0' + cur_date.getDate();
  
 const dateStr = cur_date.getFullYear() + '-' + cur_month + '-' + cur_day;
  
 dateInput.setAttribute('min', dateStr);
</script>
  </pre>
  </div>
</body>
</html>
