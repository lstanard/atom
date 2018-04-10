<?php

namespace CatalystWP\Atom\controllers;

class NeighborhoodController extends \CatalystWP\Nucleus\Controller
{
    public function initialize($data)
    {
        $this->view->display($data);

        if (is_archive()) {
            // don't need to do anything really
            // $data->getArea();
        }

        if (is_singular()) {
            // $data->getPlans();
        }
    }
}
