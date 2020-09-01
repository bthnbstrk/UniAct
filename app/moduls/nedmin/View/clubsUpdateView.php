<?php extract($data['clubsUpdate']); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Klüp Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form action="/nedmin/clubs/update/clubsUpdateOp" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Yüklü Resim</label>
                <div class="row">
                    <div class="col-xs-12">
                        <img width="150" src="/images/clubs/<?php echo $clubs_file; ?>" alt="Admin Profil Foto">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Resim Seç</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="file" name="clubs_file">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Başlık</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="clubs_name" value="<?php echo $clubs_name; ?>" required >
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label>Aktiflik Durumu</label>
                <div class="row">
                    <div class="col-xs-12">
                        <select class="form-control" name="clubs_active">
                            <?php
                            echo $clubs_active;
                            if($clubs_active){ ?>
                                <option value="1">  <?php echo $clubs_active; ?></option>
                                <option value="0">0</option>
                           <?php }else{ ?>
                                <option value="0"><?php echo $clubs_active; ?></option>
                                <option value="1">1</option>
                           <?php } ?>
                        </select>
                    </div>
                </div>
            </div>


            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="delete_file" value="<?php echo $clubs_file; ?>">


            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="clubs_update">Düzenle</button>
            </div>

        </form>
    </div>
    <!-- /.box-body -->

</div>
