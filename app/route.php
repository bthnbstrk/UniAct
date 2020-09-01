<?php
App::getAction('/','/');
//App::getAction('/index','/default/index');


//Authentication

//Activities

App::getAction('/activities/([0-9a-zA-z-_]+)','/activities/([0-9a-zA-z-_]+)');
App::getAction('/activities/([0-9a-zA-z-_]+)','/activities/detail/([0-9a-zA-z-_]+)');

//Nedmin
App::getAction('/nedmin','/nedmin/index',true,"backend");
App::getAction("/nedmin/login",'/nedmin/login');
App::postAction("/nedmin/login","/nedmin/loginControl");
App::getAction("/nedmin/logout",'/nedmin/logout');
//Faculties

App::getAction('/nedmin/faculties','/nedmin/faculties',true,"backend");
App::getAction('/nedmin/faculties/update/([0-9a-zA-z-_]+)','/nedmin/facultiesUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/faculties/update/facultiesUpdateOp','/nedmin/facultiesUpdateOp',true,"backend");
App::getAction('/nedmin/faculties/delete/([0-9a-zA-z-_]+)','/nedmin/facultiesDelete/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/faculties/insert/facultiesInsertOp','/nedmin/facultiesInsertOp',true,"backend");

//Departments

App::getAction('/nedmin/departments','/nedmin/departments',true,"backend");
App::postAction('/nedmin/departments/insert/departmentsInsertOp','/nedmin/departmentsInsertOp',true,"backend");
App::getAction('/nedmin/departments/delete/([0-9a-zA-z-_]+)','/nedmin/departmentsDelete/([0-9a-zA-z-_]+)',true,"backend");
App::getAction('/nedmin/departments/update/([0-9a-zA-z-_]+)','/nedmin/departmentsUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/departments/update/departmentsUpdateOp','/nedmin/departmentsUpdateOp',true,"backend");

//Univercities

App::getAction('/nedmin/univercities','/nedmin/univercities',true,"backend");
App::postAction('/nedmin/univercities/insert/univercitiesInsertOp','/nedmin/univercitiesInsertOp',true,"backend");
App::getAction('/nedmin/univercities/delete/([0-9a-zA-z-_]+)','/nedmin/univercitiesDelete/([0-9a-zA-z-_]+)',true,"backend");
App::getAction('/nedmin/univercities/update/([0-9a-zA-z-_]+)','/nedmin/univercitiesUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/univercities/update/univercitiesUpdateOp','/nedmin/univercitiesUpdateOp',true,"backend");

//Clubs

App::getAction('/nedmin/clubs','/nedmin/clubs',true,"backend");
App::postAction('/nedmin/clubs/insert/clubsInsertOp','/nedmin/clubsInsertOp',true,"backend");
App::getAction('/nedmin/clubs/delete/([0-9a-zA-z-_]+)','/nedmin/clubsDelete/([0-9a-zA-z-_]+)',true,"backend");
App::getAction('/nedmin/clubs/update/([0-9a-zA-z-_]+)','/nedmin/clubsUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/clubs/update/clubsUpdateOp','/nedmin/clubsUpdateOp',true,"backend");

//Activities
App::getAction('/nedmin/activities','/nedmin/activities',true,"backend");
App::postAction('/nedmin/activities/insert/activitiesInsertOp','/nedmin/activitiesInsertOp',true,"backend");
App::getAction('/nedmin/activities/delete/([0-9a-zA-z-_]+)','/nedmin/activitiesDelete/([0-9a-zA-z-_]+)',true,"backend");
App::getAction('/nedmin/activities/update/([0-9a-zA-z-_]+)','/nedmin/activitiesUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/activities/update/activitiesUpdateOp','/nedmin/activitiesUpdateOp',true,"backend");
App::getAction('/nedmin/activities/comments/([0-9a-zA-z-_]+)','/nedmin/activitiesComments/([0-9a-zA-z-_]+)',true,"backend");


//SETTINGS
App::getAction('/nedmin/settings','/nedmin/settings',true,"backend");
App::getAction('/nedmin/settings/update/([0-9a-zA-z-_]+)','/nedmin/settingsUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/settings/update/settingsUpdateOp','/nedmin/settingsUpdateOp',true,"backend");

//ADMINS
App::getAction('/nedmin/admins','/nedmin/admins',true,"backend");
App::postAction('/nedmin/admins','/nedmin/adminsSortable',true,"backend");
App::getAction('/nedmin/admins/update/([0-9a-zA-z-_]+)','/nedmin/adminsUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/admins/update/adminsUpdateOp','/nedmin/adminsUpdateOp',true,"backend");
App::postAction('/nedmin/admins/insert/adminsInsertOp','/nedmin/adminsInsertOp',true,"backend");
App::getAction('/nedmin/admins/delete/([0-9a-zA-z-_]+)','/nedmin/adminsDelete/([0-9a-zA-z-_]+)',true,"backend");

//SLIDERS
App::getAction('/nedmin/sliders','/nedmin/sliders',true,"backend");
App::postAction('/nedmin/sliders/insert/slidersInsertOp','/nedmin/slidersInsertOp',true,"backend");
App::getAction('/nedmin/sliders/delete/([0-9a-zA-z-_]+)','/nedmin/slidersDelete/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/sliders','/nedmin/slidersSortable',true,"backend");


//BLOGS
//BACKEND
App::getAction('/nedmin/blogs','/nedmin/blogs',true,"backend");
App::postAction('/nedmin/blogs/insert/blogsInsertOp','/nedmin/blogsInsertOp',true,"backend");
App::getAction('/nedmin/blogs/update/([0-9a-zA-z-_]+)','/nedmin/blogsUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/blogs/update/blogsUpdateOp','/nedmin/blogsUpdateOp',true,"backend");
App::getAction('/nedmin/blogs/delete/([0-9a-zA-z-_]+)','/nedmin/blogsDelete/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/blogs','/nedmin/blogsSortable',true,"backend");
//FRONTEND
App::getAction('/blog','/blog/index');
App::getAction('/blog/([0-9a-zA-z-_]+)','/blog/detail/([0-9a-zA-z-_]+)');

//ABOUTS
App::getAction('/nedmin/abouts','/nedmin/abouts',true,"backend");
App::postAction('/nedmin/abouts/insert/aboutsInsertOp','/nedmin/aboutsInsertOp',true,"backend");
App::getAction('/nedmin/abouts/update/([0-9a-zA-z-_]+)','/nedmin/aboutsUpdate/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/abouts/update/aboutsUpdateOp','/nedmin/aboutsUpdateOp',true,"backend");
App::getAction('/nedmin/abouts/delete/([0-9a-zA-z-_]+)','/nedmin/aboutsDelete/([0-9a-zA-z-_]+)',true,"backend");
App::postAction('/nedmin/abouts','/nedmin/aboutsSortable',true,"backend");

//FRONTEND
App::getAction('/sayfa/([0-9a-zA-z-_]+)','/abouts/index/([0-9a-zA-z-_]+)');
