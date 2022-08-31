<?php

namespace Techunico\DirReader;

class Reader{
    private $directory;
    public $files;

    public function dirreader($directory, array $excludefiles = ['.', '..']) {
        
        $this->directory = $directory;

        $this->files = [];

      if (!is_dir($this->directory)) {
          return null;
      }

      if (!($filedir = opendir($this->directory))) {
          return null;
      }

      while (($file = readdir($filedir)) !== false) {

          if (in_array($file, $excludefiles)) {
              continue;
          }

          $this->files[] = $directory . '/' . $file;
      }

      closedir($filedir);
      return $this->files;
  }
}
