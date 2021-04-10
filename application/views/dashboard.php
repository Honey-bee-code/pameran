<!-- Main content -->
<section class="content">
    <div class="container" style="background-color: white;">
        <h1>Data Exhibitor</h1>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach($row->result() as $key=>$data){?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data->nama?></td>
                        <td><?=$data->alamat?></td>
                        <td><a type="button" href="<?=site_url('stand?id='.$data->exhibitor_id)?>">To My Gallery</a></td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>