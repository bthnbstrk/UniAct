<?php

class nedminController extends mainController
{
    public function index() {
        $data=[];
        $this->callLayout("backend","main","nedmin","index",$data);
    }

    public function login() {
        $data=[];
        if (isset($_SESSION['admins']))
        {
            Header("Location:/nedmin");
            exit;
        } else {
            $this->callView("nedmin","login",$data);
        }
    }

    public function loginControl() {

        $loginControlModel=new nedminModel();
        $_SESSION['messageManagement']=$loginControlModel->loginControl();
        $data=$_SESSION['messageManagement'];

        if ($data['status']) {
            Header("Location:/nedmin");
            exit;
//            $this->callLayout("backend","main","nedmin","index",$data);
        } else {
            $this->callView("nedmin","login",$data);
        }
    }

    public function logout() {
        $data=[];
        $logout=new nedminModel();
        $logout->logout();
        $this->CallView("nedmin","login",$data);
    }

    public function settings() {
        $data=[];
        $settingsModel=new nedminModel();
        $data['adminSettings']=$settingsModel->settings();
        $this->callLayout("backend","main","nedmin","settings",$data);
    }

    public function settingsUpdate($settings_id) {
        $data=[];
        $settingsUpdateModel=new nedminModel();
        $data['settingsUpdate']=$settingsUpdateModel->settingsUpdate($settings_id);
        $this->callLayout("backend","main","nedmin","settingsUpdate",$data);
    }

