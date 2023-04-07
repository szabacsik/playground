<?php

namespace Tests;

use App\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testAction()
    {
        $service = new Service();
        $result = $service->action();
        $this->assertIsArray($result);
        $this->assertCount(3, $result);
        $this->assertEquals([1, 2, 3], $result);
    }
}