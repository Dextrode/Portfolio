<?php

class Artifact {

    static protected $db;
    public $id;
    public $title;
    public $header;
    public $date;
    public $goal;
    public $skills;
    public $body;
    public $images;
    public $thumbnail;
    public $link;

    function __construct($properties) {

        $this->id = $properties['id'];
        $this->title = $properties['title'];
        $this->header = $properties['header'];
        $this->date = $properties['date'];
        $this->goal = $properties['goal'];
        $this->skills = $properties['skills'];
        $this->body = $properties['body'];
        $this->images = $properties['images'];
        $this->thumbnail = $properties['thumbnail'];
        $this->link = $properties['link'];
    }
}
