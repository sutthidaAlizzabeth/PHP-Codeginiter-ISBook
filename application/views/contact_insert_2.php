<html>
<head>
    <title>IS Book::Insert Contact</title>
    <?php $this->load->view('head.php') ?>
</head>
<body>
    <!-- header -->
    <?php $this->load->view('header.php') ?>
    <!-- ./header -->
    
    <!-- insert box -->
    <div id="insert">
        <form action="<?php echo base_url('index.php/co_contact/insert_namecard') ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?php echo $data ?>" >
            <div class="col-md-4 line">
                <b>2. เพิ่มรูป</b>
            </div>
            <br/> <br/>
            <!-- line1 -->
            <div class="col-md-8 line gap">
                <b>รูปนามบัตร</b>
                <input type="file" name="url_namecard" id="url_namecard">
            </div>
            <!-- line2 -->
            <div class="col-md-8 line gap">
                <input type="submit" class="btn btn-success" style="float:right;">
            </div>
        </form>
    </div>
    <!-- ./contact list -->
    <div class="col-md-8 footer"></div>
</body>
</html>