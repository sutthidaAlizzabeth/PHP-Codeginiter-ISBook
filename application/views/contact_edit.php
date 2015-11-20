<html>
<head>
    <title>IS Book::Edit Contact</title>
    <?php $this->load->view('head.php') ?>
</head>
<body>
    <!-- header -->
    <?php $this->load->view('header.php') ?>
    <!-- ./header -->
    
    <!-- insert box -->
    <div id="insert">
        <div>
            <form action="<?php echo base_url('index.php/co_contact/update_contact'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data->id ?>">
                <!-- line1 -->
                <div class="col-md-8 line gap">
                    
                </div>
                <div class="col-md-4 gap line">
                    <b>ชื่อจริง</b>
                    <input class="input" type="text" name="first_name" value="<?php echo $data->first_name ?>">
                </div>
                <div class="col-md-4 gap">
                    <b>นามสกุล</b>
                    <input class="input" type="text" name="last_name" value="<?php echo $data->last_name ?>">
                </div>
                <!-- line2 -->
                <div class="col-md-4 line gap">
                    <b>บริษัท</b>
                    <input class="input" type="text" name="company" value="<?php echo $data->company ?>">
                </div>
                <div class="col-md-4 gap">
                    <b>เว็บไซต์บริษัท</b>
                    <input class="input" type="text" name="url" value="<?php echo $data->url_web ?>">
                </div>
                <!-- line3 -->
                <div class="col-md-8 line gap">
                    <b>รายละเอียดงาน</b>
                    <textarea class="input" name="job_description" rows="4"><?php echo $data->job_description ?></textarea>
                </div>
                <!-- line4 -->
                <div class="col-md-4 line gap">
                    <b>ตำแหน่ง/หน้าที่</b>
                    <input class="input" type="text" name="job" value="<?php echo $data->job ?>">
                </div>
                <div class="col-md-4 gap">
                    <b>E-mail</b>
                    <input class="input" type="text" name="email" value="<?php echo $data->email ?>">
                </div>
                <!-- line5 -->
                <div class="col-md-4 line gap">
                    <b>เบอร์มือถือ</b>
                    <input class="input" type="text" name="mobile" value="<?php echo $data->mobile ?>">
                </div>
                <div class="col-md-4 gap">
                    <b>เบอร์โทรศัพท์</b>
                    <input class="input" type="text" name="telephone" value="<?php echo $data->telephone ?>">
                </div>
                <!-- line6 -->
                <div class="col-md-4 line gap">
                    <b>Fax</b>
                    <input class="input" type="text" name="fax" value="<?php echo $data->fax ?>">
                </div>
                <div class="col-md-4 gap">
                    <b>รหัสไปรษณีย์</b>
                    <input class="input" type="text" name="postcode" value="<?php echo $data->postcode ?>">
                </div>
                <!-- line7 -->
                <div class="col-md-8 line gap">
                    <b>ที่อยู่</b>
                    <textarea class="input" name="address" rows="4"><?php echo $data->address ?></textarea>
                </div>
                <!-- line8 -->
                <!-- imag -->
                <div>
                <div class="col-md-8 line gap">
                    <hr/>
                </div>
                <div class="col-md-8 line gap">
                    <label for="url_namecard">File input</label>
                    <input type="file" name="url_namecard" id="url_namecard">
                </div>
                <a target="_blank" href="<?php echo base_url('assets/image/'.$data->url_namecard) ?>" >
                    <img class="col-md-4 line gap" src="<?php echo base_url('assets/image/'.$data->url_namecard) ?>">
                </a>
            </div>
                <!-- .imag -->
                
                <div class="col-md-8 line gap">
                    <input type="submit" class="btn btn-success" style="float:right;">
                </div>
            </form>
        </div>
    </div>
    <!-- ./contact list -->
    <div class="col-md-8 footer"></div>
</body>
</html>