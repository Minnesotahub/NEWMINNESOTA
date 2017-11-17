<?php
    /**
     * newclass
     */
    class Name
    {
      private static $name;
      static function nameSet($namefrom)
      {
        self::$name = $namefrom;
      }
      static function nameGet()
      {
        return self::$name;
      }
    }

    Name::nameSet(Andrey);
    echo Name::nameGet();

 ?>
