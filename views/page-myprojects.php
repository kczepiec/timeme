<!-- Task page -->
<section class="header">
    <div class="row">
        <div class="col-md-7">
            <h1>My projects</h1>
            <div class="buttonList">
                <a href="http://projects.krzysztofczepiec.pl/timeme/?addproject" class="btnAdd">Create new project</a>
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
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Task name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Date added</th>
                        <th scope="col">Expected date</th>
                        <th scope="col">Time predict</th>
                        <th scope="col">Time spent</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    for ($i = 0; $i < 5; $i++) {
                        echo "
                   <tr>
                        <td width='300'><a href='http://projects.krzysztofczepiec.pl/timeme/?project' class='taskLink'><span class='tdLength'>Designer meetup Competition</span></a></td>
                        <td>Polystar</td>
                        <td>2019-02-03</td>
                        <td>2019-02-03</td>
                        <td>2 hours</td>
                        <td>2 hours</td>
                        <td><span class='badge badge-pill badge-primary'>In work</span></td>
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