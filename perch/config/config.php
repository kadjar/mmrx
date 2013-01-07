<?php

    define('PERCH_LICENSE_KEY', 'P21301-HYK941-SWH973-HUE384-FVW005');

    define("PERCH_DB_USERNAME", 'perchie');
    define("PERCH_DB_PASSWORD", 'eK5cande');
    define("PERCH_DB_SERVER", "localhost:8889");
    define("PERCH_DB_DATABASE", "perch");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_EMAIL_FROM', 'kadjar@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Garrett Amini');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');


    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
  
?>