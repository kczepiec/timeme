<!-- Add page -->
<section class="header">
    <div class="row">
        <div class="col-md-8">
            <a href="#" class="btnBack">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1>Add new task</h1>
        </div>
        <div class="col-md-4">
            <form action="">
                <label for="">Status</label>
                <select name="" id="" class="statusSelect">
                    <option value="">Pending</option>
                    <option value="">In work</option>
                    <option value="">Success</option>
                    <option value="">On hold</option>
                </select>
                <div class="toggle ml-md-3">
                    <label class="form-switch">
                        Completed
                        <input type="checkbox">
                        <i></i>
                    </label>
                </div>
            </form>
        </div>
    </div>
</section>
<div class="section-content">
    <form action="">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group-float">
                    <label for="">Project name</label>
                    <input type="text" class="form-control w-100">
                </div>
                <div class="form-group-float">
                    <label for="">Campaign linked</label>
                    <input type="text" class="form-control w-100">
                </div>
                <div class="form-group-float">
                    <label for="">Project name</label>
                    <select id="" class="selector small-sm">
                        <?php

                        for ($p == 0; $p < 10; $p++) {
                            echo "<option value=\"$p\">Project $p</option>";
                        }

                        ?>
                    </select>
                </div>
                <h3>Additional informations</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Time predict.</label>
                            <select name="" id="" class="selector small">
                                <?php
                                for ($t = 0; $t < 9; $t++) {
                                    echo "<option value='$t'>$t hours</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Start date</label>
                            <input type="text" name="startDate" class="form-control w-100">
                            <a href="#" class="inputLink"><i class="far fa-calendar-alt"></i></a>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Expected date</label>
                            <input type="text" name="expectedDate" class="form-control w-100">
                            <a href="#" class="inputLink"><i class="far fa-calendar-alt"></i></a>
                        </div>
                    </div>
                </div>
                <!--                <div class="row">-->
                <!--                    <div class="col-md-4">-->
                <!--                        <div class="form-group-float">-->
                <!--                            <label for="">Time spent</label>-->
                <!--                            <input type="text" class="form-control w-100">-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-4">-->
                <!--                        <div class="form-group-float">-->
                <!--                            <label for="">Time today</label>-->
                <!--                            <select name="" id="" class="selector small">-->
                <!--                                --><?php
                //                                for($t = 0; $t < 9; $t++) {
                //                                    echo "<option value='$t'>$t hours</option>";
                //                                }
                //                                ?>
                <!--                            </select>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-4">-->
                <!--                        <div class="form-group-float">-->
                <!--                            <label for="">Project delay</label>-->
                <!--                            <select name="" id="" class="selector small">-->
                <!--                                --><?php
                //                                for($k = 0; $k < 101; $k++) {
                //                                    echo "<option value='$k'>$k%</option>";
                //                                }
                //                                ?>
                <!--                            </select>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
            <div class="col-md-6">
                <div class="form-group-float">
                    <label for="">Job description</label>
                    <textarea type="text" class="form-control w-100"
                              style="resize: none; height: 100px; padding-top: 10px;"></textarea>
                </div>
                <div class="form-group-float">
                    <label for="">Final comment</label>
                    <textarea type="text" class="form-control w-100"
                              style="resize: none; height: 100px; padding-top: 10px;"></textarea>
                </div>
                <div class="form-group-float">
                    <label for="">Attachment</label>
                    xxx
                </div>
            </div>
        </div>
    </form>
</div>
<div class="section-footer py-5">
    <div class="text-center">
        <a href="#" class="btnNormal mr-3">Cancel</a>
        <a href="#" class="btnAdd" style="width: 90px">Submit</a>
    </div>
</div>