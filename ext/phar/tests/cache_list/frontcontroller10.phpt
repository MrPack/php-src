--TEST--
Phar front controller rewrite access denied [cache_list]
--INI--
default_charset=UTF-8
phar.cache_list={PWD}/frontcontroller10.php
--SKIPIF--
<?php if (!extension_loaded("phar")) die("skip"); ?>
--ENV--
SCRIPT_NAME=/frontcontroller10.php
REQUEST_URI=/frontcontroller10.php/hi
PATH_INFO=/hi
--FILE_EXTERNAL--
files/frontcontroller4.phar
--EXPECTHEADERS--
Content-type: text/html; charset=UTF-8
Status: 403 Access Denied
--EXPECT--
<html>
 <head>
  <title>Access Denied</title>
 </head>
 <body>
  <h1>403 - File /hi Access Denied</h1>
 </body>
</html>
