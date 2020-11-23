<?php
$servername = "mysql.ct8.pl";
$username = "m18727_kopko567";
$password = "Haslo123";
$dbname = "m18727_restauracja";

// Utworzenie połączenia (nazwa serwera, użytkownik, hasło, baza danych)
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Sprawdzenie czy udało się połączyć z bazą danych
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

?>