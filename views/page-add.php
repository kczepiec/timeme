<!-- Add page -->
<section class="header">
    <div class="row">
        <div class="col-md-8">
            <a href="http://projects.krzysztofczepiec.pl/timeme/?template" class="btnBack">
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
                    <label for="">Task name</label>
                    <input type="text" class="form-control w-100">
                </div>
                <div class="form-group-float">
                    <label for="">Client</label>
                    <select id="" class="selector small-sm">
                        <?php

                        for ($c == 0; $c < 10; $c++) {
                            echo "<option value=\"$p\">Client $p</option>";
                        }

                        ?>
                    </select>
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
                <div class="form-group-float">
                    <label for="">Campaign linked</label>
                    <select id="" class="selector small-sm">
                        <?php
                        for ($camp = 0; $camp < 9; $camp++) {
                            echo "<option value='$camp'>Campaign $camp</option>";
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Time spent</label>
                            <select name="" id="" class="selector small disabled" disabled>
                                <option value='0' selected>0 hours</option>
                                <?php
                                for ($time = 1; $time < 9; $time++) {
                                    echo "<option value='$time'>$time hours</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Assigned to</label>
                            <select name="" id="" class="selector small">
                                <option value="1">Izabela Pronko</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Requested by</label>
                            <select name="" id="" class="selector small">
                                <option value="1">Marek Maroszek</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group-float">
                    <label for="" class="m-25">Job description</label>
                    <textarea type="text" class="form-control w-100"
                              style="resize: none; height: 100px; padding-top: 10px;"></textarea>
                </div>
                <div class="form-group-float">
                    <label for="" class="m-25">Final comment</label>
                    <textarea type="text" class="form-control w-100"
                              style="resize: none; height: 100px; padding-top: 10px;"></textarea>
                </div>
                <div class="form-group-float">
                    <label for="">Attachment</label>
                    <div class="attachWrap">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"><i class="fas fa-upload"></i></label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"><i class="fas fa-upload"></i></label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"><i class="fas fa-upload"></i></label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"><i class="fas fa-upload"></i></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"><i class="fas fa-upload"></i></label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"><i class="fas fa-upload"></i></label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"><i class="fas fa-upload"></i></label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"><i class="fas fa-upload"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="section-footer py-5">
    <div class="text-center">
        <a href="http://projects.krzysztofczepiec.pl/timeme/?template" class="btnNormal mr-3">Cancel</a>
        <a href="http://projects.krzysztofczepiec.pl/timeme/?template" class="btnAdd" style="width: 90px">Submit</a>
    </div>
</div>