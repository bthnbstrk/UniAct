<div style="display:none" id="insertForm" class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Bölüm ekle</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="/nedmin/departments/insert/departmentsInsertOp" method="post" >


            <div class="form-group">
                <label>Başlık</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="departments_name" required >
                    </div>
                </div>
            </div>


            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="departments_insert">Kaydet</button>
            </div>

        </form>


    </div>
    <!-- /.box-body -->

</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Bölümler</h3>
        <div align="right">
            <button id="insertFormShow" class="btn btn-success">Ekle</button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Başlık</th>
                <th></th>
                <th></th>
            </tr>
            </thead>

            <tbody id="sortable">

            <?php
            foreach ($data['department'] as $department) : ?>

                <tr id="item-<?php echo $department['id'] ?>">
                    <td class="sortable"><?php echo $department['departments_name']; ?></td>
                    <td width="10"><a href="/nedmin/departments/update/<?php echo $department['id'];?>"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td width="10"><a href="/nedmin/departments/delete/<?php echo $department['id'];?>"><i class="fa fa-trash-o"></i></a></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->

</div>


