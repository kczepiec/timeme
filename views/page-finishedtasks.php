<!-- Template page -->
<section class="header">
    <div class="row">
        <div class="col-md-8">
            <h1>Finished Tasks</h1>
        </div>
        <div class="col-md-4">
            <form action="" class="searchForm">
                <input type="text" class="search">
                <a href="#" class="submit"><i class="fas fa-search"></i></a>
            </form>
        </div>
    </div>
</section>
<div class="section-content">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Task ID</th>
                <th scope="col">Date added</th>
                <th scope="col">Task name</th>
                <th scope="col">Client</th>
                <th scope="col">Assigned to</th>
                <th scope="col">Request. by</th>
                <th scope="col">Expected date</th>
                <th scope="col">Time predict.</th>
                <th scope="col">Time spent</th>
                <th scope="col">Completed</th>
            </tr>
            </thead>
            <tbody>
            <?php

            for ($i = 0; $i < 20; $i++) {
                echo "
                   <tr>
                        <td>$i</td>
                        <td>2019-02-03</td>
                        <td width='300'><a href='http://projects.krzysztofczepiec.pl/timeme/?task' class='taskLink'><span class='tdLength'>Designer meetup Competition</span></a></td>
                        <td>Plystar</td>
                        <td>Izabela Pronko</td>
                        <td>Marek Maroszek</td>
                        <td>2019-02-03</td>
                        <td>2 hours</td>
                        <td>2 hours</td>
                        <td><span class='badge badge-pill badge-success'>ENDED</span></td>
                  
                        
                    </tr>  
                ";
            }

            ?>
            </tbody>
        </table>
    </div>
</div>
<div class="section-footer">
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