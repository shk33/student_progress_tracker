<?php

class TutorsControllerTest extends TestCase {

  /**
   * A basic functional test example.
   *
   * @return void
   */
  public function setUp()
  {
    parent::setUp();
    $this->prepareForTests();
    $user = Sentry::getUserProvider()->findById(1);
    Sentry::login($user);
  }

  public function testGetIndex()
  {
    $crawler = $this->client->request('GET', '/');

    $this->assertTrue($this->client->getResponse()->isOk());
  }

  /**
  * Creates the application.
  *
  * @return Symfony\Component\HttpKernel\HttpKernelInterface
  */
  public function createApplication()
  {
    $unitTesting = true;
  
    $testEnvironment = 'testing';
  
    return require __DIR__.'/../../../bootstrap/start.php';
  }
  
  /**
  * Migrate the database
  */
  private function prepareForTests()
  {
    Artisan::call('migrate');
  }

}
