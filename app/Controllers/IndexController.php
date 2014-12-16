<?php

namespace Vectorface\SnappyTutorial\Controllers;

class IndexController extends BaseController
{
    public function indexAction()
    {
        return array(
            'content' => 'Hello SnappyRouter!'
        );
    }
}
