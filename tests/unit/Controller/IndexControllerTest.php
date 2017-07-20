<?php
namespace App\Controller;

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

class IndexControllerTest extends TestCase
{
    public function testSayHello()
    {
        $twig = $this->prophesize("Twig_Environment");
        $twig->render(Argument::Any(), Argument::Any())->willReturn("hello");

        $controller = new IndexController($twig->reveal());

        $response = $controller->indexAction(null, null);

        $this->assertEquals("hello", $response);
    }
}

