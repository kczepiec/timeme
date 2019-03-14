<!-- Task page -->
<section class="header">
    <div class="row">
        <div class="col-md-7">
            <a href="http://projects.krzysztofczepiec.pl/timeme/?projects" class="btnBack">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1>Add new project</h1>
        </div>
        <div class="col-md-5">
            <form action="" class="searchForm">
                <input type="text" class="search" placeholder="Search...">
                <a href="#" class="submit"><i class="fas fa-search"></i></a>
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
                    <label for="">Status</label>
                    <select id="" class="selector small-sm">
                        <option value="1">Pending</option>
                        <option value="1">On hold</option>
                        <option value="1">In work</option>
                        <option value="1">Ended</option>
                    </select>
                </div>
                <div class="form-group-float">
                    <label for="">Client</label>
                    <select id="" class="selector small-sm">
                        <?php

                        for ($p == 0; $p < 10; $p++) {
                            echo "<option value=\"$p\">Client $p</option>";
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
                            <span class="inputLink"><i class="far fa-calendar-alt"></i></span>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Expect. date</label>
                            <input type="text" name="expectedDate" class="form-control w-100">
                            <span class="inputLink"><i class="far fa-calendar-alt"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group-float">
                    <label for="">Project description</label>
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
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <a href="http://projects.krzysztofczepiec.pl/timeme/?projects" class="btnNormal mr-3">Cancel</a>
                    <a href="http://projects.krzysztofczepiec.pl/timeme/?projects" class="btnAdd" style="width: 90px">Submit</a>
                </div>
            </div>
        </div>
    </form>
</div>