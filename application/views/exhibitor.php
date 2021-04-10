<!-- Main content -->
<section class="content">
    <div class="container">
        <h1>Exhibitor Personal Page</h1>
        <div class="row">
            <div class="col-sm-6">
                <form action="" class="form">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-2" for="nama">Nama</label>
                            <div class="col-sm-10">
                                <span class="edit"><?=$row->nama?></span>
                                <span class="pull-right edit edit-button" style="cursor: pointer; color: blue;">Edit</span>
                                <input type="text" class="form-control edit hidden" name="nama">
                                <input type="submit" class="btn btn-default btn-flat edit hidden" id="submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    const editBtn = document.getElementsByClassName('edit-button');
    const edit = document.getElementsByClassName('edit');
    for(let i = 0; i < editBtn.length; i++){
        editBtn[i].addEventListener('click', function(){
            for(let e = 0; e < edit.length; e++){
                edit[e].classList.toggle('hidden')
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