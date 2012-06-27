<?php
/** Created a base PDO for each Representative
 *  @package rep
 *  @author Chris J. Lee
 */
class Rep
{
  /**
   * @var $name 
   *  String of the name of the representative
   */
  static public $name = null;
  /**
   * @var $email 
   *  String of the person's email address
   */
  static public $email = null;
  
  /**
   * @var $regions 
   *  Array of states or regions the person is responsible for
  */
  static public $regions = array();
  /*
   * @var $regionEmail 
   *  Array of states or regions the person is responsible for
   */
  static public $regionEmail = null;
  
  /** 
   * Constructor
   */
  public function __construct($name=null, $email=null, $regionEmail=null, $regions=null) 
  {
    $args = array($name, $email, $regionEmail, $regions);
    //$this->_raiseArrayException($args);
    
    // Initialize protected static values
    self::$name = $name;
    self::$email = $email;
    self::$regions = $regions;
    self::$regionEmail = $regionEmail;
  }
  /**
   * @TODO
  */
  public function setEmail($email) {
    return self::$email = $email;
  }
  /**
   * @TODO
  */
  public function getEmail() {
    return self::$email;
  }
  /**
   * @TODO
   */
  public function getRep() {
    return $this;
  }
  /**
   * @param $name Representative name 
   */
  public function setName($name) {
    return self::$name = $name;
  }
  /**
   * @TODO
   */
  public function getName() {
    return self::$name;
  }
  /**
   * Each region has their own seperate email
   *  e.g. infoeast@atrium.com, infocentral@atrium.com
   */
  public function setRegionEmail ($email) 
  {
    return self::$regionEmail($email);
  }
  /**
  * @var $email
  */
  public function getRegionEmail($email) 
  {
    return self::$regionEmail;
  }
  /**
  * @var $regions
  */
  public function getRegions($regions) 
  {
    return self::$regions;
  }
  /**
  * @var $regions
  */
  public function setRegions($regions) 
  {
    return self::$regions = $regions;
  }
  public function getAjaxResponse() {
    echo '';
  }
  /**
   * @var $args
   */
  private function _raiseArrayException($args) {
    // Throw exception if class not defined
    foreach ($args as $value) {
      if (!isset($value)) {
        throw new Exception("$value not defined");
        return;
      }
    }
  }
}