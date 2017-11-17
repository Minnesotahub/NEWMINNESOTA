<?php
/**
 * new ClassName
 */
class newName
{
  private static $name;
  static function setName($newname)
  {
    self::$name = $newname;
  }
  static function  getName()
  {
    return self::$name;
  }
}

newName::setName(Andrey);
echo newName::getName();

 ?>
