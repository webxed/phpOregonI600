<?PHP
   $config = Array();

   // Just my simple AppID pointer to identify Application / Script in my catalog
   $config['app']['id'] = '';

   //
   // Data Cache
   //
   //   Cache also enables simple data presentation in index.php
   //   
   //
   $config['cache']['enable']    = true;     // Enable Cache
   $config['cache']['path']      = 'cache/'; // Folder where cache file should be stored
                                             // Web serwer shuld gave r/w access to this folder
   $config['cache']['retention'] = 10;       // Cache retention time (in Minutes)

   $confog['cache']['files'][''] = 'cache_city.log';

?>
