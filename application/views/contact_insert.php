<html>
<head>
    <title>IS Book::Insert Contact</title>
    <?php include "head.php"; ?>
</head>
<body>
    <!-- header -->
    <?php include "header.php"; ?>
    <!-- ./header -->

    <!-- menu bar -->
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation"><a href="#">Home</a></li>
        <li role="presentation" class="active"><a href="#">Insert Contact</a></li>
    </ul>
    <!-- ./menu bar -->
    
    <!-- insert box -->
    <div id="insert">
        <form action="" method="post">
            <!-- line1 -->
            <div class="col-md-4 line">
                <b>ชื่อจริง</b>
                <input class="input" type="text" name="first_name">
            </div>
            <div class="col-md-4">
                <b>นามสกุล</b>
                <input class="input" type="text" name="last_name">
            </div>
            <!-- line2 -->
            <div class="col-md-4 line gap">
                <b>บริษัท</b>
                <input class="input" type="text" name="company">
            </div>
            <div class="col-md-4 gap">
                <b>เว็บไซต์บริษัท</b>
                <input class="input" type="text" name="url">
            </div>
            <!-- line3 -->
            <div class="col-md-8 line gap">
                <b>รายละเอียดงาน</b>
                <textarea class="input" name="job_description" rows="4"></textarea>
            </div>
            <!-- line4 -->
            <div class="col-md-4 line gap">
                <b>ตำแหน่ง/หน้าที่</b>
                <input class="input" type="text" name="job">
            </div>
            <div class="col-md-4 gap">
                <b>E-mail</b>
                <input class="input" type="text" name="email">
            </div>
            <!-- line5 -->
            <div class="col-md-4 line gap">
                <b>เบอร์มือถือ</b>
                <input class="input" type="text" name="mobile">
            </div>
            <div class="col-md-4 gap">
                <b>เบอร์โทรศัพท์</b>
                <input class="input" type="text" name="telephone">
            </div>
            <!-- line6 -->
            <div class="col-md-4 line gap">
                <b>Fax</b>
                <input class="input" type="text" name="fax">
            </div>
            <div class="col-md-4 gap">
                <b>รหัสไปรษณีย์</b>
                <input class="input" type="text" name="postcode">
            </div>
            <!-- line7 -->
            <div class="col-md-8 line gap">
                <b>ที่อยู่</b>
                <textarea class="input" name="address" rows="4"></textarea>
            </div>
            <!-- line8 -->
            <div class="col-md-4 line gap">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
            </div>
            <div class="col-md-4 gap">
                <input type="submit" class="btn btn-success" style="float:right;">
            </div>
        </form>
    </div>
    <!-- ./contact list -->
    <div class="col-md-8 footer"></div>
</body>
</html>