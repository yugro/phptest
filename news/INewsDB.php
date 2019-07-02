<?php
interface INewsDB{
static function dbConn();
  public  function dbSave(array $a);
   function dbGet();
  public  function dbDelete($id);
}
