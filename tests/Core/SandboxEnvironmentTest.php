<?php

namespace CHRobinson\Test\Core;

use CHRobinson\Core\SandboxEnvironment;
use PHPUnit\Framework\TestCase;

class SandboxEnvironmentTest extends TestCase
{
    public function testGetSandboxBaseUrl()
    {
        $sandboxEnvironment = new SandboxEnvironment('client-id', 'client-secret');

        $this->assertSame(
            'https://sandbox-api.navisphere.com',
            $sandboxEnvironment->baseURL()
        );
    }
}
