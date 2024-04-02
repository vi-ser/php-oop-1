<?php
class Movie
{
    public $title;
    public $description;
    public $year;

    /**
     * __construct
     *
     * @param  string $_title
     * @param  string $_description
     * @param  int $_year
     */
    function __construct($_title, $_description, $_year)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->year = $_year;
    }
    public function printInfo()
    {
        echo "Title: " . $this->title . "\n";
        echo "Year: " . $this->year . "\n";
        echo "Description: " . $this->description . "\n";
    }
}