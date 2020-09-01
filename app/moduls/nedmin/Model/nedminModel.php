<?php

class nedminModel extends mainModel
{
    public function indexModel()
    {

    }

    public function loginControl()
    {

        $sonuc = $this->db->adminsLogin(
            htmlspecialchars($_POST['admins_username']),
            htmlspecialchars($_POST['admins_pass']),
            $_POST['remember_me']
        );
        return $sonuc;
    }

    public function logout()
    {
        $this->nedminLogout();
    }

    public function settings()
    {
        $sql = $this->db->read("settings",
            [
                "columns_name" => "settings_must",
                "columns_sort" => "ASC"
            ]);

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function settingsUpdate($settings_id)
    {
        $sql = $this->db->wread("settings", "settings_id", $settings_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function settingsUpdateOp()
    {


        $sql = $this->db->update("settings", $_POST, [
                "form_name" => "settings_update",
                "columns" => "settings_id",
                "dir" => "settings",
                "file_name" => "settings_value",
                "file_delete" => "delete_file",

            ]
        );

        return $sql;
    }


    public function admins()
    {
        $sql = $this->db->read("admins",
            [
                "columns_name" => "admins_must",
                "column_sort" => "ASC"
            ]
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adminsSortable()
    {
        $sql = $this->db->orderUpdate("admins", $_POST['item'], "admins_must", "admins_id");
        echo $sql['status'];
    }

    public function adminsUpdate($admins_id)
    {
        $sql = $this->db->wread("admins", "admins_id", $admins_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function adminsUpdateOp()
    {

        $sql = $this->db->update("admins", $_POST, [
                "form_name" => "admins_update",
                "columns" => "admins_id",
                "dir" => "admins",
                "file_name" => "admins_file",
                "file_delete" => "delete_file",
                "pass" => "admins_pass"

            ]
        );

        return $sql;
    }

    public function adminsDelete($admins_id)
    {
        $sql = $this->db->delete("admins", "admins_id", $admins_id);
        return $sql;

    }

    public function adminsInsertOp()
    {
        $sql = $this->db->insert("admins", $_POST,
            [
                "form_name" => "admins_insert",
                "dir" => "admins",
                "file_name" => "admins_file",
                "pass" => "admins_pass"
            ]
        );
        return $sql;
    }

    //SLIDERS

    public function sliders()
    {
        $sql = $this->db->read("sliders",
            [
                "columns_name" => "sliders_must",
                "columns_sort" => "ASC"
            ]
        );
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function slidersInsertOp()
    {
        $sql = $this->db->insert("sliders", $_POST,
            [
                "form_name" => "sliders_insert",
                "dir" => "sliders",
                "file_name" => "sliders_file"
            ]
        );
        return $sql;
    }

    public function slidersDelete($sliders_id)
    {
        $sql = $this->db->delete("sliders", "sliders_id", $sliders_id);
        return $sql;
    }


    public function slidersSortable()
    {
        $sql = $this->db->orderUpdate("sliders", $_POST['item'], "sliders_must", "sliders_id");
        echo $sql['status'];
    }

    public function blogs()
    {
        $sql = $this->db->read("blogs",
            [
                "columns_name" => "blogs_must",
                "column_sort" => "ASC"
            ]
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function blogsInsertOp()
    {
        $sql = $this->db->insert("blogs", $_POST,
            [
                "form_name" => "blogs_insert",
                "slug" => "blogs_slug",
                "title" => "blogs_title",
                "dir" => "blogs",
                "file_name" => "blogs_file"
            ]
        );
        return $sql;
    }

    public function blogsUpdate($blogs_id)
    {
        $sql = $this->db->wread("blogs", "blogs_id", $blogs_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function blogsUpdateOp()
    {

        $sql = $this->db->update("blogs", $_POST, [
                "form_name" => "blogs_update",
                "slug" => "blogs_slug",
                "title" => "blogs_title",
                "columns" => "blogs_id",
                "dir" => "blogs",
                "file_name" => "blogs_file",
                "file_delete" => "delete_file"
            ]
        );

        return $sql;
    }

    public function blogsDelete($blogs_id)
    {
        $sql = $this->db->delete("blogs", "blogs_id", $blogs_id);
        return $sql;

    }

    public function blogsSortable()
    {
        $sql = $this->db->orderUpdate("blogs", $_POST['item'], "blogs_must", "blogs_id");
        echo $sql['status'];
    }

    //ABOUTS

    public function abouts()
    {
        $sql = $this->db->read("abouts",
            [
                "columns_name" => "abouts_must",
                "column_sort" => "ASC"
            ]
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function aboutsInsertOp()
    {
        $sql = $this->db->insert("abouts", $_POST,
            [
                "form_name" => "abouts_insert",
                "slug" => "abouts_slug",
                "title" => "abouts_title",
                "dir" => "abouts",
                "file_name" => "abouts_file"
            ]
        );
        return $sql;
    }

    public function aboutsUpdate($abouts_id)
    {
        $sql = $this->db->wread("abouts", "abouts_id", $abouts_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function aboutsUpdateOp()
    {

        $sql = $this->db->update("abouts", $_POST, [
                "form_name" => "abouts_update",
                "slug" => "abouts_slug",
                "title" => "abouts_title",
                "columns" => "abouts_id",
                "dir" => "abouts",
                "file_name" => "abouts_file",
                "file_delete" => "delete_file"
            ]
        );

        return $sql;
    }

    public function aboutsDelete($abouts_id)
    {
        $sql = $this->db->delete("abouts", "abouts_id", $abouts_id);
        return $sql;

    }

    public function aboutsSortable()
    {
        $sql = $this->db->orderUpdate("abouts", $_POST['item'], "abouts_must", "abouts_id");
        echo $sql['status'];
    }


    //Faculties
    public function faculties()
    {
        $sql = $this->db->read("faculties");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function facultiesDelete($faculty_id)
    {
        $sql = $this->db->delete("faculties", "id", $faculty_id);
        return $sql;
    }

    public function facultiesInsertOp()
    {
        $sql = $this->db->insert("faculties", $_POST,
            [
                "form_name" => "faculties_insert",
                "name" => "faculties_name"
            ]
        );
        return $sql;
    }

    public function facultiesUpdate($faculty_id)
    {
        $sql = $this->db->wread("faculties", "id", $faculty_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function facultiesUpdateOp()
    {
        $sql = $this->db->update("faculties", $_POST, [
                "form_name" => "faculties_update",
                "columns" => "id",
                "name" => "faculties_name"
            ]
        );

        return $sql;
    }


    //Departments

    public function departments()
    {
        $sql = $this->db->read("departments");

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function departmentsDelete($department_id)
    {
        $sql = $this->db->delete("departments", "id", $department_id);
        return $sql;
    }

    public function departmentsInsertOp()
    {
        $sql = $this->db->insert("departments", $_POST,
            [
                "form_name" => "departments_insert",
                "name" => "departments_name"
            ]
        );
        return $sql;
    }


    public function departmentsUpdate($departments_id)
    {
        $sql = $this->db->wread("departments", "id", $departments_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function departmentsUpdateOp()
    {
        $sql = $this->db->update("departments", $_POST, [
                "form_name" => "departments_update",
                "columns" => "id",
                "name" => "departments_name"
            ]
        );

        return $sql;
    }


    //Univercities

    public function univercities()
    {
        $sql = $this->db->read("univercities");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function univercitiesDelete($univ_id)
    {
        $sql = $this->db->delete("univercities", "id", $univ_id);
        return $sql;
    }

    public function univercitiesInsertOp()
    {
        $sql = $this->db->insert("univercities", $_POST,
            [
                "form_name" => "univercities_insert",
                "name" => "univercities_name",
                "dir" => "univercities",
                "file_name" => "univercities_file"
            ]
        );
        return $sql;
    }

    public function univercitiesUpdate($univercities_id)
    {
        $sql = $this->db->wread("univercities", "id", $univercities_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function univercitiesUpdateOp()
    {
        $sql = $this->db->update("univercities", $_POST, [
                "form_name" => "univercities_update",
                "columns" => "id",
                "name" => "univercities_name",
                "dir" => "univercities",
                "file_name" => "univercities_file",
                "file_delete" => "delete_file"
            ]
        );

        return $sql;
    }


    //Clubs

    public function clubs()
    {
        $sql = $this->db->read("clubs");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function clubsDelete($clubs_id)
    {
        $sql = $this->db->delete("clubs", "id", $clubs_id);
        return $sql;
    }

    public function clubsInsertOp()
    {
        $sql = $this->db->insert("clubs", $_POST,
            [
                "form_name" => "clubs_insert",
                "name" => "clubs_name",
                "dir" => "clubs",
                "file_name" => "clubs_file"
            ]
        );
        return $sql;
    }

    public function clubsUpdate($clubs_id)
    {
        $sql = $this->db->wread("clubs", "id", $clubs_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function clubsUpdateOp()
    {
        $sql = $this->db->update("clubs", $_POST, [
                "form_name" => "clubs_update",
                "columns" => "id",
                "name" => "clubs_name",
                "dir" => "clubs",
                "file_name" => "clubs_file",
                "file_delete" => "delete_file"
            ]
        );

        return $sql;
    }


    //Activities

    public function activities()
    {
        $sql = $this->db->read("activities");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function activitiesDelete($activities_id)
    {
        $sql = $this->db->delete("activities", "id", $activities_id);
        return $sql;
    }

    public function activitiesInsertOp()
    {
        $sql = $this->db->insert("activities", $_POST,
            [
                "form_name" => "clubs_insert",
                "name" => "clubs_name",
                "dir" => "clubs",
                "file_name" => "clubs_file"
            ]
        );
        return $sql;
    }

    public function activitiesUpdate($activities_id)
    {
        $sql = $this->db->wread("activities", "id", $activities_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function activitiesUpdateOp()
    {
        $sql = $this->db->update("activities", $_POST, [
                "form_name" => "activities_update",
                "columns" => "id"
            ]
        );

        return $sql;
    }


    //Liked & Comments

    public function  getComments($activity_id){
        $sql= $this->db->getEvent($activity_id);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function  getLikes($activity_id){
        $sql= $this->db->getLike($activity_id);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    public function users()
    {
        $sql = $this->db->read("users");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }



}
