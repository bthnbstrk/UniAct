<?php extract($data['univercitiesUpdate']); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Üniversite Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form action="/nedmin/univercities/update/univercitiesUpdateOp" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Yüklü Resim</label>
                <div class="row">
                    <div class="col-xs-12">
                        <img width="150" src="/images/univercities/<?php echo $univercities_file; ?>" alt="Admin Profil Foto">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Resim Seç</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="file" name="univercities_file">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Başlık</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="univercities_name" value="<?php echo $univercities_name; ?>" required >
                    </div>
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="delete_file" value="<?php echo $univercities_file; ?>">


            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="univercities_update">Düzenle</button>
            </div>

        </form>
    </div>
    <!-- /.box-body -->

</div>
