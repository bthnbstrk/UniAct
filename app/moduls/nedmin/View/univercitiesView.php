<div style="display:none" id="insertForm" class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Üniversite ekle</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="/nedmin/univercities/insert/univercitiesInsertOp" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Resim Seç</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" required type="file" name="univercities_file">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Üniversite</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="univercities_name" required >
                    </div>
                </div>
            </div>



            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="univercities_insert">Kaydet</button>
            </div>

        </form>


    </div>
    <!-- /.box-body -->

</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Üniversiteler</h3>
        <div align="right">
            <button id="insertFormShow" class="btn btn-success">Ekle</button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Logo</th>
                <th>Üniversite</th>
                <th></th>
            </tr>
            </thead>

            <tbody id="sortable">
            <?php
            foreach ($data['univercity'] as $univercity) : ?>

                <tr id="item-<?php echo $univercity['id'] ?>">
                    <td ><img width="100" src="/images/univercities/<?php echo $univercity['univercities_file']; ?>" alt=""></td>
                    <td><?php echo $univercity['univercities_name']; ?></td>
                    <td width="10"><a href="/nedmin/univercities/update/<?php echo $univercity['id'];?>"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td width="10"><a href="/nedmin/univercities/delete/<?php echo $univercity['id'];?>"><i class="fa fa-trash-o"></i></a></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->

</div>


