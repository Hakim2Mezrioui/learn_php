<?php
require "./vendor/autoload.php";
use PHPUnit\Framework\TestCase;
/*
|--------------------
| Testing PHP
|--------------------
*/

// phpunit
// composer require --dev phpunit/phpunit
class ExampleTest extends TestCase {
    public function test_it_works() {
        $isWorking = true;
        $this->assertTrue($isWorking);
        // $this->assertEquals()
        // $this->assertEmpty()
        // $this->assertFalse();
    }
}


// pest

// vendor\bin\pest --init

test("it works", function() {
    $isWorking = true;
    expect($isWorking)->toBeTrue();
});

it("works with pest", function() {
    $isWorking = false;
    expect($isWorking)->toBeFalse();
});



/*
|--------------------
| End of Testing PHP
|--------------------
*/
