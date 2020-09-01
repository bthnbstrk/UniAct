<div style="display:none" id="insertForm" class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Fakülte ekle</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="/nedmin/faculties/insert/facultiesInsertOp" method="post">


            <div class="form-group">
                <label>Fakülte Adı</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="faculties_name" placeholder="Fakülte adı giriniz." required >
                    </div>
                </div>
            </div>

            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="faculties_insert">Kaydet</button>
            </div>

        </form>


    </div>
    <!-- /.box-body -->

</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Fakülteler</h3>
        <div align="right">
            <button id="insertFormShow" class="btn btn-success">Ekle</button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Fakülte Adı</th>
                <th></th>
                <th></th>
            </tr>
            </thead>

            <tbody id="sortable">

            <?php
            foreach ($data['faculties'] as $faculty) : ?>

                <tr id="item-<?php echo $faculty['id'] ?>">
                    <td class="sortable"><?php echo $faculty['faculties_name']; ?></td>
                    <td width="10"><a href="/nedmin/faculties/update/<?php echo $faculty['id'];?>"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td width="10"><a href="/nedmin/faculties/delete/<?php echo $faculty['id'];?>"><i class="fa fa-trash-o"></i></a></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->

</div>


