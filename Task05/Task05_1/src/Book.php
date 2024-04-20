<?php

namespace App;

class Book
{
    private $id;
    private static $id_increment = 1;

    private $title;
    private $authors = array();
    private $publisher;
    private $year;

    public function __construct()
    {
        $this->id = self::$id_increment++;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setAuthors($authors)
    {
        $this->authors = $authors;
        return $this;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthors()
    {
        $result = "";
        foreach ($this->authors as $i => $author) {
            $result .= "$author \n";
        }
        return $result;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function __toString()
    {
        $result = "Id: $this->id \n" .
                "Название: $this->title \n";
        foreach ($this->authors as $i => $author) {
            $result .= "Автор" . ($i + 1) . ": $author \n";
        }
        $result .= "Издательство: $this->publisher \n" .
                "Год: $this->year  \n";
        return $result;
    }
}
