<?php 
include 'includes/header.php';
include 'includes/connect.php';

try {
    // Zorg dat de query bestaat
    $sql = "SELECT * FROM slideshow";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Haal alle resultaten op als associatieve array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<p style='color:red;'>Databasefout: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>

<div class="cms-container">
    <ul class="cms-links">
        <a href="cms_paginas/homepagina_cms.php">homepage</a>
        <a href="cms_paginas/over_mij_cms.php">over mij</a>
        <a href="cms_paginas/contact_gegevens_cms.php">contact_gegevens</a>
        <a href="index.php">Uitloggen</a>
    </ul>
 <div class="cms-inhoud">
<table>
    <tr>
        <th>ID</th>
        <th>Afbeelding</th>
        <th>Titel</th>
        <th>Acties</th>
    </tr>

    <?php if (!empty($rows)): ?>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']); ?></td>
                <td><?= htmlspecialchars($row['image_url']); ?></td>
                <td><?= htmlspecialchars($row['title']); ?></td>
                <td>
                    <a href="cms-db/cms-edit-hardware_info.php?id=<?= $row['id']; ?>">Edit</a>
                    <form method="post" action="cms-db/cms-delete.php" style="display:inline;" onsubmit="return confirm('Verwijder dit item?');">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']); ?>">
                        <input type="hidden" name="type" value="hardware_info">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="4">Geen gegevens gevonden.</td></tr>
    <?php endif; ?>
</table>
</div>
</div>
