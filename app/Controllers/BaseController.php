<?php

namespace Vectorface\SnappyTutorial\Controllers;

use Vectorface\SnappyRouter\Controller\AbstractController;
use Vectorface\SnappyRouter\Handler\AbstractRequestHandler;
use Vectorface\SnappyRouter\Request\HttpRequest;

abstract class BaseController extends AbstractController
{

    public function initialize(HttpRequest $request, AbstractRequestHandler $handler)
    {
        parent::initialize($request, $handler);
        $this->viewContext['projectTitle'] = $this->get('projectTitle');
    }
}
