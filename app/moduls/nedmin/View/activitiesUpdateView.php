<?php extract($data['activitiesUpdate']); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Yönetici Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form action="/nedmin/activities/update/activitiesUpdateOp" method="post" >


            <div class="form-group">
                <label>Aktivite Başlığı</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="activities_title" required
                               value="<?php echo $activities_title; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Aktiflik Durumu</label>
                <div class="row">
                    <div class="col-xs-12">
                        <select class="form-control" name="activities_active">
                            <?php
                            if($activities_active){ ?>
                                <option value="1">  <?php echo $activities_active; ?></option>
                                <option value="0">0</option>
                            <?php }else{ ?>
                                <option value="0"><?php echo $activities_active; ?></option>
                                <option value="1">1</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>


            <input type="hidden" name="id" value="<?php echo $id; ?>">


            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="activities_update">Düzenle</button>
            </div>

        </form>
    </div>
    <!-- /.box-body -->

</div>
