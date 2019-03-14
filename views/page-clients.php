<section class="header">
    <div class="row">
        <div class="col-md-8">
            <h1>Clients</h1>
            <div class="buttonList">
                <a href="" data-toggle="modal" data-target="#addClient" class="btnAdd">Create new Client</a>
            </div>
        </div>
        <div class="col-md-4">
            <form action="" class="searchForm">
                <input type="text" class="search" placeholder="Search...">
                <a href="#" class="submit"><i class="fas fa-search"></i></a>
            </form>
        </div>
    </div>
</section>
<div class="section-content">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" width="25%">Client</th>
                        <th scope="col" width="25%">WKM Main Contact</th>
                        <th scope="col" width="25%">Client Contact</th>
                        <th scope="col" width="25%">More details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($clients = 1; $clients < 11; $clients++) {
                        echo "
                        <tr>
                        <td>
                            <a href=\"http://projects.krzysztofczepiec.pl/timeme/?client\">Client $clients</a>
                        </td>
                        <td>John Doe.</td>
                        <td>contact@polystar.co.uk</td>
                        <td>
                            <a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                            <a href=\"#\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
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
    <div class="row">
        <div class="col-md-12">
            <ul class="pagination d-flex justify-content-between">

                <li class="page-item"><a class="page-link-prev" href="#">Previous</a></li>

                <span class="d-flex align-self-auto">
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </span>

                <li class="page-item"><a class="page-link-next" href="#">Next</a></li>

            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
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