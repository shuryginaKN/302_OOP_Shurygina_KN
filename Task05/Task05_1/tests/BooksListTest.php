<?php

namespace App\Tests;

use App\Book;
use App\BooksList;
use PHPUnit\Framework\TestCase;

class BooksListTest extends TestCase
{
    private $book1;
    private $book2;
    private $book3;

    public function booksList()
    {
        $this->book1 = new Book();
        $this->book1  ->setTitle('PHP forever')
                ->setAuthors(['Gates B.','Smith J.'])
                ->setPublisher("O'Reily")
                ->setYear(2020);
        $this->book2 = new Book();
        $this->book2  ->setTitle('BOOK')
                ->setAuthors(['Author 1','Author 2', 'Author 3'])
                ->setPublisher("Publisher")
                ->setYear(2024);
        $this->book3 = new Book();
        $this->book3  ->setTitle('Чистый код. Создание анализ и рефакторинг')
                ->setAuthors(['Р. Мартин'])
                ->setPublisher("Питер")
                ->setYear(2022);
    }

    public function testCurrent()
    {
        $this->booksList();
        $bookslist = new BooksList();
        $bookslist->add($this->book1);
        $bookslist->add($this->book2);
        $bookslist->add($this->book3);
        $this->assertSame($this->book1, $bookslist->current());
        $bookslist->next();
        $this->assertSame($this->book2, $booksList->current());
    }

    public function testNext(): void
    {
        $this->booksList();
        $bookslist = new BooksList();
        $bookslist->add($this->book1);
        $bookslist->add($this->book2);
        $bookslist->add($this->book2);
        $this->assertSame($this->book1, $bookslist->current());
        $bookslist->next();
        $bookslist->next();
        $this->assertEquals(json_encode($this->book3), json_encode($bookslist->current()));
    }

    public function testValid(): void
    {
        $this->booksList();
        $bookslist = new BooksList();
        $bookslist->add($this->book1);
        $bookslist->add($this->book2);
        $bookslist->add($this->book3);
        $bookslist->next();
        $this->assertTrue($bookslist->valid());
        $bookslist->next();
        $this->assertTrue($bookslist->valid());
        $bookslist->next();
        $this->assertFalse($bookslist->valid());
    }

    public function testRewind(): void
    {
        $this->booksList();
        $bookslist = new BooksList();
        $bookslist->add($this->book1);
        $bookslist->add($this->book2);
        $bookslist->add($this->book3);
        $bookslist->next();
        $bookslist->next();
        $bookslist->next();
        $this->assertFalse($bookslist->current());
        $bookslist->rewind();
        $this->assertSame($this->book1, $bookslist->current());
    }

    public function testKey(): void
    {
        $this->booksList();
        $bookslist = new BooksList();
        $bookslist->add($this->book1);
        $bookslist->add($this->book2);
        $bookslist->add($this->book3);
        $this->assertSame($this->book1->getId(), $bookslist->key());
        $bookslist->next();
        $this->assertSame($this->book2->getId(), $bookslist->key());
        $bookslist->next();
        $this->assertSame($this->book3->getId(), $bookslist->key());
    }
}
