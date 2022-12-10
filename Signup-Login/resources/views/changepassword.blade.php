<html>
<head>
  <title>Change Password</title>
</head>
<body>
<div id="change">
<h1>Change Password</h1>
<form method="POST" action="{{ URL::to('/change') }}">
    @csrf
    Old password:<input type="password" name="oldpassword" required>
    <br>
    <br>
    New password:<input type="password" name="newpassword" required>
    <br>
    <br>
    Confirm password:<input type="password" name="cpassword" required>
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>
