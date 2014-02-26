<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-08 09:16:49 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\user\signup.php [ 5 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 09:16:49 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(5): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 5, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:03:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-08 10:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:03:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Users.php [ 36 ] in file:line
2013-10-08 10:03:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:03:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\messages\models\user.php [ 3 ] in file:line
2013-10-08 10:03:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:08:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_userm' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-08 10:08:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:12:00 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:12:00 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'username.not_em...')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(75): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:32:29 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:32:29 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'username.not_em...')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(76): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:32:44 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:32:44 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'email.not_empty')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(76): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:38:16 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:38:16 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'email.not_empty')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(60): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:38:46 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:38:46 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'email.not_empty')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(60): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:38:56 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:38:56 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'email.not_empty')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(60): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:39:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:39:26 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'email.not_empty')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(60): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:40:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-08 10:40:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:40:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:40:26 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'email.not_empty')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(60): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:41:51 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:41:51 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Validation.php(564): Kohana_Core::message('models/user', 'email.not_empty')
#4 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('models/user', true)
#5 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'models', true)
#6 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(60): Kohana_ORM_Validation_Exception->errors('models')
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Arr.php:30
2013-10-08 10:43:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\user.php [ 2 ] in file:line
2013-10-08 10:43:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:45:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-08 10:45:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:45:55 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user\signup.php [ 8 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:8
2013-10-08 10:45:55 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(8): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 8, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:8
2013-10-08 10:46:18 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user\signup.php [ 5 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:46:18 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 5, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:46:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user\signup.php [ 5 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:46:45 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 5, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:47:03 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user\signup.php [ 5 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:47:03 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 5, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:47:30 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user\signup.php [ 5 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:47:30 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 5, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:47:48 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user\signup.php [ 5 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:47:48 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 5, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:5
2013-10-08 10:52:08 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\user\signup.php [ 14 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:14
2013-10-08 10:52:08 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(14): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 14, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:14
2013-10-08 10:52:25 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user\signup.php [ 16 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:16
2013-10-08 10:52:25 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php(16): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 16, Array)
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
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\signup.php:16
2013-10-08 10:59:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-08 10:59:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:04:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-08 11:04:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:04:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-08 11:04:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:05:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-08 11:05:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:44:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Users.php [ 50 ] in file:line
2013-10-08 11:44:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:46:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Users.php [ 50 ] in file:line
2013-10-08 11:46:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:55:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 11:55:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:56:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 11:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:56:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 11:56:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:58:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 11:58:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:58:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 11:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:01:28 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:01:28 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:01:57 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:01:57 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:02:05 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:02:05 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:02:16 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:02:16 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:02:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 12:02:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:07:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 12:07:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:09:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 12:09:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:09:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 12:09:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:09:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 12:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:12:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\classes\Controller\Users.php [ 73 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:73
2013-10-08 12:12:48 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 73, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:73
2013-10-08 12:13:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 12:13:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:13:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\classes\Controller\Users.php [ 74 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:74
2013-10-08 12:13:30 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 74, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:74
2013-10-08 12:15:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 12:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:16:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-08 12:16:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:18:53 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:18:53 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:20:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:20:45 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:35:13 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:35:13 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:43:11 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:43:11 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:43:18 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:43:18 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:44:08 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:44:08 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:44:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\classes\Controller\Users.php [ 76 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:76
2013-10-08 12:44:37 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 76, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:76
2013-10-08 12:45:57 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:45:57 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:50:55 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:50:55 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:59:54 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 12:59:54 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:00:29 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:00:29 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:03:20 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:03:20 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(70): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:05:03 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:05:03 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(71): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:20:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\classes\Controller\Users.php [ 73 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:73
2013-10-08 13:20:52 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 73, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:73
2013-10-08 13:21:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\classes\Controller\Users.php [ 73 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:73
2013-10-08 13:21:02 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 73, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php:73
2013-10-08 13:24:15 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:24:15 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(71): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:26:22 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:26:22 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\pepi\cloudwac\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pioupiou', 'pioupioupioupio...', false)
#5 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\Users.php(73): Kohana_Auth->login('pioupiou', 'pioupioupioupio...', false)
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\pepi\cloudwac\modules\orm\classes\Kohana\ORM.php:1362
2013-10-08 13:46:42 --- CRITICAL: View_Exception [ 0 ]: The requested view user/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 13:46:42 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/create')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/create', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\User.php(22): Kohana_View::factory('user/create')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 13:46:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\template\template.php [ 61 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-08 13:46:55 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-08 13:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 72 ] in file:line
2013-10-08 13:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 13:56:41 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\user\login.php [ 6 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php:6
2013-10-08 13:56:41 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php(6): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_View->__toString()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\user\login.php:6
2013-10-08 13:57:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 72 ] in file:line
2013-10-08 13:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 14:09:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 72 ] in file:line
2013-10-08 14:09:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 15:32:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\template.php [ 61 ] in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-08 15:32:14 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\pepi\cloudwac\application\views\template\template.php:61
2013-10-08 15:32:55 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\file.php [ 32 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:32
2013-10-08 15:32:55 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 32, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:32
2013-10-08 15:34:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\Controller\file.php [ 36 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:36
2013-10-08 15:34:11 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:36
2013-10-08 17:10:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\file.php [ 15 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:15
2013-10-08 17:10:30 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:15
2013-10-08 17:11:49 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:54
2013-10-08 17:11:49 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(54): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(27): Controller_File->_save_image(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:54
2013-10-08 17:13:02 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:56
2013-10-08 17:13:02 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(56): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(27): Controller_File->_save_image(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:56
2013-10-08 17:25:23 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:56
2013-10-08 17:25:23 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(56): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(27): Controller_File->_save_image(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:56
2013-10-08 17:25:40 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:56
2013-10-08 17:25:40 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(56): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(27): Controller_File->_save_image(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:56
2013-10-08 17:35:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_File::_save_image() ~ APPPATH\classes\Controller\file.php [ 27 ] in file:line
2013-10-08 17:35:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 17:36:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\Controller\file.php [ 56 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:56
2013-10-08 17:36:22 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 56, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(27): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:56
2013-10-08 19:37:31 --- CRITICAL: View_Exception [ 0 ]: The requested view files/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 19:37:31 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files/index')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('files/index', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(7): Kohana_View::factory('files/index')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 19:43:14 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 19:43:14 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\User.php(8): Kohana_View::factory('user/info')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 19:44:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\file.php [ 52 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:52
2013-10-08 19:44:01 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(27): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:52
2013-10-08 20:01:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\file.php [ 54 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:54
2013-10-08 20:01:27 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 54, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(27): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:54
2013-10-08 20:15:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\file.php [ 66 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:66
2013-10-08 20:15:05 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 66, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(27): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:66
2013-10-08 20:21:33 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\cwFiles/3/1b0y2lgjkzqtdawkklpiyyd57jflq52zwkoabapo must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:21:33 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(68): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:21:37 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\cwFiles/3/y1kamwqecpsbxweepq9eyonm8hv6yxwww6chiw8c must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:21:37 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(68): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:24:55 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\cwFiles/3/59spey00zozsflmimctyis01qt7so8ffrsakjbzx must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:24:55 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(68): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:26:28 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 20:26:28 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\User.php(8): Kohana_View::factory('user/info')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 20:26:41 --- CRITICAL: View_Exception [ 0 ]: The requested view files/perso could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 20:26:41 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files/perso')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('files/perso', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(7): Kohana_View::factory('files/perso')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 20:26:51 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\cwFiles/4/mxilaceztdt0ud8kuyof3eekrepd9vzi0cn30lsl must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:26:51 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(68): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:27:13 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\cwFiles/4/3taim0d9e4mekwglzbvu6tgrplifkmvvrnrrcnim.jpg must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 20:27:13 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(68): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:68
2013-10-08 22:00:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\file.php [ 74 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:74
2013-10-08 22:00:14 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 74, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:74
2013-10-08 22:03:02 --- CRITICAL: ErrorException [ 2 ]: unlink() expects parameter 1 to be a valid path, array given ~ APPPATH\classes\Controller\file.php [ 76 ] in file:line
2013-10-08 22:03:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink() expect...', 'C:\xampp\htdocs...', 76, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(76): unlink(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 22:08:01 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 22:08:01 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\User.php(8): Kohana_View::factory('user/info')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 22:08:07 --- CRITICAL: View_Exception [ 0 ]: The requested view files/perso could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 22:08:07 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files/perso')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('files/perso', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(7): Kohana_View::factory('files/perso')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 22:08:50 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\cwFiles/2/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:67
2013-10-08 22:08:50 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(67): Kohana_Upload::save(Array, NULL, 'C:\xampp\htdocs...')
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:67
2013-10-08 22:09:37 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 22:09:37 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\User.php(8): Kohana_View::factory('user/info')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 22:09:39 --- CRITICAL: View_Exception [ 0 ]: The requested view files/perso could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 22:09:39 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files/perso')
#1 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php(30): Kohana_View->__construct('files/perso', NULL)
#2 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(7): Kohana_View::factory('files/perso')
#3 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\View.php:137
2013-10-08 22:12:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fileUp ~ APPPATH\classes\Controller\file.php [ 72 ] in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:72
2013-10-08 22:12:01 --- DEBUG: #0 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 72, Array)
#1 C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php(32): Controller_File->_save_file(Array)
#2 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Controller.php(84): Controller_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#5 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\pepi\cloudwac\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\pepi\cloudwac\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\pepi\cloudwac\application\classes\Controller\file.php:72