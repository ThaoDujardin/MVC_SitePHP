<?php

use services\HelloService;

require_once '../app/core/Controller.php';
require_once '../app/services/HelloService.php';

class HelloWorldController extends Controller
{
    private HelloService $helloService;
    public function __construct()
    {
        $this->helloService  = new HelloService();
    }
    public function index():void
    {
      $this->view('hello_world', $this->helloService->hello(), ['name' => 'Salim']);
    }

    public function indexJson():void
    {
      $this->json(['title' => $this->helloService->hello(), 'name' => 'Salim']);
    }

    public function redirectToJson()
    {
        $this->redirectTo('/json.php');
    }
}
