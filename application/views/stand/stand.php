<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" style="width: 150px; height: 150px; object-fit: cover;" src="<?=is_null($row->photo) ? site_url('assets/img/profil/picture.jpg')  : 'assets/img/profil/'.$row->photo;?>" alt="User profile picture" >
           
            <h3 class="profile-username text-center"><?=$row->nama?></h3>
           
            
            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i> Prestasi</strong>

                <?php
                foreach($prestasi as $key=>$row){
                ?>
                <p class="text-muted">
                    <?=$row->prestasi?> - Tahun <?=$row->tahun?>
                </p>
                <?php
                }
                ?>
                <hr>

                <strong><i class="fa fa-book margin-r-5"></i> Exhibition</strong>

                <?php
                foreach($exhibition as $key=>$row){
                ?>
                <p class="text-muted">
                    <?=$row->exhibition?> - Tahun <?=$row->tahun?>
                </p>
                <?php
                }
                ?>
                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                <p class="text-muted"><?=$row->alamat?></p>

                <hr>

                <strong><i class="fa fa-pencil margin-r-5"></i> Social Media</strong>

                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Instagram</a></li>
                </ul>

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
                <div class="active tab-pane timeline-body" id="images" style="text-align: center">
                <?php foreach($karya as $key=>$data) {?>
                    <img class="gambar" style="height: 240px; margin: 3px; cursor: pointer;" data-toggle="modal" data-target="#modal" data-gambar="<?=site_url('assets/img/karya/'.$data->gambar)?>" data-karya="<?=$data->karya?>" src="<?=site_url('assets/img/karya/'.$data->gambar)?>" alt="">
                <?php } ?>
                </div>
                <div class="tab-pane" id="videos">
                    <div class="video">
                        
                    </div>
                </div>
                <div class="tab-pane" id="texts">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?=$data->karya?></h4>
        </div>
        <div class="modal-body">
            <img src="" alt="" style="width: 100%">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
            image.setAttribute('src', $(this).data('gambar'));
</div>
<!-- /.modal -->
<script>
    const gambar = document.querySelectorAll('.gambar');
    for(let i = 0; i < gambar.length; i++){
        gambar[i].addEventListener('click', function(){
            let image = document.querySelector('.modal-body img');
            image.setAttribute('src', $(this).data('gambar'));
            console.log(image)
        })
    }
</script>