<?php 
include 'header_cms.php';
include '../includes/connect.php';

if (isset($_GET['image_url']) && isset($_GET['title']) && !empty($_GET['image_url']) && !empty($_GET['title'])) {
    $image_url = htmlspecialchars($_GET['image_url']);
    $title = htmlspecialchars($_GET['title']);
    
    $stmt = $conn->prepare("INSERT INTO slideshow (image_url, title)
  VALUES (:image_url, :title)");
  $stmt->bindParam(':image_url', $image_url);
  $stmt->bindParam(':title', $title);

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
    <form action="homepagina_cms.php" method="GET">
        <label for="image_url" class="gegevens">image_url:</label>
        <input type="url" id="image_url" name="image_url" placeholder="Enter your image_url" required class="gegevens_invoer"><br>
        
        <label for="title" class="gegevens">title:</label>
        <input type="text" id="title" name="title" placeholder="Enter your title" required class="gegevens_invoer"><br>

        <button type="submit" class="aanmelden_button">toevoegen</button>
    </form>


    <?php
$pdo = new PDO("mysql:host=localhost;dbname=5.2cms", "root", "");

$id = 6; // voorbeeld-id
$stmt = $pdo->prepare("SELECT * FROM slideshow WHERE id = :id");
$stmt->execute(['id' => $id]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {

    $stmt = $conn->prepare("SELECT * FROM jouw_tabel ORDER BY id ASC");
    $stmt->bindParam(':image_url', $row['image_url']);
    $stmt->bindParam(':title', $row['title']);
    $stmt->execute();
}
?>

    </div>
                <a href="../delete.php?id=<?= $slideshow['id'] ?>" 
            onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?');">
            Verwijderen
</div>



<?php include '../includes/footer.php'; ?>