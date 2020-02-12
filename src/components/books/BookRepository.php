<?php
namespace kilobook\components\books;

use extas\components\repositories\Repository;
use kilobook\interfaces\books\IBookRepository;

/**
 * Class BookRepository
 * 
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookRepository extends Repository implements IBookRepository
{
    protected $scope = 'kilobook';
    protected $name = 'books';
    protected $pk = Book::FIELD__NAME;
    protected $idAs = '';
    protected $itemClass = Book::class;
}
