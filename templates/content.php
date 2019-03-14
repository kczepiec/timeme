<?php include("templates/_partials/sidebar.php"); ?>

<main class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">My projects</a></li>
                </ul>
            </div>
            <?php
            if(isset($_GET['dashboard'])) {
                include("views/page-dashboard.php");
            } else {
                ?>
                <div class="content--wrap">
                    <?php

                    if (isset($_GET['template'])) {
                        include("views/page-clear.php");
                    } else if (isset($_GET['add'])) {
                        include("views/page-add.php");
                    } else if (isset($_GET['task'])) {
                        include("views/page-task.php");
                    } else if (isset($_GET['project'])) {
                        include("views/page-project.php");
                    } else if (isset($_GET['projects'])) {
                        include("views/page-projects.php");
                    } else if (isset($_GET['projectadd'])) {
                        include("views/page-projectadd.php");
                    }


                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</main>
