<!-- Task page -->
<section class="header">
    <div class="row">
        <div class="col-md-7">
            <a href="http://projects.krzysztofczepiec.pl/timeme/?projects" class="btnBack">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1>1NCE</h1>
            <div class="buttonList">
                <a href="http://projects.krzysztofczepiec.pl/timeme/?addtask" class="btnAdd">Create new task</a>
            </div>
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
    <div class="row">
        <div class="col-md-12">
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-float">
                            <label for="">Project name</label>
                            <input type="text" class="form-control w-100" value="1NCE Campagin">
                        </div>
<!--                        <div class="form-group-float">-->
<!--                            <label for="">Campaign linked</label>-->
<!--                            <input type="text" class="form-control w-100" value="Adwords campaign">-->
<!--                            <a href="#" class="inputLink plus"><i class="fas fa-plus"></i></a>-->
<!--                        </div>-->
                        <div class="form-group-float">
                            <label for="">Status</label>
                            <select id="" class="selector small-sm">
                                <option value="1">Pending</option>
                                <option value="1">On hold</option>
                                <option value="1">Ended</option>
                            </select>
                        </div>
                        <div class="form-group-float">
                            <label for="">Client</label>
                            <select id="" class="selector small-sm">
                                <option value="1">1NCE</option>
                                <option value="1">Polystar</option>
                                <option value="1">VanillaPlus</option>
                            </select>
                        </div>
                        <span class="textLabel">Project description</span>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="boxWrap">
                                    <span class="textLabel">
                                        Expected date
                                    </span>
                                    <h6>2019/03/17</h6>
<!--                                    <a href="#">Change</a>-->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="boxWrap">
                                    <span class="textLabel">
                                        Time predict.
                                    </span>
                                    <h6>10h</h6>
<!--                                    <a href="#">Change</a>-->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="boxWrap">
                                    <span class="textLabel">
                                        Time spent
                                    </span>
                                    <h6>0h</h6>
<!--                                    <a href="#">Change</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="attachments">
                                    <span class="textLabel">Attachments</span>
                                    <ul>
                                        <li class="attachment-item">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="attachment-filetype">.rar</div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="attachment-info">
                                                        <h6 class="filename">Filename.rar</h6>
                                                        <span class="filesize">Size: 33.7MB</span>
                                                        <a href="#" class="remove"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="attachment-item">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="attachment-filetype">.docx</div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="attachment-info">
                                                        <h6 class="filename">Filename.docx</h6>
                                                        <span class="filesize">Size: 33.7MB</span>
                                                        <a href="#" class="remove"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="attachment-item">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="attachment-filetype">
                                                        <img src="https://images.pexels.com/photos/1128318/pexels-photo-1128318.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="attachment-info">
                                                        <h6 class="filename">Filename.zip</h6>
                                                        <span class="filesize">Size: 33.7MB</span>
                                                        <a href="#" class="remove"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="float-right">
                            <a href="http://projects.krzysztofczepiec.pl/timeme/?projects" class="btnNormal mr-3">Cancel</a>
                            <a href="http://projects.krzysztofczepiec.pl/timeme/?projects" class="btnAdd" style="width: 90px">Submit</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="heading mb-4">Tasks list</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Task name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Assigned to</th>
                        <th scope="col">Requested by</th>
                        <th scope="col">Expected date</th>
                        <th scope="col">Time predict</th>
                        <th scope="col">Time spent</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    for ($i = 0; $i < 20; $i++) {
                        echo "
                   <tr>
                        <td width='300'><a href='http://projects.krzysztofczepiec.pl/timeme/?project' class='taskLink'><span class='tdLength'>Designer meetup Competition</span></a></td>
                        <td>Plystar</td>
                        <td>Izabela Pronko</td>
                        <td>Marek Maroszek</td>
                        <td>2019-02-03</td>
                        <td>2 hours</td>
                        <td>2 hours</td>
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