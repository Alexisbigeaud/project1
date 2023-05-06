@extends("mainpage")	 
@section("content")
<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 <form method="post" action="{{ action('App\Http\Controllers\studentController@createUserForm') }}">
 @csrf
    <h1>Choose-Student</h1>
    
    <label><b>Student-Name</b></label>
    <input type="text" placeholder="Enter student name" name="username" required>

    <input type="submit" id='submit' value='LOGIN' >
    <?php
    if(isset($_GET['erreur'])){
        
    if($err==1 || $err==2)
        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    }
    
    ?>
 </form>
 </div>
 </body>
</html>
@stop
