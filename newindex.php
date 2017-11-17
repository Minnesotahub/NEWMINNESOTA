<?php
/**
 * new ClassName
 */
class newName
{
  private static $name;
  static function setName($changename)
  {
    self::$name = $changename;
  }
  static function getName()
  {
    return self::$name;
  }
}
newName::setName(lalaland);
echo newName::getName();
 ?>
