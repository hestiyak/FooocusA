<?php
/**
 * Tests for FooocusAPI
 */

use PHPUnit\Framework\TestCase;
use Fooocusapi\Fooocusapi;

class FooocusapiTest extends TestCase {
    private Fooocusapi $instance;

    protected function setUp(): void {
        $this->instance = new Fooocusapi(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fooocusapi::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
