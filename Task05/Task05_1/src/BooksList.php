<?php

namespace App;

use App\Book;
use Iterator;

class BooksList implements Iterator
{
    private $books = array();

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function get(int $n): Book
    {
        if ($n > 0 && $n <= count($this->books)) {
            return $this->books[$n - 1];
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

    public function rewind(): void
    {
        reset($this->books);
    }

    public function key(): int
    {
        return current($this->books)->getId();
    }

    public function current(): Book | bool
    {
        return current($this->books);
    }

    public function next(): void
    {
        next($this->books);
    }

    public function valid(): bool
    {
        return $this->current() !== false;
    }
}
