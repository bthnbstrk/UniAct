<div style="display:none" id="insertForm" class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Klüp ekle</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="/nedmin/clubs/insert/clubsInsertOp" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Resim Seç</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" required type="file" name="clubs_file">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Üniversite</label>
                <div class="row">
                    <div class="col-xs-12">
                        <select class="form-control" name="id_univercity">
                            <?php
                            foreach ($data['univercity'] as $univ):?>
                            <option value="<?php echo $univ['id']; ?>">
                                <?php echo $univ['univercities_name']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <label>Klüp Adı</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="clubs_name" required>
                    </div>
                </div>
            </div>


            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="clubs_insert">Kaydet</button>
            </div>

        </form>


    </div>
    <!-- /.box-body -->

</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Klüpler</h3>
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
                <th>Klüp Adı</th>
                <th>Aktif</th>
                <th></th>
                <th></th>

            </tr>
            </thead>

            <tbody id="sortable">
            <?php foreach ($data['clubs'] as $club) : ?>

                <tr id="item-<?php echo $club['id'] ?>">
                    <td><img width="100" src="/images/clubs/<?php echo $club['clubs_file']; ?>" alt=""></td>

                    <td>
                        <?php
                        foreach ($data['univercity'] as $univ):
                            if ($univ['id'] == $club['id_univercity']) {
                                echo $univ['univercities_name'];
                           }endforeach; ?>
                    </td>

                    <td><?php echo $club['clubs_name']; ?></td>
                    <td><?php echo $club['clubs_active']; ?></td>
                    <td width="10"><a href="/nedmin/clubs/update/<?php echo $club['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td width="10"><a href="/nedmin/clubs/delete/<?php echo $club['id']; ?>"><i class="fa fa-trash-o"></i></a></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->

</div>


