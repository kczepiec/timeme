<!-- Task page -->
<section class="header">
    <div class="row">
        <div class="col-md-7">
            <a href="http://projects.krzysztofczepiec.pl/timeme/?campaigns" class="btnBack">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1>Add new campaign</h1>
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
                    <label for="">Campaign name</label>
                    <input type="text" class="form-control w-100" value="1NCE mobile campaign">
                </div>
                <div class="form-group-float">
                    <label for="">Campaign link</label>
                    <input type="text" name="link" class="form-control w-100" value="http://timeme.hekko24.pl/active-campaigns">
                    <a href="#" class="inputLink"><i class="far fa-copy"></i></a>

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
                    <a href="#" data-toggle="modal" data-target="#addCampaign" class="inputLink plus mr-4"><i class="fa fa-plus"></i></a>
                </div>
                <div class="form-group-float">
                    <label for="">Activity to do</label>
                    <select id="" class="selector small-sm">
                        <?php

                        for ($a == 0; $a < 10; $a++) {
                            echo "<option value=\"$a\">Activity $a</option>";
                        }

                        ?>
                    </select>
                </div>
                <h3>Additional informations</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Brand</label>
                            <select name="" id="" class="selector small">
                                <?php
                                for ($t = 0; $t < 9; $t++) {
                                    echo "<option value='$t'>$t hours</option>";
                                }
                                ?>
                            </select>
                            <a href="#" data-toggle="modal" data-target="#addCampaign" class="inputLink plus mr-4"><i class="fa fa-plus"></i></a>
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
                            <label for="">Importance</label>
                            <select name="" id="" class="selector small">
                                <?php
                                for ($im = 0; $im < 9; $im++) {
                                    echo "<option value='$im'>$im</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Goals</label>
                            <select name="" id="" class="selector small">
                                <?php
                                for ($g = 0; $g < 9; $g++) {
                                    echo "<option value='$g'>$g regs</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">End date</label>
                            <input type="text" name="endDate" class="form-control w-100">
                            <span class="inputLink"><i class="far fa-calendar-alt"></i></span>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-float">
                            <label for="">Created by</label>
                            <select name="" id="" class="selector small">
                                <?php
                                for ($cr = 0; $cr < 9; $cr++) {
                                    echo "<option value='$cr'>$cr</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group-float">
                    <label for="" class="m-25">Campaign summary</label>
                    <textarea type="text" class="form-control w-100"
                              style="resize: none; height: 200px; padding-top: 10px;"></textarea>
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
                    <a href="http://projects.krzysztofczepiec.pl/timeme/?campaigns" class="btnNormal mr-3">Cancel</a>
                    <a href="http://projects.krzysztofczepiec.pl/timeme/?campaigns" class="btnAdd" style="width: 90px">Submit</a>
                </div>
            </div>
        </div>
    </form>
</div>