<?php
interface INewsDB{
static function dbConn();
  public static  function dbSave(array $a);
  static function dbGet();
  public static  function dbDelete($id);
}
