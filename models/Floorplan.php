<?php

namespace CatalystWP\Atom\models;

class Floorplan extends \CatalystWP\Nucleus\Model
{
    public static $resource = array(
        'options' => array(
            'has_archive' => 'plans',
            'supports' => array('title')
        )
    );

    public static $relations = array(
        'belongs_to' => 'neighborhood'
    );

    public function initialize($data = array())
    {
        $this->setPermalink();

        // Relationship property should create something like this:
        // $this->neighborhood;
    }

    private function setPermalink()
    {
        if (isset($this->ID)) {
            $this->permalink = get_the_permalink($this->ID);
        }
    }
}
