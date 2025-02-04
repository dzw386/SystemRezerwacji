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
        <h1>Witamy w systemie rezerwacji</h1>
        <nav>
            <ul>
                <li><a href="#reviews">Opinie</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="services">
        <div class="service">
            <img src="lekarz.jpg" alt="Lekarz">
            <h2>Lekarz</h2>
            <p>Umów wizytę u lekarza specjalisty.</p>
            <a href="lekarz.html"><button>Więcej</button></a>
        </div>
        <div class="service">
            <img src="fryzjer.jpg" alt="Fryzjer">
            <h2>Fryzjer</h2>
            <p>Umów się na stylizację fryzury.</p>
            <a href="fryzjer.html"><button>Więcej</button></a>
        </div>
        <div class="service">
            <img src="mechanik.jpg" alt="Mechanik">
            <h2>Mechanik</h2>
            <p>Zarezerwuj wizytę u mechanika.</p>
            <a href="mechanik.html"><button>Więcej</button></a>
        </div>
    </section>
    
    <section class="reservationlist">
    <h2>Lista rezerwacji</h2>
<?php
$conn = mysqli_connect("localhost", "srphp", "", "SystemRezerwacji");
if($conn->connect_error) {
    echo "Błąd podczas łączenia z bazą.";
    die();
}
$sql = "SELECT imie, usluga, data FROM Rezerwacje";
$result = $conn->query($sql);
echo "<table><thead><tr><th>Imię</th><th>Usługa</th><th>Data</th></tr></thead><tbody>";
while($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    foreach($row as $item) {
        echo "<td>" . htmlspecialchars($item) . "</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";
$conn->close();
?>
    </section>
    
    <footer>
        <p>&copy; 2025 System Rezerwacji. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
