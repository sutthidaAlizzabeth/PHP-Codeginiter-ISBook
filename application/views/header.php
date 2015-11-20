<header class="relative header">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <a href="<?php echo base_url('index.php') ?>">
                <h1>ADDRESS BOOK <small>INFRASTRUCTURE TEAM</small></h1>
            </a>
        </div>
        <!-- login-->
        <div id="login" class="relative">
            <div class="col-md-2">
                <input class="login" type="text" placeholder="username">
            </div>
            <div class="col-md-2">
                <input class="login" type="password" placeholder="password">
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
        <div class="mainMenu .col-xs-12">
            <button type="button" class="btn btn-primary">Member Management</button>
            <a href="<?php echo base_url('index.php/co_contact/view_insert') ?>">
                <button type="button" class="btn btn-success">Insert Contact</button>
            </a>
        </div>
        <!-- ./login -->
        <!-- log out -->
        <!--<div class="col-md-4"></div>
        <div class="logout col-md-2">
            <button type="submit" class="btn btn-danger">Log Out</button>
        </div>-->
        <!-- ./log out -->
</header>