<!-- Task page -->
<section class="header">
    <div class="row">
        <div class="col-md-8">
            <a href="#" class="btnBack">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1>Campaigns</h1>
            <div class="buttonList">
                <a href="http://projects.krzysztofczepiec.pl/timeme/?addcampaign" class="btnAdd">Create new campaign</a>
                <a href="#" class="btnNormal">Active Campaigns</a>
                <a href="#" class="btnNormal">Campaign archive</a>
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
                        <th scope="col" width="70%">Campaign name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Regs</th>
                        <th scope="col">Goal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width='70%'>
                            <a href='#' class='openInfo'><i class='fas fa-plus'></i></a>
                            Designer meetup Competition <span class='badge badge-danger badge-pill ml-2'>URGENT</span>
                            <div class='campaignInfo show w-100'>
                                <div class='row'>
                                    <div class='col-md-4'>
                                        <div class='form-group-float'>
                                            <label for=''>Campaign link</label>
                                            <input type='text' name='campaignlink' class='form-control w-100' value="http://projects.krzysztofczepiec.pl/timeme/?campaigns#">
                                            <span class='inputLink'><i class='far fa-copy'></i></span>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class='col-md-3'>
                                                <h6>Campaign start</h6>
                                                <span>2019-03-19</span>
                                            </div>
                                            <div class='col-md-3'>
                                                <h6>Campaign end</h6>
                                                <span>2019-03-19</span>
                                            </div>
                                            <div class='col-md-3'>
                                                <h6>Campaign type</h6>
                                                <span>Microsite</span>
                                            </div>
                                            <div class='col-md-3'>
                                                <h6>Campaign brand</h6>
                                                <span>VanillaPlus</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="editBtn">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                        <td>Polystar</td>
                        <td>200</td>
                        <td>700</td>
                    </tr>
                    <?php

                    for ($i = 0; $i < 20; $i++) {
                        echo "
                   <tr>
                        <td width='70%'>
                        <a href='#' class='openInfo'><i class='fas fa-plus'></i></a>
                            Designer meetup Competition <span class='badge badge-danger badge-pill ml-2'>URGENT</span>
                            <div class='campaignInfo w-100'>
                                <div class='row'>
                                    <div class='col-md-4'>
                                    <div class='form-group-float'>
                                        <label for=''>Campaign link</label>
                                        <input type='text' name='campaignlink' class='form-control w-100'>
                                        <span class='inputLink'><i class='far fa-copy'></i></span>
            
                                    </div>
                                    </div>
                                    <div class='col-md-2'>
                                        <h6>Campaign start</h6>
                                        <span>2019-03-19</span>
                                    </div>
                                    <div class='col-md-2'>
                                        <h6>Campaign end</h6>
                                        <span>2019-03-19</span>
                                    </div>
                                    <div class='col-md-2'>
                                        <h6>Campaign type</h6>
                                        <span>Microsite</span>
                                    </div>
                                    <div class='col-md-2'>
                                        <h6>Campaign brand</h6>
                                        <span>VanillaPlus</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>Polystar</td>
                        <td>200</td>
                        <td>700</td>
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