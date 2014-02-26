<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-07 10:05:19 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php:67
2013-10-07 10:05:19 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\pepi\cloudwac\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php:67
2013-10-07 10:06:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php:67
2013-10-07 10:06:22 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\pepi\cloudwac\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php:67
2013-10-07 10:06:25 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php:67
2013-10-07 10:06:25 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\pepi\cloudwac\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php:67
2013-10-07 10:09:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php:67
2013-10-07 10:09:23 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\pepi\cloudwac\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Cookie.php:67
2013-10-07 10:42:23 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php:8
2013-10-07 10:42:23 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php:8
2013-10-07 10:43:03 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php:8
2013-10-07 10:43:03 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php:8
2013-10-07 10:44:20 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php:8
2013-10-07 10:44:20 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php:8
2013-10-07 10:45:57 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php:8
2013-10-07 10:45:57 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Welcome.php:8
2013-10-07 10:46:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in file:line
2013-10-07 10:46:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:24:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\template\template.php [ 61 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-07 14:24:22 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-07 14:27:53 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\pepi\cloudwac\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-07 14:27:53 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\xampp\htdocs\pepi\cloudwac\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(31): Kohana_ORM::factory('user')
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-07 14:31:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::validate_create() ~ APPPATH\classes\Controller\Users.php [ 34 ] in file:line
2013-10-07 14:31:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:34:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::validate_create() ~ APPPATH\classes\Controller\Users.php [ 34 ] in file:line
2013-10-07 14:34:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:37:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\Model\user.php [ 7 ] in file:line
2013-10-07 14:37:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:45:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::validate_create() ~ APPPATH\classes\Controller\Users.php [ 34 ] in file:line
2013-10-07 14:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 15:06:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::validate_create() ~ APPPATH\classes\Controller\Users.php [ 34 ] in file:line
2013-10-07 15:06:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 15:07:16 --- CRITICAL: Kohana_Exception [ 0 ]: The _rules property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:603
2013-10-07 15:07:16 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('_rules')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Model\user.php(8): Kohana_ORM->__get('_rules')
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(34): Model_User->validation_create(Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:603
2013-10-07 15:08:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in C:\xampp\htdocs\pepi\cloudwac\application\classes\Model\user.php on line 11 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 238 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php:238
2013-10-07 15:08:43 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 238, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Model\user.php(11): Kohana_Validation->rules('pass', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(34): Model_User->validation_create(Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php:238
2013-10-07 15:10:16 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in C:\xampp\htdocs\pepi\cloudwac\application\classes\Model\user.php on line 11 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 238 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php:238
2013-10-07 15:10:16 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 238, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Model\user.php(11): Kohana_Validation->rules('pass', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(35): Model_User->validation_create(Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php:238
2013-10-07 15:10:33 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in C:\xampp\htdocs\pepi\cloudwac\application\classes\Model\user.php on line 11 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 238 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php:238
2013-10-07 15:10:33 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 238, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Model\user.php(11): Kohana_Validation->rules('pass', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(35): Model_User->validation_create(Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php:238
2013-10-07 17:37:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Users.php [ 26 ] in file:line
2013-10-07 17:37:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:37:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::pre_filter() ~ APPPATH\classes\Controller\Users.php [ 29 ] in file:line
2013-10-07 17:37:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:42:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ APPPATH\classes\Controller\Users.php [ 41 ] in file:line
2013-10-07 17:42:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:42:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::validation() ~ APPPATH\classes\Controller\Users.php [ 41 ] in file:line
2013-10-07 17:42:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:45:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\Controller\Users.php [ 20 ] in file:line
2013-10-07 17:45:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:45:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::filter() ~ APPPATH\classes\Controller\Users.php [ 21 ] in file:line
2013-10-07 17:45:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:47:31 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'unique_username' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2013-10-07 17:47:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(32): Kohana_Validation->check()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-07 17:49:38 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'unique_username' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2013-10-07 17:49:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(32): Kohana_Validation->check()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-07 17:50:10 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'unique_username' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2013-10-07 17:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(29): Kohana_Validation->check()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-07 17:52:04 --- CRITICAL: View_Exception [ 0 ]: The requested view user/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-07 17:52:04 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/register')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/register', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(42): Kohana_View::factory('user/register')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-07 17:52:31 --- CRITICAL: View_Exception [ 0 ]: The requested view user/signup could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-07 17:52:31 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/signup')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/signup', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(42): Kohana_View::factory('user/signup')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-07 17:52:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\Users.php [ 43 ] in file:line
2013-10-07 17:52:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:53:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\template\template.php [ 61 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-07 17:53:40 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-07 17:54:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH\classes\Controller\Users.php [ 42 ] in file:line
2013-10-07 17:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:55:35 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Users.php [ 43 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:43
2013-10-07 17:55:35 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(43): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:43
2013-10-07 18:30:04 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Users.php [ 45 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:45
2013-10-07 18:30:04 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(45): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:45
2013-10-07 18:30:33 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Users.php [ 45 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:45
2013-10-07 18:30:33 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(45): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:45
2013-10-07 18:31:02 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Users.php [ 45 ] in file:line
2013-10-07 18:31:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 18:35:34 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Users.php [ 45 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:45
2013-10-07 18:35:34 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(45): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:45
2013-10-07 18:49:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php:102
2013-10-07 18:49:47 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 102, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Valid.php(548): Kohana_Validation->offsetGet('password')
#2 [internal function]: Kohana_Valid::matches(Object(Validation), 'pass_conf', 'password')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(32): Kohana_Validation->check()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php:102
2013-10-07 18:50:23 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS `pass` () VALUES ('jossssss', 'azerty', 'azerty', 'dfhghgssjdfjh', 'khfdskjfg' at line 1 [ INSERT INTO `username` AS `pass` () VALUES ('jossssss', 'azerty', 'azerty', 'dfhghgssjdfjh', 'khfdskjfgsjsd') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\pepi\cloudwac\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 18:50:23 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Model\user.php(11): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(35): Model_User->register(Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 18:55:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in file:line
2013-10-07 18:55:06 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('azerty')
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', 'azerty')
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', 'azerty')
#4 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(36): Kohana_ORM->__set('password', 'azerty')
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-10-07 18:56:17 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 18:56:17 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(37): Kohana_ORM->save()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 19:24:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\template\template.php [ 61 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-07 19:24:28 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-07 19:30:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\template\template.php [ 61 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-07 19:30:51 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-07 19:31:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\login.php [ 2 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php:2
2013-10-07 19:31:19 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php:2
2013-10-07 19:32:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Users.php [ 79 ] in file:line
2013-10-07 19:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 19:35:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\signup.php [ 2 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:2
2013-10-07 19:35:12 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:2
2013-10-07 19:37:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\login.php [ 2 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php:2
2013-10-07 19:37:28 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php:2
2013-10-07 19:38:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Users.php [ 94 ] in file:line
2013-10-07 19:38:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 19:38:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\views\user\login.php [ 4 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php:4
2013-10-07 19:38:38 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php:4
2013-10-07 19:49:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\signup.php [ 3 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:3
2013-10-07 19:49:59 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:3
2013-10-07 22:24:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\signup.php [ 3 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:3
2013-10-07 22:24:59 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:3
2013-10-07 22:25:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\signup.php [ 3 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:3
2013-10-07 22:25:11 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:3
2013-10-07 22:26:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\signup.php [ 3 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:3
2013-10-07 22:26:27 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:3
2013-10-07 23:53:16 --- CRITICAL: Kohana_Exception [ 0 ]: The max_allowed_space property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:702
2013-10-07 23:53:16 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('max_allowed_spa...', 31457280)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(39): Kohana_ORM->__set('max_allowed_spa...', 31457280)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:702
2013-10-07 23:55:18 --- CRITICAL: Kohana_Exception [ 0 ]: The space_used property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:702
2013-10-07 23:55:18 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('space_used', 0)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(40): Kohana_ORM->__set('space_used', 0)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:702