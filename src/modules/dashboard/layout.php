<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dashboard</title>
    <?php require_once  ROOT_PATH . "/common/headder.php" ?>
</head>

<body class="layout-dashboard">

    <div id="wrapper">


        <?php require_once  ROOT_PATH . '/modules/' . $module . '/common/menu.php' ?>

        <div class="bg-body-secondary page-content-wrapper position-relative" style="min-height: 100vh;">


            <?php require_once  ROOT_PATH . '/modules/' . $module . "/common/nav.php" ?>

            <main id="app">
                <?= $content ?? '' ?>
            </main>


            <?php require_once  ROOT_PATH . '/modules/' . $module . "/common/footer.php" ?>

        </div>
    </div>

    <?php require_once  ROOT_PATH . "/common/script.php" ?>
</body>

</html>