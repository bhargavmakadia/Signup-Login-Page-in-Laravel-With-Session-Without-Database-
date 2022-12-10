<html>
<head>
  <title>Forgot Password</title>
</head>
<body>
<div id="change">
<h1>Forgot Password</h1>
<form method="POST" action="{{ URL::to('/forgot') }}">
    @csrf
    email:<input type="email" name="email" required>
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>
