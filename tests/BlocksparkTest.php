<?php
/**
 * Tests for BlockSpark
 */

use PHPUnit\Framework\TestCase;
use Blockspark\Blockspark;

class BlocksparkTest extends TestCase {
    private Blockspark $instance;

    protected function setUp(): void {
        $this->instance = new Blockspark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockspark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
