<?php

require_once 'Book.php';
require_once 'BooksList.php';

function runTest()
{
    $book1 = new Book();
    $book1  ->setTitle('PHP forever')
            ->setAuthors(['Gates B.','Smith J.'])
            ->setPublisher("O'Reily")
            ->setYear(2020);
    echo    "Ожидается:" . PHP_EOL .
            "1" . PHP_EOL .
            "PHP forever" . PHP_EOL .
            "Gates B." . PHP_EOL .
            "Smith J." . PHP_EOL .
            "O'Reily" . PHP_EOL .
            "2020" . PHP_EOL . PHP_EOL;
    echo    "Получено:" . PHP_EOL . 
            $book1->getId() . PHP_EOL .
            $book1->getTitle() . PHP_EOL .
            $book1->getAuthors() .
            $book1->getPublisher() . PHP_EOL .
            $book1->getYear() . PHP_EOL . PHP_EOL;

    $booklist = new BooksList();
    $booklist   ->add($book1);

    echo    "Ожидается: 1" . PHP_EOL;
    echo    "Получено: " .  $booklist->count() . PHP_EOL . PHP_EOL;

    $book2 = new Book();
    $book2  ->setTitle('BOOK')
            ->setAuthors(['Author 1','Author 2', 'Author 3'])
            ->setPublisher("Publisher")
            ->setYear(2024);

    $booklist   ->add($book2);

    echo    "Ожидается:" . PHP_EOL .
            "Id: 2" . PHP_EOL .
            "Название: BOOK" . PHP_EOL .
            "Автор1: Author 1" . PHP_EOL .
            "Автор2: Author 2" . PHP_EOL .
            "Автор3: Author 3" . PHP_EOL .
            "Издательство: Publisher" . PHP_EOL .
            "Год: 2024" . PHP_EOL . PHP_EOL;
    echo    "Получено: " . PHP_EOL .  
            $booklist->get(2) . PHP_EOL;

    $fileName = 'C:\OOP\302_OOP_Shurygina_KN\Task03\file.txt';
    echo    "Ожидается: Данные успешно записаны в файл" . PHP_EOL;
    echo    "Получено: ";
    $booklist   ->store($fileName);
    echo PHP_EOL . PHP_EOL;

    echo    "Ожидается: Файл не найден" . PHP_EOL;
    echo    "Получено: ";
    $booklist   ->load('C:\OOP\302_OOP_Shurygina_KN\Task03\kbl.txt');
    echo PHP_EOL . PHP_EOL;

    
}
