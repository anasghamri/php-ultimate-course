<?php
/*
*   Start session if not already started,
*/
if(!isset($_SESSION)) session_start();

//  Load env variables
require_once __DIR__ . '/../app/config/_env.php';