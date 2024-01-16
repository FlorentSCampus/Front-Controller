<!DOCTYPE html>
<html lang="fr">

<?php
$metaTitle = 'front_controller';
$filter = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_ENCODED);
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $metaTitle ?></title>
</head>

<body>
    <?php
    if ($_GET["page"] === $filter) {
        if ($_GET["page"] === 'page1') { ?>
            <?php require_once 'src/page1.php' ?>
        <?php } elseif ($_GET["page"] === 'page2') { ?>
            <?php require_once 'src/page2.php' ?>
        <?php } elseif ($_GET["page"] === 'page3') { ?>
            <?php require_once 'src/page3.php' ?>
            <?php } elseif ($_GET["page"] === 'contact') { ?>
            <?php require_once 'src/contact.php' ?>
        <?php } else { ?>
            <?php require_once 'src/404.php' ?>
        <?php }
    } else { ?>
        <p>L'URL [<?= $_GET['page'] ?>] n'est pas valide</p>
    <?php } ?>
</body>