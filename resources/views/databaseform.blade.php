<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Laravel</title>
 </head>
 <body>
	<form method="POST" action="databaseformprocess">
        @csrf
        <input type="hidden" name="is_admin" value="1" />
        <label>First name:</label><input type="text" name="first_name" required><br>
        <label>Last name:</label><input type="text" name="last_name" required><br>
        <label>Age:</label><input type="text" name="age" required><br>
        <label></label><input type="submit" value="Send">
	</form>
 </body>
</html>