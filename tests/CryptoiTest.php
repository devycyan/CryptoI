<?php
/**
 * Tests for CryptoI
 */

use PHPUnit\Framework\TestCase;
use Cryptoi\Cryptoi;

class CryptoiTest extends TestCase {
    private Cryptoi $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoi(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoi::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
