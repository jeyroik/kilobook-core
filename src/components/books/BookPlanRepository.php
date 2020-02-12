<?php
namespace kilobook\components\books;

use extas\components\repositories\Repository;
use kilobook\interfaces\books\IBookPlanRepository;

/**
 * Class BookPlanRepository
 * 
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookPlanRepository extends Repository implements IBookPlanRepository
{
    protected $itemClass = BookPlan::class;
    protected $idAs = BookPlan::FIELD__NAME;
    protected $pk = BookPlan::FIELD__NAME;
    protected $name = 'book_plans';
    protected $scope = 'kilobook';
}
