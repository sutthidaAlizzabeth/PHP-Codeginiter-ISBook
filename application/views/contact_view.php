<html>
<head>
    <title>IS Book::Contact</title>
    <?php $this->load->view('head.php') ?>
</head>
<body>
    <!-- header -->
    <?php $this->load->view('header.php') ?>
    <!-- ./header -->

    <!-- contact box -->
    <div id="insert">
        <form action="" method="post">
            <!-- line1 -->
            <div class="col-md-4 line">
                <b>ชื่อจริง </b>
                <span><?php echo $data->first_name ?></span>
            </div>
            <div class="col-md-4">
                <b>นามสกุล</b>
                <span><?php echo $data->last_name ?></span>
            </div>
            <!-- line2 -->
            <div class="col-md-4 line gap">
                <b>บริษัท</b>
                <span><?php echo $data->company ?></span>
            </div>
            <div class="col-md-4 gap">
                <b>เว็บไซต์บริษัท</b>
                <span><?php echo $data->url_web ?></span>
            </div>
            <!-- line3 -->
            <div class="col-md-8 line gap">
                <b>รายละเอียดงาน</b><br/>
                <span><?php echo $data->job_description ?></span>
            </div>
            <!-- line4 -->
            <div class="col-md-4 line gap">
                <b>ตำแหน่ง/หน้าที่</b>
                <span><?php echo $data->job ?></span>
            </div>
            <div class="col-md-4 gap">
                <b>E-mail</b>
                <span><?php echo $data->email ?></span>
            </div>
            <!-- line5 -->
            <div class="col-md-4 line gap">
                <b>เบอร์มือถือ</b>
                <span><?php echo $data->mobile ?></span>
            </div>
            <div class="col-md-4 gap">
                <b>เบอร์โทรศัพท์</b>
                <span><?php echo $data->telephone ?></span>
            </div>
            <!-- line6 -->
            <div class="col-md-4 line gap">
                <b>Fax</b>
                <span><?php echo $data->fax ?></span>
            </div>
            <div class="col-md-4 gap">
                <b>รหัสไปรษณีย์</b>
                <span><?php echo $data->postcode ?></span>
            </div>
            <!-- line7 -->
            <div class="col-md-8 line gap">
                <b>ที่อยู่</b><br/>
                <span><?php echo $data->address ?></span>
            </div>
            <!-- line8 -->
            <a target="_blank" href="<?php echo base_url('assets/image/'.$data->url_namecard) ?>">
                <img class="col-md-6 line gap" src="<?php echo base_url('assets/image/'.$data->url_namecard) ?>">
            </a>
        </form>
    </div>
    <!-- ./contact box -->
    <!-- average rate -->
    <div class="col-md-8 line">
        <b>Rate </b>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <br/>
        <hr/>
    </div>
    <!-- ./average rate -->
    <!-- feedback box -->
    <div class="col-md-8 line">
        <div class="gap">
            <b>ความพึงพอใจ (จำเป็นต้องเลือก)</b>
            <input type="radio" name="level" value="5"> มากที่สุด &nbsp;
            <input type="radio" name="level" value="4"> มาก &nbsp;
            <input type="radio" name="level" value="3"> ดี &nbsp;
            <input type="radio" name="level" value="2"> พอใจ &nbsp;
            <input type="radio" name="level" value="1"> แย่ &nbsp;
        </div>
        <br/>
        <div class="gap">
            <b>Feedback (ถ้ามี)</b>
            <textarea class="input" name="feedback" rows="4"></textarea>
        </div>
        <div class="line gap">
            <input type="submit" class="btn btn-success" style="float:right;">
        </div>
        <br/>
    </div>
    <!-- ./feedback box -->
    <!-- show feedback -->
    <div class="col-md-4 line gap">
        <b>วันที่:</b>
        <span>Nov 04 2014 11:45 PM </span>
        <b>ผู้ลงข้อมูล: </b>
        <span>สุทธิดา</span>
    </div>
    <div class="col-md-4">
        <b>Rate </b>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
    </div>
    <div class="col-md-6 line gap">
        <span>ทำงานดีมากๆ</span>
        <hr/>
    </div>

    <div class="col-md-4 line gap">
        <b>วันที่:</b>
        <span>Nov 04 2014 11:45 PM </span>
        <b>ผู้ลงข้อมูล: </b>
        <span>สุทธิดา</span>
    </div>
    <div class="col-md-4">
        <b>Rate </b>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
    </div>
    <div class="col-md-6 line gap">
        <span>ทำงานดีมากๆ</span> 
        <hr/>
    </div>
    <!-- ./show feedback -->
    <div class="col-md-8 footer"></div>
</body>
</html>