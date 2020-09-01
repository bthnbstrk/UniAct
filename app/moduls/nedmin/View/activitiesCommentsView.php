<?php extract($data['activities']);

?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Aktivite Detayları</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form>

            <div class="form-group">
                <label>Yüklü Resim</label>
                <div class="row">
                    <div class="col-xs-12">
                        <img width="150" src="/images/activities/<?php echo $activities_file; ?>">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label>Aktivite Başlığı</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="activities_title" disabled
                               value="<?php echo $activities_title; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Aktivite Açıklaması</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="activities_title" disabled
                               value="<?php echo $activities_description; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Aktivite Zamanı</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="activities_title" disabled
                               value="<?php echo $activities_time; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Aktivite Lokasyonu</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="activities_title" disabled
                               value="<?php echo $activities_location; ?>">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label>Aktivite Ücreti</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="activities_title" disabled
                               value="<?php
                               if ($activities_price > 0) {
                                   echo $activities_price;
                               } else {
                                   echo "Ücretsiz";
                               }
                               ?>">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label>Aktivite Ek Not</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="activities_title" disabled
                               value="<?php echo $activities_note; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Katılımcılar</label>
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Adı Soyadı</th>
                            <th scope="col">Üniversite</th>
                            <th scope="col">Yorumu</th>
                            <th>Etkinleştir</th>
                            <th>Sil</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        foreach ($data['comments'] as $com):
                        foreach ($data['users'] as $user):
                            if($com['id_user'] == $user['id'] ){
                        foreach ($data['univercities'] as $uni):
                        if ($user['id_univercity'] == $uni['id']){
                        ?>

                        <tr>
                            <td><?php echo $user['full_name']; ?></td>
                            <td><?php echo $uni['univercities_name']; ?></td>
                            <td><?php echo $com['comment']; ?></td>
                            <td width="10"><a href="/nedmin/activities/update/<?php echo ""; ?>"><i
                                            class="fa fa-pencil-square-o"></i></a></td>
                            <td width="10"><a href="/nedmin/activities/delete/<?php echo ""; ?>"><i
                                            class="fa fa-trash-o"></i></a></td>
                            <?php }
                            endforeach;
                            }
                        endforeach;
                        endforeach;

                        ?>



                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </form>
    </div>
</div>


