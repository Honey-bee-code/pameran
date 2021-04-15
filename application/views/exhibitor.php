<!-- Main content -->
<section class="content">
    <div class="container">
        <h1>Exhibitor Personal Page</h1>
        <div class="row">
            <div class="col-sm-4">
                <form action="<?=site_url('exhibitor/edit')?>" enctype="multipart/form-data" method="POST" class="form">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-2" for="nama">Nama</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" value="<?=$row->exhibitor_id?>">
                                <span class="edit"><?=$row->nama?></span>
                                <input type="text" value="<?=$row->nama?>" class="form-control edit hidden" name="nama">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-2" for="alamat">Alamat</label>
                            <div class="col-sm-10">
                                <span class="edit"><?=$row->alamat?></span>
                                <input type="text" value="<?=$row->alamat?>" class="form-control edit hidden" name="alamat">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-default pull-right btn-flat edit hidden" id="submit">
                </form>
                <span class="pull-right edit edit-button" style="cursor: pointer; color: blue;">Edit</span>
            </div>
        </div>
    </div>
</section>

<script>
    const editBtn = document.getElementsByClassName('edit-button');
    const edit = document.getElementsByClassName('edit');
    const nama = document.getElementById('nama');
    for(let i = 0; i < editBtn.length; i++){
        editBtn[i].addEventListener('click', function(){
            for(let e = 0; e < edit.length; e++){
                edit[e].classList.toggle('hidden');
            }
        })
    };
    const submit = document.querySelector('#submit');
    submit.addEventListener('click', function(){
        for(let i = 0; i < edit.length; i++){
            edit[i].classList.toggle('hidden')
        }
    })
    
</script>