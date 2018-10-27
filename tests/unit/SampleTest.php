<?php

use PHPUnit\Framework\TestCase;
use App\Is;

class SampleTest extends TestCase
{
    protected $is;

    public function setUp()
    {
        $this->is = new Is();
    }

    /** @test */
    public function checkIfArrayWithArrayInput()
    {
        // Given: Array;
        $array = ['test', '123'];

        // When: Pass the array to the method;
        $res = $this->is->array($array);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfArrayWithNotArrayInput()
    {
        // Given: String;
        $string = "test";

        // When: Pass the string to the method;
        $res = $this->is->array($string);

        // Then: Should return false;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfObjectWithObjectInput()
    {
        // Given: Object;
        $object = (object)["key" => "value", "k" => "v"];

        // When: Pass the object to the method;
        $res = $this->is->object($object);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfObjectWithNotObjectInput()
    {
        // Given: Array;
        $array = ["key" => "value", "k" => "v"];

        // When: Pass the object to the method;
        $res = $this->is->object($array);

        // Then: Should return true;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfStringWithStringInput()
    {
        // Given: String;
        $string = "Test";

        // When: Pass the string to the method;
        $res = $this->is->string($string);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfStringWithNotStringInput()
    {
        // Given: Integer;
        $integer = 123;

        // When: Pass the integer to the method;
        $res = $this->is->string($integer);

        // Then: Should return true;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfIntegerWithIntegerInput()
    {
        // Given: Integer;
        $integer = 123;

        // When: Pass the integer to the method;
        $res = $this->is->integer($integer);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfIntegerWithNotIntegerInput()
    {
        // Given: String;
        $string = "test";

        // When: Pass the string to the method;
        $res = $this->is->integer($string);

        // Then: Should return true;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfBooleanWithBooleanInput()
    {
        // Given: Boolean;
        $boolean = true;

        // When: Pass the boolean to the method;
        $res = $this->is->boolean($boolean);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfBooleanWithNotBooleanInput()
    {
        // Given: String;
        $string = "true";

        // When: Pass the string to the method;
        $res = $this->is->boolean($string);

        // Then: Should return true;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfFloatWithFloatInput()
    {
        // Given: Float;
        $float = 1.619;

        // When: Pass the float to the method;
        $res = $this->is->float($float);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfFloatWithNotFloatInput()
    {
        // Given: Integer;
        $integer = 123;

        // When: Pass the integer to the method;
        $res = $this->is->float($integer);

        // Then: Should return true;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfEmailWithEmailInput()
    {
        // Given: Email;
        $email = "test@example.com";

        // When: Pass the email to the method;
        $res = $this->is->email($email);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfEmailWithNotEmailInput()
    {
        // Given: String;
        $string = "test";

        // When: Pass the string to the method;
        $res = $this->is->email($string);

        // Then: Should return true;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfURLWithURLInput()
    {
        // Given: URL;
        $URL = "http://example.com";

        // When: Pass the URL to the method;
        $res = $this->is->url($URL);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfURLWithNotURLInput()
    {
        // Given: String;
        $string = "test";

        // When: Pass the string to the method;
        $res = $this->is->url($string);

        // Then: Should return true;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfDomainWithDomainInput()
    {
        // Given: Domain;
        $domain = "example.com";

        // When: Pass the domain to the method;
        $res = $this->is->domain($domain);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfDomainWithNotDomainInput()
    {
        // Given: String;
        $string = "test";

        // When: Pass the string to the method;
        $res = $this->is->domain($string);

        // Then: Should return true;
        $this->assertFalse($res);
    }

    /** @test */
    public function checkIfIPDomainWithIPInput()
    {
        // Given: IP;
        $IP = "192.168.1.1";

        // When: Pass the IP to the method;
        $res = $this->is->ip($IP);

        // Then: Should return true;
        $this->assertTrue($res);
    }

    /** @test */
    public function checkIfIPWithNotIPInput()
    {
        // Given: String;
        $string = "test";

        // When: Pass the string to the method;
        $res = $this->is->ip($string);

        // Then: Should return true;
        $this->assertFalse($res);
    }
}
