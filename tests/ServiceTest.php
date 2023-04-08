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
        $this->assertContains(1, $result);
    }

    public function testProcess()
    {
        $service = new Service();
        $result = $service->process();
        $this->assertNotEmpty($result);
        $this->assertContains('LOREM', $result);
    }

}