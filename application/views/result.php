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
    <!-- result box -->
    <div id="insert">
        <div class="col-md-4"></div>
        <div class="box col-md-4 jumbotron">
            <h1 class="text-center"><?php echo $message ?></h1>
            <br/>
            <a href="<?php echo base_url('index.php/co_contact/edit_contact/'.$id) ?>">
                <h5 class="text-center">กลับไปหน้าแก้ไข</h5>
            </a>
            <a href="<?php echo base_url('index.php/co_contact/single_contact/'.$id) ?>">
                <h5 class="text-center">ดูข้อมูล</h5>
            </a>
        </div>
    </div>
    <!-- ./result box -->
</body>
</html>