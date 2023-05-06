@extends("mainpage")	 
@section("content")
<?php
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=class_records', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

$username = $_POST["username"];
$requete = $bdd->prepare("SELECT * FROM students INNER JOIN marks ON students.StudentId=marks.StudentId INNER JOIN subjects on subjects.SubId=marks.SubId WHERE StuName=:username");
$requete->bindParam(':username', $username, PDO::PARAM_STR);
$requete->execute();
$resultat = $requete->fetch(PDO::FETCH_ASSOC);

if ($resultat) {
    echo "Student name : " . $resultat['StuName'] . "<br>";
    echo "Student ID : " . $resultat['StudentId'] . "<br>";
    echo "Student Class : " . $resultat['StuClass'] . "<br>";
    echo "Student Gender : " . $resultat['StuGenderMale'] . "<br>";
    echo "Mark date : " . $resultat['mDate'] . "<br>";
    echo "Mark : " . $resultat['mark'] . "<br>";
    echo "Mark type : " . $resultat['mType'] . "<br>";
    echo "Mark ID : " . $resultat['mId'] . "<br>";
    echo "Subject ID : " . $resultat['SubId'] . "<br>";
    echo "Subject name: " . $resultat['Sname'] . "<br>";
    echo "Subject category : " . $resultat['Scategory'] . "<br>";
} else {
    echo "No students for this name";
}

$requete->closeCursor();
?>
@stop