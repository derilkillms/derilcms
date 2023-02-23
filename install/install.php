    <?php

    /**
 * Author   : Muhammad Deril
 * URI      : http://www.derillab.com
 * Github   : @derilkillms
 */
    $protocol=$_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

    $baseurl = str_replace("install/install.php","",$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    ?>
    <!DOCTYPE html>
    <html>
    <style>
        input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }

      input[type=submit] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
      }

      input[type=submit]:hover {
          background-color: #45a049;
      }

      div {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
      }
  </style>
  <body>


    <h3>Install DerilCMS</h3>

    <div>
        <form method="POST">
            <h4>Database Config</h4>
            <label for="host">Host</label>
            <input type="text" id="host" name="host" placeholder="localhost" value="localhost">

            <label for="dbname">DB Name</label>
            <input type="text" id="dbname" name="dbname" placeholder="derilcms" value="derilcms">

            <label for="dbuser">DB User</label>
            <input type="text" id="dbuser" name="dbuser" placeholder="root" value="root">

            <label for="dbpass">DB Password</label>
            <input type="password" id="dbpass" name="dbpass" placeholder="root" value="">

            <label for="dbprefix">DB Prefix</label>
            <input type="text" id="dbprefix" name="dbprefix" placeholder="d_" value="d_">


            <hr>
            <h4>Website Setting</h4>



            <label for="baseurl">Baseurl</label>
            <input type="text" id="baseurl" name="baseurl" placeholder="" value="<?=$protocol.$baseurl?>">

            <label for="wbname">Website Name</label>
            <input type="text" id="wbname" name="wbname" placeholder="derilcms" value="derilcms">

            <label for="wbuser">Username</label>
            <input type="text" id="wbuser" name="wbuser" placeholder="admin" value="admin">

            <label for="wbpass">Password</label>
            <input type="password" id="wbpass" name="wbpass" placeholder="root" value="">



            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>



<?php


require_once 'put_config.php';
require_once 'generatedb.php';


if ($_POST) {

    putconfig($_POST['host'],$_POST['dbname'],$_POST['dbuser'],$_POST['dbpass'],$_POST['dbprefix'],$_POST['baseurl']);

    generatedb($_POST['host'],$_POST['dbname'],$_POST['dbuser'],$_POST['dbpass'],$_POST['dbprefix']);


    header('Location: ' . $protocol.$baseurl);
    exit();

}

if (file_exists('../config.php')) {
 header('Location: ' . $protocol.$baseurl);
 exit();
}