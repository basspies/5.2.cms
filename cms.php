<?php 
include 'includes/header.php';
include 'includes/connect.php';
?>

<div class="cms-intro">
    <h2>Content Management Systeem</h2>
    <p>Welkom bij het CMS. Hier kunt u de inhoud van uw website beheren.</p>
</div>
<div class="cms-container">

    <ul class="cms-links">
        <a href="cms_paginas/homepagina_cms.php">homepage</a>
        <a href="cms_paginas/over_mij_cms.php">over mij</a>
        <a href="cms_paginas/contact_gegevens_cms.php">contact_gegevens</a>
        <a href="index.php">Uitloggen</a>
    </ul>

    <div class="cms-inhoud">
        <h3>Inhoud bewerken</h3>
        <p>Kies een sectie om te bewerken vanuit het menu hierboven.</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>