<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

require('classes/interfaces/user.interface.php');
require'classes/user.php';


$user = new user();
$user->parseRequest();
echo user::MAX_INSTANCES;





