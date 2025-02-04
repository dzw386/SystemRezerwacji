<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Rezerwacji</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>System Rezerwacji</h1>
        <nav>
            <ul>
                <li><a href="index.html">Powrót do systemu</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="response">
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "srphp", "", "SystemRezerwacji");
    if($conn->connect_error) {
        echo "Błąd podczas łączenia z bazą.";
        die();
    }
    $name = $conn->real_escape_string($_POST["name"]);
    $service = $conn->real_escape_string($_POST["service"]);
    $date = $conn->real_escape_string($_POST["date"]);
    $sql = "INSERT INTO Rezerwacje (imie, usluga, data) VALUES ('" . $name . "', '" . $service . "', '" . $date . "');";
    if($conn->query($sql) !== TRUE) {
        echo "Błąd podczas dodawania rezerwacji.";
        die();
    }
    $conn->close();
    echo "Dodano rezerwację.";
}
?>
    </section>
    
    <footer>
        <p>&copy; 2025 System Rezerwacji. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
