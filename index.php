<?php
$metaTitle = "front_controller";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $metaTitle ?></title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $pageExists = false;

    $paths = array(
        "contact" => "src/contact.php",
        "content" => "src/content.php",
        "page1" => "src/page1.php",
        "page2" => "src/page2.php",
        "page3" => "src/page3.php"
    );

    ob_start();
    for ($i = 0; $i < count($paths) && !$pageExists; $i++) {
        if ($_GET["page"] === array_keys($paths)[$i]) {
            require_once 'src/processing.php';
            require_once 'src/error.php';

            require_once "src/header.php";
            require_once array_values($paths)[$i];
            require_once "src/footer.php";

            $pageExists = true;
        }
    }

    if (!$pageExists) {
        require_once "src/404.php";
    }
    $render = ob_get_clean();
    echo $render;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>