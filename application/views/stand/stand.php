<section class="content-header">
    <h1>
    Stand Pameran
    <small>Pameran Virtual 1.0</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Stand Pameran</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?=base_url()?>assets/img/picture.jpg" alt="User profile picture">

            <h3 class="profile-username text-center"><?=$this->session->userdata('nama')?></h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                <p>
                    <span class="label label-danger">UI Design</span>
                    <span class="label label-success">Coding</span>
                    <span class="label label-info">Javascript</span>
                    <span class="label label-warning">PHP</span>
                    <span class="label label-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

            </div>
        </div>
    </div>
    
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#images" data-toggle="tab">Image</a></li>
                <li><a href="#videos" data-toggle="tab">Video</a></li>
                <li><a href="#texts" data-toggle="tab">Text</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="images">
                    <style>
                        a {
                            color: #FFF;
                        }
                        a:hover {
                            color: yellow;
                            text-decoration: underline;
                        }
                        .thumbnails img {
                            height: 50px;
                            border: 4px solid #555;
                            padding: 1px;
                            margin: 0 10px 10px 0;
                        }

                        .thumbnails img:hover {
                            border: 4px solid #00ccff;
                            cursor:pointer;
                        }

                        .preview img {
                            border: 4px solid #444;
                            padding: 1px;
                            width: 800px;
                        }
                    </style>
                    <div class="thumbnails">
                        <img onmouseover="preview.src=img1.src" name="img1" src="<?php echo base_url();?>assets/img/photo1.png" alt=""/>
                        <img onmouseover="preview.src=img2.src" name="img2" src="<?php echo base_url();?>assets/img/photo2.png" alt=""/>
                        <img onmouseover="preview.src=img3.src" name="img3" src="<?php echo base_url();?>assets/img/photo3.jpg" alt=""/>
                        <img onmouseover="preview.src=img4.src" name="img4" src="<?php echo base_url();?>assets/img/photo4.jpg" alt=""/>
                        <img onmouseover="preview.src=img11.src" name="img11" src="<?php echo base_url();?>assets/img/photo5.jpg" alt=""/>
                        <img onmouseover="preview.src=img12.src" name="img12" src="<?php echo base_url();?>assets/img/photo6.jpg" alt=""/>
                        <img onmouseover="preview.src=img5.src" name="img5" src="<?php echo base_url();?>assets/img/photo1.png" alt=""/>
                        <img onmouseover="preview.src=img6.src" name="img6" src="<?php echo base_url();?>assets/img/photo2.png" alt=""/>
                        <img onmouseover="preview.src=img7.src" name="img7" src="<?php echo base_url();?>assets/img/photo3.jpg" alt=""/>
                        <img onmouseover="preview.src=img8.src" name="img8" src="<?php echo base_url();?>assets/img/photo4.jpg" alt=""/>
                        <img onmouseover="preview.src=img9.src" name="img9" src="<?php echo base_url();?>assets/img/photo1.png" alt=""/>
                        <img onmouseover="preview.src=img10.src" name="img10" src="<?php echo base_url();?>assets/img/photo2.png" alt=""/>
                    </div><br/>

                    <div class="preview" align="center">
                        <img name="preview" src="<?php echo base_url();?>assets/img/photo1.png" alt=""/>
                    </div>
                </div>
                <div class="tab-pane" id="videos">
                   Videos
                </div>
                <div class="tab-pane" id="texts">
                    Texts
                </div>
            </div>
        </div>
    </div>
</div>
</section>