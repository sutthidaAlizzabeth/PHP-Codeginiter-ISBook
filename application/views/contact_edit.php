<html>
<head>
    <title>IS Book::Edit Contact</title>
    <?php include "head.php"; ?>
</head>
<body>
    <!-- header -->
    <?php include "header.php"; ?>
    <!-- ./header -->

    <!-- menu bar -->
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation"  class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Insert Contact</a></li>
    </ul>
    <!-- ./menu bar -->
    
    <!-- insert box -->
    <div id="insert">
        <form action="" method="post">
            <!-- line1 -->
            <div class="col-md-4 line">
                <b>ชื่อจริง</b>
                <input class="input" type="text" name="first_name" value="สุทธิดา">
            </div>
            <div class="col-md-4">
                <b>นามสกุล</b>
                <input class="input" type="text" name="last_name" value="ชลพานิชกุล">
            </div>
            <!-- line2 -->
            <div class="col-md-4 line gap">
                <b>บริษัท</b>
                <input class="input" type="text" name="company" value="SIT KMUTT">
            </div>
            <div class="col-md-4 gap">
                <b>เว็บไซต์บริษัท</b>
                <input class="input" type="text" name="url" value="www.sit.kmutt.ac.th">
            </div>
            <!-- line3 -->
            <div class="col-md-8 line gap">
                <b>รายละเอียดงาน</b>
                <textarea class="input" name="job_description" rows="4" value="จิปาถะ"></textarea>
            </div>
            <!-- line4 -->
            <div class="col-md-4 line gap">
                <b>ตำแหน่ง/หน้าที่</b>
                <input class="input" type="text" name="job" value="นักศึกษา">
            </div>
            <div class="col-md-4 gap">
                <b>E-mail</b>
                <input class="input" type="text" name="email" value="snr308@gmail.com">
            </div>
            <!-- line5 -->
            <div class="col-md-4 line gap">
                <b>เบอร์มือถือ</b>
                <input class="input" type="text" name="mobile" value="0823370854">
            </div>
            <div class="col-md-4 gap">
                <b>เบอร์โทรศัพท์</b>
                <input class="input" type="text" name="telephone" value="">
            </div>
            <!-- line6 -->
            <div class="col-md-4 line gap">
                <b>Fax</b>
                <input class="input" type="text" name="fax" value="">
            </div>
            <div class="col-md-4 gap">
                <b>รหัสไปรษณีย์</b>
                <input class="input" type="text" name="postcode" value="10140">
            </div>
            <!-- line7 -->
            <div class="col-md-8 line gap">
                <b>ที่อยู่</b>
                <textarea class="input" name="address" rows="4" value="พุทธบูชา กรุงเทพ"></textarea>
            </div>
            <!-- line8 -->
            <div class="col-md-8 line gap">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
            </div>
            <!-- line9 -->
            <div class="col-md-8 line gap">
                <input type="submit" class="btn btn-success" style="float:right;">
            </div>
            <!-- line10 -->
            <a target="_blank" href="<?php echo base_url('assets/image/0.png') ?>">
                <img class="col-md-4 line gap" src="<?php echo base_url('assets/image/0.png') ?>" alt="">
            </a>
        </form>
    </div>
    <!-- ./contact list -->
    <div class="col-md-8 footer"></div>
</body>
</html>