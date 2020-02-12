<?php
namespace kilobook\components\books;

use extas\components\repositories\Repository;
use kilobook\interfaces\books\IBookKindRepository;

/**
 * Class BookKindRepository
 *
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookKindRepository extends Repository implements IBookKindRepository
{
    protected $itemClass = BookKind::class;
    protected $idAs = '';
    protected $pk = BookKind::FIELD__NAME;
    protected $name = 'books_kinds';
    protected $scope = 'kilobook';
}
