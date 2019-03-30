<?php
namespace ExampleTests\Unit;

use \PHPUnit\Framework\TestCase;
use \Phake;
use \Example\Db\IPersonDB;
use \Example\PersonService;

class PersonServiceTest extends TestCase
{
    private $personService;

    public function setUp() {
        $personDB = Phake::mock(IPersonDB::class);
        Phake::when($personDB)->findAllByName($this->anything())->thenReturn([]);
        $this->personService = new PersonService($personDB);
    }

    public function test() {
        $this->assertCount(0, $this->personService->findAllByName(''));
    }
}