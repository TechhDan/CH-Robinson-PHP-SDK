<?php

namespace CHRobinson\Test\Core;

use CHRobinson\Core\AccessToken;
use PHPUnit\Framework\TestCase;

class AccessTokenTest extends TestCase
{
    public function testIsAccessTokenExpired()
    {
        $accessToken = new AccessToken(
            'token',
            'tokenType',
            0 // Seconds to expire
        );
        $this->assertTrue($accessToken->isExpired());

        $accessToken = new AccessToken(
            'token',
            'tokenType',
            60 // Seconds to expire
        );
        $this->assertFalse($accessToken->isExpired());
    }
}
