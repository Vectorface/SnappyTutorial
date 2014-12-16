<?php

namespace Vectorface\SnappyTutorial\Models;

use Vectorface\SnappyRouter\Di\Di;

class TutorialDi extends Di
{

    public function __construct()
    {
        parent::__construct($this->getDiArray());
    }

    protected function getDiArray()
    {
        return array(
            'projectTitle' => function(Di $di) {
                return 'SnappyRouter Tutorial';
            }
        );
    }
}
