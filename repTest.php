<?php
require_once 'PHPUnit/Autoload.php';
require_once(dirname(__FILE__) . '/class.rep.php');

/** @TODO assert that if i don't set the value
 *  it'll throw the correct exception
 */
class classRepTest extends \PHPUnit_Framework_TestCase {
  /**
   * @var contains test Rep object
   */
  protected $_testRep = null;
  
  public function setUp() 
  {
    // Create a new atrium rep object
    $this->_testRep = new Rep();
  }
  public function tearDown() 
  {
    unset($this->_testRep);
  }
  public function testRepNameNull()
  {
    // Newly formed assert object shouldn't contain anything
    $this->assertEquals($this->_testRep->getName(), null);
  }
  public function testRepEmailNull()
  {
    // Newly formed assert object shouldn't contain anything
    $this->assertEquals($this->_testRep->getEmail(), null);
  }
  public function testRepGetSetName()
  {
    // Set test name to 'alfred'
    $this->_testRep->setName('alfred');
    $this->assertEquals($this->_testRep->getName(), 'alfred');
  }
  public function testRepGetSetEmail()
  {
    // Set test Email to 'eNew@man.com'
    $this->_testRep->setEmail('alfred@enewman.com');
    $this->assertEquals($this->_testRep->getEmail(), 'alfred@enewman.com');
  }
  public function testRepEmailGetSetEmail() {
    // assert that atrium rep's name is alfred
    $this->_testRep->setRegionEmail('infoeast@enewman.com');
    $email = 'infoeast@enewman.com';
    //$this->_testRep->getRegionEmail();
    $this->assertEquals($email, 'infoeast@enewman.com');
  }
}