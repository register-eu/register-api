<?php
namespace RegisterEu;

use RegisterEu\Handler\HmacHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client as GuzzleClient;

class Client extends GuzzleClient
{
    public function __construct(array $config = [])
    {
        if (isset($config['handler_stack']) && $config['handler_stack'] instanceof HandlerStack) {
            $handlerStack = $config['handler_stack'];
        } else {
            $handlerStack = HandlerStack::create();
        }

        $handlerStack->push(
            new HmacHandler($config['registereu_api_key'], $config['registereu_api_secret'])
        );

        $config['handler'] = $handlerStack;
        
        parent::__construct($config);
    }
}