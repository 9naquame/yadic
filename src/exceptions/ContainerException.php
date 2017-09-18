<?php

namespace orignx\diject\exceptions;

use Psr\Container\ContainerExceptionInterface;

class ContainerException implements ContainerExceptionInterface
{
    private $exception;
    
    public function __construct($message, $exception = null) 
    {
        parent::__construct($message);
        $this->exception = $exception;
    }
}   
