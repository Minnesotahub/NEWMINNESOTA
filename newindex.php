<?php
    /**
     * newclass
     */
    class newClass
    {

      static function newFunc($name)
      {
        echo "hello {$name}";
      }
    }
newClass::newFunc(Andrey);
$newclass = new newClass;
$newclass->newFunc(haha);
 ?>
