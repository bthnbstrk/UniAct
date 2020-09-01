<?php extract($data['departmentsUpdate']); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Bölüm Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form action="/nedmin/departments/update/departmentsUpdateOp" method="post">


            <div class="form-group">
                <label>Başlık</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="departments_name" value="<?php echo $departments_name; ?>" required >
                    </div>
                </div>
            </div>


            <input type="hidden" name="id" value="<?php echo $id; ?>">


            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="departments_update">Düzenle</button>
            </div>

        </form>
    </div>
    <!-- /.box-body -->

</div>
