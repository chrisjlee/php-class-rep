<?php
require_once 'PHPUnit/Autoload.php';
require_once(dirname(__FILE__). '/class.rep.php');

/** @TODO assert that if i don't set the value
 *  it'll throw the correct exception
 */
class classRepTest extends PHPUnit_Framework_TestCase {
  public function setUp() {}
  public function tearDown() {}
  public function testRepNameNull()
  {
    $alfredRep = new Rep();
    // Newly formed assert object shouldn't contain anything
    $this->assertEquals($alfredRep ->getName(), null);
  }
  public function testRepEmailNull()
  {
    // Create a new atrium rep object
    $alfredRep = new Rep();
    // Newly formed assert object shouldn't contain anything
    $this->assertEquals($alfredRep ->getEmail(), null);
  }
  public function testRepGetName()
  {
    // Set test name to 'alfred'
    $name = 'alfred';
    $alfredRep = new Rep($name);
    $this->assertEquals($alfredRep->getName(), 'alfred');
  }
  public function testRepGetEmail() {
    // Set test name to 'alfred'
    $name = 'alfred';
    // Set an email
    $email = "$name@enewman.com";
    // Create a new atrium rep object
    $alfredRep = new Rep($name, $email);
    // assert that atrium rep's name is alfred
    $this->assertEquals($alfredRep ->getEmail(), 'alfred@enewman.com');
  }
}
