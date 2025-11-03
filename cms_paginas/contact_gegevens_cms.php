<?php 
include 'header_cms.php';
include '../includes/connect.php';

if (isset($_GET['praktijknaam']) && isset($_GET['adres']) && isset($_GET['postcode']) && isset($_GET['telefoonnummer']) && isset($_GET['emailadres']) ) {
    $title = htmlspecialchars($_GET['postcode']);
    $praktijknaam = htmlspecialchars($_GET['praktijknaam']);
    $adres = htmlspecialchars($_GET['adres']);
    $telefoonnummer = htmlspecialchars($_GET['telefoonnummer']);
    $emailadres = htmlspecialchars($_GET['emailadres']);

    $stmt = $conn->prepare("INSERT INTO contact (praktijknaam, adres, postcode, telefoonnummer, emailadres)
  VALUES (:praktijknaam, :adres, :postcode, :telefoonnummer, :emailadres)");
  $stmt->bindParam(':praktijknaam', $praktijknaam);
  $stmt->bindParam(':adres', $adres);
  $stmt->bindParam(':postcode', $postcode);
  $stmt->bindParam(':telefoonnummer', $telefoonnummer);
  $stmt->bindParam(':emailadres', $emailadres);

  // insert a row
  $stmt->execute();
}
?>

<div class="cms-intro">
    <h2>Content Management Systeem</h2>
    <p>Welkom bij het CMS. Hier kunt u de inhoud van uw website beheren.</p>
</div>
<div class="cms-container">

    <?php include '../includes/cms_links_paginas.php'; ?>


    <div class="cms-inhoud">
    <form action="contact_gegevens_cms.php" method="GET">

        <label for="praktijknaam" class="gegevens">praktijknaam:</label>
        <input type="text" id="praktijknaam" name="praktijknaam" placeholder="Enter your praktijknaam" required class="gegevens_invoer"><br>

        <label for="adres" class="gegevens">adres:</label>
        <input type="text" id="adres" name="adres" placeholder="Enter your adres" required class="gegevens_invoer"><br>

        <label for="postcode" class="gegevens">postcode:</label>
        <input type="text" id="postcode" name="postcode" placeholder="Enter your postcode" required class="gegevens_invoer"><br>

        <label for="telefoonnummer" class="gegevens">telefoonnummer:</label>
        <input type="text" id="telefoonnummer" name="telefoonnummer" placeholder="Enter your telefoonnummer" required class="gegevens_invoer"><br>

        <label for="emailadres" class="gegevens">emailadres:</label>
        <input type="text" id="emailadres" name="emailadres" placeholder="Enter your emailadres" required class="gegevens_invoer"><br>

        <button type="submit" class="aanmelden_button">toevoegen</button>
    </form>


    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=5.2cms", "root", "");

// $id = 6; // voorbeeld-id
$stmt = $pdo->prepare("SELECT * FROM contact");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->execute();
foreach ($result as $contact) {
    echo "<div>";
    echo "<h3>" . htmlspecialchars($contact['praktijknaam']) . "</h3>";
    echo "<h3>" . htmlspecialchars($contact['adres']) . "</h3>";
    echo "<h3>" . htmlspecialchars($contact['postcode']) . "</h3>";
    echo "<h3>" . htmlspecialchars($contact['telefoonnummer']) . "</h3>";
    echo "<h3>" . htmlspecialchars($contact['emailadres']) . "</h3>";

    echo "<form method='post' action='contact_gegevens_cms.php' onsubmit='return confirm(\"Weet je zeker dat je dit wilt verwijderen?\");'>";
    echo "<input type='hidden' name='id' value='" . htmlspecialchars($contact['id']) . "'>";
    echo "<button type='submit'>Verwijderen</button>";
    echo "</form>";

    echo "</div>";
}

if (isset($_POST['id'])) {
    $id = (int)$_POST['id']; // zorg dat het een integer is
    $stmt = $conn->prepare("DELETE FROM contact WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo "Record verwijderd!";
} else {
    echo "Geen ID ontvangen om te verwijderen.";
}
?>
    </div>
    

</div>




<?php include '../includes/footer.php'; ?>