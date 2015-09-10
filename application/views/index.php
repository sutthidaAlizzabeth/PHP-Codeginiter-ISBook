<html>
<head>
    <title>IS Book</title>
    <?php $this->load->view('head.php') ?>
</head>
<body>
    <!-- header -->
    <?php $this->load->view('header.php') ?>
    <!-- ./header -->

    <!-- menu bar -->
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="active"><a href="<?php echo base_url('index.php') ?>">Home</a></li>
        <li role="presentation"><a href="#">Insert Contact</a></li>
    </ul>
    <!-- ./menu bar -->
    
    <!-- search box -->
    <br/><br/>
    <div class="relative">
    <form action="<?php echo base_url('index.php/co_contact/search')?>" method="post">
        <div class="col-md-2"></div>
        <div class="col-md-3">
            <span><b> Search By &nbsp;</b></span>
            <input type="radio" name="type" value="name"> Name &nbsp; 
            <input type="radio" name="type" value="job"> Job  &nbsp;
            <input type="radio" name="type" value="company"> company
        </div>
        <div class="input-group col-md-4">
            <input type="text" name="key" class="form-control" placeholder="Enter key" required autofocus>
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Search!</button>
            </span>
        </div>
    </form>
    </div>
    <!-- ./search box -->
    <div class="col-md-5">
        <a class="btn btn-default" href="<?php echo base_url('index.php/Welcome')?>" role="button">See All</a>
    </div>
    <div class="col-md-2">
        <?php
        if($key != FALSE){
        echo $key.' '.count($data) ?> results
        <?php
        }
        ?>
    </div>
    <div class="col-md-5"></div>
    <!-- contact list -->
    <br/><br/>
    <div class="relative contact_list">
        <table class="table">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Company</th>
                <th>Job</th>
                <th>Rate</th>
                <th>View</th>
                <th>edit</th>
            </tr>
            <?php 
            $i = 0;
            foreach ($data as $row) {
              $i = $i+1;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row->first_name.' '.$row->last_name; ?></td>
                <td><?php echo $row->company; ?></td>
                <td><?php echo $row->job; ?></td>
                <td>
                    <span>5</span>
                </td>
                <td><a href="#"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                <td><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <!-- ./contact list -->
    <!-- pagination -->
    <br/><br/>
    <div>
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
    <!-- ./pagination -->
    <div class="col-md-8 footer"></div>
</body>
</html>