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
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 ?>
