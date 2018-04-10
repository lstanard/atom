<?php

namespace CatalystWP\Atom\views;

class FloorplanView extends \CatalystWP\Nucleus\View
{
    public function initialize()
    {
        $this->template = array(
            'detail' => 'pages/floorplan/detail',
            'overview' => 'pages/floorplan/overview'
        );
    }
}
