<!-- Modal: Add Client -->
<div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="addClient" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row py-4">
                    <div class="col-md-12">
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="mb-5 text-center text-dark">Add new Client</h3>
                                    <div class="form-group-float">
                                        <label for="">Client name</label>
                                        <input type="text" class="form-control w-100">
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Main contact</label>
                                        <select id="" class="selector small-sm">
                                            <option value="1">Pending</option>
                                            <option value="1">On hold</option>
                                            <option value="1">In work</option>
                                            <option value="1">Ended</option>
                                        </select>
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Additional informations</label>
                                        <textarea type="text" class="form-control w-100"
                                                  style="resize: none; height: 200px; padding-top: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <a href="#" data-dismiss="modal" class="btnNormal mr-3">Cancel</a>
                                        <a href="http://projects.krzysztofczepiec.pl/timeme/?clients" class="btnAdd" style="width: 90px">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Add Project -->
<div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="addProject" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row py-4">
                    <div class="col-md-12">
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="mb-5 text-center text-dark">Add new Project</h3>
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
                                            <option value="1">Client</option>
                                        </select>
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Time predict.</label>
                                        <select id="" class="selector small-sm">
                                            <option value="1">0 hours</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group-float">
                                                <label for="">Start date</label>
                                                <input type="text" name="startDate" class="form-control w-100">
                                                <span class="inputLink"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group-float">
                                                <label for="">Expect. date</label>
                                                <input type="text" name="expectedDate" class="form-control w-100">
                                                <a class="inputLink"><i class="far fa-calendar-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Project description</label>
                                        <textarea type="text" class="form-control w-100"
                                                  style="resize: none; height: 200px; padding-top: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <a href="#" data-dismiss="modal" class="btnNormal mr-3">Cancel</a>
                                        <a href="http://projects.krzysztofczepiec.pl/timeme/?projects" class="btnAdd" style="width: 90px">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Add Campaign -->
<div class="modal fade" id="addCampaign" tabindex="-1" role="dialog" aria-labelledby="addCampaign" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row py-4">
                    <div class="col-md-12">
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="mb-5 text-center text-dark">Add new Campaign</h3>
                                    <div class="form-group-float">
                                        <label for="">Campaign name</label>
                                        <input type="text" class="form-control w-100">
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Campaign link</label>
                                        <input type="text" class="form-control w-100">
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Client</label>
                                        <select id="" class="selector small-sm">
                                            <option value="1">Pending</option>
                                            <option value="1">On hold</option>
                                            <option value="1">In work</option>
                                            <option value="1">Ended</option>
                                        </select>
                                        <a href="#" data-toggle="modal" data-target="#addCampaign" class="inputLink plus mr-4"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Activity to do</label>
                                        <select id="" class="selector small-sm">
                                            <option value="1">Activity</option>
                                        </select>
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Brand</label>
                                        <select id="" class="selector small-sm">
                                            <option value="1">Activity</option>
                                        </select>
                                        <a href="#" data-toggle="modal" data-target="#addCampaign" class="inputLink plus mr-4"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Goals</label>
                                        <select id="" class="selector small-sm">
                                            <option value="1">0 regs</option>
                                        </select>
                                    </div>
                                    <div class="form-group-float">
                                        <label for="">Additional informations</label>
                                        <textarea type="text" class="form-control w-100"
                                                  style="resize: none; height: 200px; padding-top: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <a href="#" data-dismiss="modal" class="btnNormal mr-3">Cancel</a>
                                        <a href="http://projects.krzysztofczepiec.pl/timeme/?clients" class="btnAdd" style="width: 90px">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>