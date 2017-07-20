<?php
namespace App;

class Serializer
{
    public function asHtml($request, $response, $content)
    {
        $response->headers->set('content-type', 'text/html');
        $response->setContent($content);
    }
}
