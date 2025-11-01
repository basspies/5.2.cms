<?php
include 'includes/connect.php';
include 'includes/header.php';


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Slideshow Beheer</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #f2f2f2; }
        img { width: 120px; height: auto; border-radius: 6px; }
        .msg { color: green; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>

<?php if (isset($_GET['verwijderd'])): ?>
    <p class="msg">✅ Slide succesvol verwijderd!</p>
<?php endif; ?>

<h2 style="text-align:center;">Slideshow Beheer</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Afbeelding</th>
        <th>Titel</th>
        <th>Acties</th>
    </tr>

    <?php foreach ($slideshow as $slide): ?>
    <tr>
        <td><?= htmlspecialchars($slide['id']) ?></td>
        <td><img src="<?= htmlspecialchars($slide['image_url']) ?>" alt=""></td>
        <td><?= htmlspecialchars($slide['title']) ?></td>
        <td>
            <a href="delete.php?id=<?= $slide['id'] ?>" 
               onclick="return confirm('Weet je zeker dat je deze slide wilt verwijderen?');">
               Verwijderen
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
