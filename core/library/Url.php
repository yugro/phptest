<?php


namespace library;


class Url {

//  private $_url;
//
//  private $_segments;
//
//  private $_params;
//
//  public function __construct() {
//
//    $this->_url = $_SERVER['REQUEST_URI'];
//    $this->getElementsFromUrl();
//    $this->_params=$_GET;
//    unset($this->_params['url']);
//  }
  /**
   * @return array
   */
  protected static function getElementsFromUrl() {
//    var_dump($_GET);die();
    if(isset($_GET['url'])) {
      $segments = explode('/', $_GET['url']);
      if (empty($segments[count($segments) - 1])) {
        unset($segments[count($segments) - 1]);
      }
      $segments = array_map(function ($v) {
        return preg_replace('{[\\\'\*]}', '', $v);
      }, $segments);
      return $segments;
    }
    return false;
  }

  /**
   * @param string $paramName
   *
   * @return string or null
   */

  public static function getParam($paramName){
    return addslashes($_GET[$paramName]);
  }

  /**
   * @param int $n
   *
   * @return string or null
   */
 public static function getSegment($n){
    $segment=self::getElementsFromUrl();
    if (isset($segment[$n]))
    return $segment[$n];
  }

  /**
   * @return array
   */
  public static function getAllSegments(){
    return self::getElementsFromUrl();
  }

  /**
   * @return string
   */
  public static function getUrlString(){
    return $_SERVER['REQUEST_URI'];
  }
}