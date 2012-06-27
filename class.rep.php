<?php
/**
 *  Created a PDO for each Representative
 *  
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
   *  Array of regions where the rep is responsible for
  */
  static public $regions = array();
  
  /** 
   * Constructor
   */
  public function __construct($name=null, $email=null, $regions=null) 
  {
    $args = array($name, $email);
    
    // Initialize protected static values
    self::$name = $name;
    self::$email = $email;
    self::$regions = $regions;
  }
  /**
   * Get representative's email
   */
  public function getEmail() {
    return self::$email;
  }
  /**
   * 
   */
  public function getName() {
    return self::$name;
  }
  /**
   * 
   */
  public function getRep() {
    return $this;
  }
  /**
   * 
   */
  public function setName($name) {
    return $this->name = $name;
  }
  /**
   * 
   */
  private function _arrayException() {
    // Throw exception if class not defined
    foreach ($args as $value) {
      if (!isset($value)) {
        throw new Exception("$value not defined");
        return;
      }
    }
  }
}

/**
 * Atrium representative
 */
/*

@TODO child class not needed should be created in base class


class atriumRep extends Rep 
{

  static protected $regions = array();
  static protected $regionEmail;
  
  public function __construct($name=null, $email=null, $regionEmail=null) {
    parent::__construct();
    parent::$email = 'developers@globerunnerseo.com';
    parent::$name = 'Atrium Windows';
  }
  public function setRegionEmail ($email) {
    return $regionEmail($email);
  }
}
*/