    public function settingsUpdateOp(){

        $settingsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$settingsUpdateOpModel->settingsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function admins() {
        $data=[];
        $adminsModel=new nedminModel();
        $data['admins']=$adminsModel->admins();
        $this->callLayout("backend","main","nedmin","admins",$data);
    }

    public function adminsSortable() {
        $adminsSortableModel=new nedminModel();
        $adminsSortableModel->adminsSortable();
    }

    public function adminsUpdate($admins_id) {
        $data=[];
        $adminsUpdateModel=new nedminModel();
        $data['adminsUpdate']=$adminsUpdateModel->adminsUpdate($admins_id);
        $this->callLayout("backend","main","nedmin","adminsUpdate",$data);
    }

    public function adminsUpdateOp(){

        $adminsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$adminsUpdateOpModel->adminsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function adminsDelete($admins_id){
        $adminsDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$adminsDeleteModel->adminsDelete($admins_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function adminsInsertOp(){
        $adminsInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$adminsInsertOp->adminsInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function sliders() {
        $data=[];
        $slidersModel=new nedminModel();
        $data['sliders']=$slidersModel->sliders();
        $this->callLayout("backend","main","nedmin","sliders",$data);
    }

    public function slidersInsertOp(){
        $slidersInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$slidersInsertOp->slidersInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function slidersDelete($sliders_id){
        $slidersDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$slidersDeleteModel->slidersDelete($sliders_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function slidersSortable() {
        $slidersSortable=new nedminModel();
        $slidersSortable->slidersSortable();
    }

    public function blogs() {
        $data=[];
        $blogsModel=new nedminModel();
        $data['blogs']=$blogsModel->blogs();
        $this->callLayout("backend","main","nedmin","blogs",$data);
    }

    public function blogsInsertOp(){
        $blogsInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$blogsInsertOp->blogsInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function blogsUpdate($blogs_id) {
        $data=[];
        $blogsUpdateModel=new nedminModel();
        $data['blogsUpdate']=$blogsUpdateModel->blogsUpdate($blogs_id);
        $this->callLayout("backend","main","nedmin","blogsUpdate",$data);
    }

    public function blogsUpdateOp(){

        $blogsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$blogsUpdateOpModel->blogsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function blogsDelete($blogs_id){
        $blogsDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$blogsDeleteModel->blogsDelete($blogs_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function blogsSortable() {
        $blogsSortableModel=new nedminModel();
        $blogsSortableModel->blogsSortable();
    }

    //ABOUTS

    public function abouts() {
        $data=[];
        $aboutsModel=new nedminModel();
        $data['abouts']=$aboutsModel->abouts();
        $this->callLayout("backend","main","nedmin","abouts",$data);
    }

    public function aboutsInsertOp(){
        $aboutsInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$aboutsInsertOp->aboutsInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function aboutsUpdate($abouts_id) {
        $data=[];
        $aboutsUpdateModel=new nedminModel();
        $data['aboutsUpdate']=$aboutsUpdateModel->aboutsUpdate($abouts_id);
        $this->callLayout("backend","main","nedmin","aboutsUpdate",$data);
    }

    public function aboutsUpdateOp(){

        $aboutsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$aboutsUpdateOpModel->aboutsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function aboutsDelete($abouts_id){
        $aboutsDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$aboutsDeleteModel->aboutsDelete($abouts_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function aboutsSortable() {
        $aboutsSortableModel=new nedminModel();
        $aboutsSortableModel->aboutsSortable();
    }



    //Faculties

    public function faculties() {
        $data=[];
        $facultyModel=new nedminModel();
        $data['faculties']=$facultyModel->faculties();
        $this->callLayout("backend","main","nedmin","faculties",$data);
    }
    public function facultiesDelete($faculty_id){
        $facultiesDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$facultiesDeleteModel->facultiesDelete($faculty_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }
    public function facultiesInsertOp(){
        $facultiesInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$facultiesInsertOp->facultiesInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function facultiesUpdate($faculty_id) {
        $data=[];
        $facultiesUpdateModel=new nedminModel();
        $data['facultiesUpdate']=$facultiesUpdateModel->facultiesUpdate($faculty_id);
        $this->callLayout("backend","main","nedmin","facultiesUpdate",$data);
    }

    public function facultiesUpdateOp(){

        $facultiesUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$facultiesUpdateOpModel->facultiesUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }


    //Departments

    public function departments() {
        $data=[];
        $departmentModel=new nedminModel();
        $data['department']=$departmentModel->departments();
        $this->callLayout("backend","main","nedmin","departments",$data);
    }


    public function departmentsDelete($departments_id){
        $departmentsDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$departmentsDeleteModel->departmentsDelete($departments_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function departmentsInsertOp(){
        $departmentsInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$departmentsInsertOp->departmentsInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function departmentsUpdate($departments_id) {
        $data=[];
        $departmentsUpdateModel=new nedminModel();
        $data['departmentsUpdate']=$departmentsUpdateModel->departmentsUpdate($departments_id);
        $this->callLayout("backend","main","nedmin","departmentsUpdate",$data);
    }

    public function departmentsUpdateOp(){

        $departmentsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$departmentsUpdateOpModel->departmentsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    //Univercities

    public function univercities() {
        $data=[];
        $departmentModel=new nedminModel();
        $data['univercity']=$departmentModel->univercities();
        $this->callLayout("backend","main","nedmin","univercities",$data);
    }

    public function univercitiesDelete($univ_id){
        $univercitiesDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$univercitiesDeleteModel->univercitiesDelete($univ_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }
    public function univercitiesInsertOp(){
        $univercitiesInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$univercitiesInsertOp->univercitiesInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }
    public function univercitiesUpdate($univercity_id) {
        $data=[];
        $univercitiesUpdateModel=new nedminModel();
        $data['univercitiesUpdate']=$univercitiesUpdateModel->univercitiesUpdate($univercity_id);
        $this->callLayout("backend","main","nedmin","univercitiesUpdate",$data);
    }

    public function univercitiesUpdateOp(){
        $univercitiesUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$univercitiesUpdateOpModel->univercitiesUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    //Clubs

    public function clubs() {
        $data=[];
        $clubsModel=new nedminModel();
        $data['clubs']=$clubsModel->clubs();
        $data['univercity']=$clubsModel->univercities();
        $this->callLayout("backend","main","nedmin","clubs",$data);
    }

    public function clubsDelete($clubs_id){
        $clubsDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$clubsDeleteModel->clubsDelete($clubs_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }
    public function clubsInsertOp(){
        $clubsInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$clubsInsertOp->clubsInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }
    public function clubsUpdate($clubs_id) {
        $data=[];
        $clubsUpdateModel=new nedminModel();
        $data['clubsUpdate']=$clubsUpdateModel->clubsUpdate($clubs_id);
        $this->callLayout("backend","main","nedmin","clubsUpdate",$data);
    }

    public function clubsUpdateOp(){
        $clubsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$clubsUpdateOpModel->clubsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }


    //Activities


    public function activities() {
        $data=[];
        $activitiesModel=new nedminModel();
        $data['activities']=$activitiesModel->activities();
        $data['clubs']=$activitiesModel->clubs();
        $data['univercities']=$activitiesModel->univercities();
        $this->callLayout("backend","main","nedmin","activities",$data);
    }

    public function activitiesDelete($activities_id){
        $activitiesDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$activitiesDeleteModel->activitiesDelete($activities_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }
    public function activitiesInsertOp(){
        $activitiesInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$activitiesInsertOp->activitiesInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }
    public function activitiesUpdate($activities_id) {
        $data=[];
        $activitiesUpdateModel=new nedminModel();
        $data['activitiesUpdate']=$activitiesUpdateModel->activitiesUpdate($activities_id);
        $this->callLayout("backend","main","nedmin","activitiesUpdate",$data);
    }

    public function activitiesUpdateOp(){
        $activitiesUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$activitiesUpdateOpModel->activitiesUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function activitiesComments($activities_id) {
        $data=[];
        $activitiesGetDataModel=new nedminModel();
        $data['activities']=$activitiesGetDataModel->activitiesUpdate($activities_id);
        $data['comments']=$activitiesGetDataModel->getComments($activities_id);
        $data['likes']=$activitiesGetDataModel->getLikes($activities_id);
        $data['users']=$activitiesGetDataModel->users();
        $data['univercities']=$activitiesGetDataModel->univercities();
        $this->callLayout("backend","main","nedmin","activitiesComments",$data);
    }







}
