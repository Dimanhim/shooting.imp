<?php require_once "header.php"?>
<body class="body-gray">
    <div class="container-fluid">
        <header>
            <div class="header">
                <?php require_once "nav.php"?>
            </div>
        </header>
        <main>
            <div id="main">
                <div class="row">
                    <!-- LEFT COLUMN -->
                    <div class="col-sm-2">
                        <?php require_once "sidebar.php"?>
                    </div>
                    <?php for($i = 0; $i < 3; $i++) : ?>
                        <?php require "column.php" ?>
                    <?php endfor; ?>

                </div>
            </div>
        </main>
        <?php require_once "footer.php"?>

