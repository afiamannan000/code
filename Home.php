<!DOCTYPE html>
<html>
<head>
<title>Fly Guys</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="StyleSheetFG.css">
</head>

<div class="topnav">

<a href="http://kunet.kingston.ac.uk/k1419859/SignUp.php">Sign Up</a>
<a href="http://kunet.kingston.ac.uk/k1419859/Login.php">Log In</a>
<a href="http://kunet.kingston.ac.uk/k1419859/Bookings.php">Bookings</a>
<a href="http://kunet.kingston.ac.uk/k1419859/Home.php">Home</a>

</div>

<body>
  <h1>Welcome to Fly Guys!</h1>

  <br></br>

  <div class="round2">

   <br></br>

  <form>
    <label>
      <input type="radio" name="flightType"> Return
  		<input type="radio" name="flightType"> One-Way
    </label>
  <br><br>
  Destination:
    <select name="Place">
      <option value="Manchester">Manchester</option>
      <option value="Glasgow">Glasgow</option>
      <option value="Dublin">Dublin</option>
      <option value="Paris">Paris</option>
      <option value="Madrid">Madrid</option>
      <option value="Brussels">Brussels</option>
    </select>

    <br><br>

   <label>From:</label> <input type="date">
   <br><br>
   <label>To:</label> <input type="date">
   <br><br>
    <button type="submit">Search</button>
  </form>

    <br><br>

  </div>

</body>
</html>
