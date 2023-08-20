<?php

namespace BugBuster\ClientHintsRequestBundle\EventListener;

use Symfony\Component\HttpKernel\Event\ResponseEvent;

class RequestListener
{
    public function onKernelResponse(ResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            // don't do anything if it's not the master request
            return;
        }
        
        $response = $event->getResponse();
        
        // set a single header
        $response->headers->set("Example-Header", "ExampleValue");
    }
}