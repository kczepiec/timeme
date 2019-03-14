<section class="header">
    <div class="row">
        <div class="col-md-8">
            <a href="http://projects.krzysztofczepiec.pl/timeme/?clients" class="btnBack">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1>1NCE</h1>
        </div>
        <div class="col-md-4 text-right">
            <a href="#" class="btn btn-primary mr-2">Homepage</a>
            <a href="#" class="btn btn-secondary mr-2">Clients tab</a>
            <form action="" class="searchForm">
                <input type="text" class="search" placeholder="Search...">
                <a href="#" class="submit"><i class="fas fa-search"></i></a>
            </form>
        </div>
    </div>
</section>
<div class="section-content">
    <div class="row">
        <div class="col-md-6">
            <form action="">
                <div class="form-group-float">
                    <label for="">Client contacts</label>
                    <input type="text" name="link" class="form-control w-100" value="3 hours">
                </div>
                <div class="form-group-float">
                    <label for="">WKM Main Contact</label>
                    <select id="" class="selector small-sm">
                        <?php

                        for ($cont == 0; $cont < 10; $cont++) {
                            echo "<option value=\"$cont\">Client $cont</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="form-group-float">
                    <label for="">Additional informations</label>
                    <textarea type="text" class="form-control w-100"
                              style="resize: none; height: 200px; padding-top: 10px;"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-left">
                            <a href="http://projects.krzysztofczepiec.pl/timeme/?clients" class="btnNormal mr-3">Cancel</a>
                            <a href="http://projects.krzysztofczepiec.pl/timeme/?clients" class="btnAdd" style="width: 90px">Submit</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" width="25%">Task name</th>
                        <th scope="col" width="25%">Predict. Time</th>
                        <th scope="col" width="25%">Time Spent</th>
                        <th scope="col" width="25%">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($task = 1; $task < 11; $task++) {
                        echo "
                        <tr>
                        <td>
                            <a href=\"#\">Task $task</a>
                        </td>
                        <td>$task hours</td>
                        <td>$task hours</td>
                        <td>
                            2019-03-11    
                        </td>
                    </tr>
                        ";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>