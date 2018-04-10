<?php

namespace CatalystWP\Atom\models;

class Neighborhood extends \CatalystWP\Nucleus\Model
{
    // Registers a new custom post type
    public static $resource = array(
        'labels' => array(),
        'options' => array(
            'has_archive' => 'neighborhoods',
            'supports' => array('title')
        ),
        'query' => array(
            'posts_per_page' => 3
        )
    );

    public static $relations = array(
        'has_many' => 'floorplan'
        // 'belongs_to' => 'area'
    );

    // Define which properties we want to make available in our template
    public static $allowed = array(
        'ID',
        'post_title',
        'city',
        'state',
        'description'
    );

    public function initialize($data = array())
    {
        $this->setCityState();
        $this->setPermalink();

        // Relationship property should create something like this:
        // $this->floorplans;
    }

    private function setCityState()
    {
        if (isset($this->city) && isset($this->state)) {
            $this->cityState = $this->city . ', ' . $this->state;
        }
    }

    private function setPermalink()
    {
        if (isset($this->ID)) {
            $this->permalink = get_the_permalink($this->ID);
        }
    }
}
