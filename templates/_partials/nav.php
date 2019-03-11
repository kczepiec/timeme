<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" alt="TimeMe">
    </a>
    <div class="mr-auto">
        <div class="timer">
            <select name="" id="" class="selector wide navSmall">
                <?php

                for($i == 0; $i < 10; $i++) {
                    echo "<option value=\"$i\">Task $i</option>";
                }

                ?>

            </select>
            <a href="#" class="btnStart"><i class="fas fa-play mr-3"></i>Start task</a>
            <span class="ml-3">
            00:00:00
        </span>
        </div>
    </div>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-4">
            <a href="" class="nav-link dropdown-toggle notification" id="notiDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="far fa-bell"></i> <span class="dot"></span>
            </a>
            <div class="dropdown-menu m300" aria-labelledby="notiDropdown">
                <div class="notificationAlert p-3">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fas fa-sync mr-3"></i>
                        </div>
                        <div class="col-md-10">
                            <h5 class="m-0">Campaign notification</h5>
                            <p class="m-0 p-0">Changes to 66 campaigns</p>
                            <small class="m-0 p-0">Just now</small>
                        </div>
                    </div>
                </div>
                <div class="notificationAlert p-3">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fas fa-sync mr-3"></i>
                        </div>
                        <div class="col-md-10">
                            <h5 class="m-0">Campaign notification</h5>
                            <p class="m-0 p-0">Changes to 66 campaigns</p>
                            <small class="m-0 p-0">Just now</small>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <span class="navbar-text mr-4 d-md-none d-lg-block">
            <img src="https://images.pexels.com/photos/1036622/pexels-photo-1036622.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                     class="avatar" alt=""> John Doe
        </span>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
    </ul>
</nav>