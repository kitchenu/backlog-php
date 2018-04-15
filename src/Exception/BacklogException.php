<?php

namespace Kitchenu\Backlog\Exception;

use GuzzleHttp\Exception\ClientException;

class BacklogException extends \RuntimeException
{
    /**
     * @var array
     */
    protected $errors;

    /**
     * @param string   $message
     * @param Response $response
     */
    public function __construct(ClientException $exception)
    {
        $errors = json_decode($exception->getResponse()->getBody()->getContents());
        $this->errors = $errors->errors;

        parent::__construct($exception->getMessage(), $exception->getCode());
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
