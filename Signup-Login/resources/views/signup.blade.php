<html>
<head>
  <title>Sign Up</title>
</head>
<body>
<div id="signup">
<h1>Sign Up</h1>
<form method="POST" action="{{ URL::to('/formprocess') }}">
    @csrf
    Name:<input type="text" name="name" required>
    <br>
    <br>
    Email:<input type="email" name="email" required>
    <br>
    <br>
    Password:<input type="password" name="password" required>
    <br>
    <br>
    Mobilenumber:<input type="number" name="mobile" required>
    <br>
    <br>
    <input type="submit" name="submit" value="submit">

</form>

</div>

</body>
</html>
