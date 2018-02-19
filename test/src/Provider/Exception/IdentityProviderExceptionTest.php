<?php

namespace League\OAuth2\Client\Test\Provider\Exception;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

class IdentityProviderExceptionTest extends \PHPUnit\Framework\TestCase
{
    protected $result;

    /**
     * @var IdentityProviderException
     */
    protected $exception;

    protected function setUp()
    {
        $this->result = [
            'error' => $error = 'message',
            'code' => $message = 404
        ];
        $this->exception = new IdentityProviderException($error, $message, $this->result);
    }

    public function testGetResponseBody()
    {

        $this->assertEquals(
            $this->result,
            $this->exception->getResponseBody()
        );
    }

    public function testGetMessage()
    {
        $this->assertEquals(
            $this->result['error'],
            $this->exception->getMessage()
        );
    }

    public function testGetCode()
    {
        $this->assertEquals(
            $this->result['code'],
            $this->exception->getCode()
        );
    }
}
