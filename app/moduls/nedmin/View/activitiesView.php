

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Etkinlikler</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Etkinlik Fotoğrafı</th>
                <th>Etkinlik Yapan Klüp</th>
                <th>Etkinlik Adı</th>
                <th>Etkinlik Tarihi</th>
                <th>Etkinlik Yeri</th>
                <th>Aktiflik</th>
                <th>Katılımcılar</th>
                <th>Yorumlar</th>
                <th>Düzenle</th>
                <th>Sil</th>

            </tr>
            </thead>

            <tbody id="sortable">
            <?php
            foreach ($data['activities'] as $act) : ?>

            <tr id="item-<?php echo $act['id'] ?>">
                <td><img width="100" src="/images/activities/<?php echo $act['activities_file']; ?>" alt=""></td>

                <td>
                    <?php
                    $title="";
                    $tempid=0;
                    foreach ($data['clubs'] as $club):
                        if ($club['id'] == $act['id_club']) {
                            $title=$title.$club['clubs_name'];
                            $tempid=$club['id_univercity'];
                            break;
                        }endforeach;
                        foreach ($data['univercities'] as $un):
                        if($tempid == $un['id']){
                            $title=$title."-". $un['univercities_name'];
                            echo $title;
                            break;
                        }
                    endforeach;
                        ?>
                </td>

                <td><?php echo $act['activities_title']; ?></td>
                <td><?php echo $act['activities_time']; ?></td>
                <td><?php echo $act['activities_location']; ?></td>
                <td><?php echo $act['activities_active']; ?></td>

                <td width="10"><a href="/nedmin/activities/comments/<?php echo $act['id']; ?>"><i
                            class="fa fa-user-o"></i></a></td>
                <td width="10"><a href="/nedmin/activities/comments/<?php echo $act['id']; ?>"><i
                                class="fa fa-comment-o"></i></a></td>
                <td width="10"><a href="/nedmin/activities/update/<?php echo $act['id']; ?>"><i
                            class="fa fa-pencil-square-o"></i></a></td>
                <td width="10"><a href="/nedmin/activities/delete/<?php echo $act['id']; ?>"><i
                            class="fa fa-trash-o"></i></a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->

</div>


