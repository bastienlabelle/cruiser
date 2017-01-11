<?php
namespace Cruiser;

class Response
{
    public $version = '1.1';
    public $statusCode =  200;
    public $statusText = 'OK';
    public $headers = [];
    public $body;

    public function render($file = '')
    {
        
    }
}
