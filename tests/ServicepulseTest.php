<?php
/**
 * Tests for ServicePulse
 */

use PHPUnit\Framework\TestCase;
use Servicepulse\Servicepulse;

class ServicepulseTest extends TestCase {
    private Servicepulse $instance;

    protected function setUp(): void {
        $this->instance = new Servicepulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Servicepulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
