<!doctype html>
<html lang="en" class="h-full bg-gray-100">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= isset($page_title) ? $page_title : "Laracasts"; ?></title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="h-full">
        <div class="min-h-full">
            <?php require "components/navbar.php"; ?>
            <?php require "components/header.php"; ?>
            <?php require "components/body.php"; ?>
        </div>
    </body>
</html>