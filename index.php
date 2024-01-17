<?php
$metaTitle = "front_controller";
$filter = filter_input(INPUT_GET, "page", FILTER_SANITIZE_ENCODED);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $metaTitle ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php require_once "src/header.php" ?>
    <?php
    if ($_GET["page"] === $filter) {
        if ($_GET["page"] === "page1") { ?>
            <?php require_once "src/page1.php" ?>
        <?php } elseif ($_GET["page"] === "page2") { ?>
            <?php require_once "src/page2.php" ?>
        <?php } elseif ($_GET["page"] === "page3") { ?>
            <?php require_once "src/page3.php" ?>
        <?php } elseif ($_GET["page"] === "contact") { ?>
            <?php require_once "src/contact.php" ?>
        <?php } else { ?>
            <?php require_once "src/404.php" ?>
        <?php }
    } else { ?>
        <p>L"URL [<?= $_GET["page"] ?>] n"est pas valide</p>
    <?php } ?>
    <?php require_once "src/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>