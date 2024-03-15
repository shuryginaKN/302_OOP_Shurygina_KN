<?php

// namespace Vector;

class Book
{
    private $id;
    private static $id_increment = 1;

    private $title;
    private $authors = array();
    private $publisher;
    private $year;

    public function __construct($x, $y, $z)
    {
        $this->$id = self::$id_increment++;
        echo "id" . $id . PHP_EOL;
    }

    public function setTitle($title)
    {
        return new self($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthors($authors)
    {
        $this->authors = $authors;
    }

    public function getAuthors()
    {
        return $this->authors;
    }
    
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function __toString()
    {
        return "Id: $this->id \n 
                Название: $this->title \n
                Автор1: $this->authors \n
                Издательство: $this->publisher \n
                Год: $this->year";
    }
}
