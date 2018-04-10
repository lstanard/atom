<?php

namespace CatalystWP\Atom\views;

class NeighborhoodView extends \CatalystWP\Nucleus\View
{
    public function initialize()
    {
        $this->template = array(
            'detail' => 'pages/neighborhood/detail',
            'overview' => 'pages/neighborhood/overview'
        );
    }
}
