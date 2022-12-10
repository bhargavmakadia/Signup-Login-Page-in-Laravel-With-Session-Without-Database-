<html>
<head>
  <title>Sign In</title>
</head>
<body>
<div id="signin">
<h1>Sign in</h1>
<form method="POST" action="{{ URL::to('/loginprocess') }}">
    @csrf
    Email:<input type="email" name="email" required>
    <br>
    <br>
    Password:<input type="password" name="password" required>
    <br>
    <br>
    <input type="submit" name="submit" value="signin">
</form>
</div>
</body>
</html>
