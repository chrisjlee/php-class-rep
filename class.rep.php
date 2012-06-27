<?php
/** Created a base PDO for each Representative
 *  @package rep
 *  @author Chris J. Lee
 */
class Rep
{
  /**
   * String of the name of the representative
   *  @var $name 
   */
  static public $name = null;
  /**
   * String of the person's email address
   *  @var $email 
   */
  static public $email = null;
  /**
   * Array of regions where the rep is responsible for
   *  @var $regions
   */
  static public $regions = array();
  
  /**
   *  Array of states or regions the person is responsible for
   *    @var $regionEmail 
   */
  static public $regionEmail = null;
  
  /** 
   * Constructor
   */
  public function __construct($name=null, $email=null, $regionEmail=null, $regions=null) 
  {
    //$args = array($name, $email, $regionEmail, $regions);
    //$this->_raiseArrayException($args);
    // Initialize static values
    self::$name = $name;
    self::$email = $email;
    self::$regions = $regions;
    self::$regionEmail = $regionEmail;
  }
  /**
   * @param $email contains email address
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
   * @param $regionEmail  Email for the general region
   *    e.g. infoeast@atrium.com, infocentral@atrium.com
   */
  public function setRegionEmail($regionEmail) 
  {
    return self::$regionEmail($regionEmail); 
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
  /**
  * @return Rep Object
  */
  public function getRep() {
    return $this;
  }
  /**
   * @TODO
   */
  public function createAjaxResponse() {
    //echo '';
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
