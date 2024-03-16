<?php

namespace App;

use App\Book;
// require_once 'Book.php';

class BooksList
{
    private $books = array();

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    public function count() : int 
    {
        return count($this->books);
    }

    public function get(int $n) : Book
    {
        if ($n > 0 && $n <= count($this->books))
        {
            return $this->books[$n-1];
        }
    }

    public function store(string $fileName)
    {
        $result = file_put_contents($fileName, serialize($this->books));

        if ($result === false) {
            echo "Ошибка при записи в файл";
        } else {
            echo "Данные успешно записаны в файл";
        }
    }

    public function load(string $fileName)
    {
        if (file_exists($fileName)) {
            $this->books = unserialize(file_get_contents($fileName));
        } else {
            echo 'Файл не найден';
        }
    }

    
}

?>