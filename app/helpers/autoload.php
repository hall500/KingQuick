<?php
  //Declaring Directory Interator
  $iterator = new DirectoryIterator(dirname(__FILE__));

  //Read the content of folder and require functions
  foreach ($iterator as $fileinfo) {
      if (!$fileinfo->isDot() && ($fileinfo->getFilename() != 'autoload.php')) {
          require_once "{$fileinfo->getFilename()}";
      }
  }