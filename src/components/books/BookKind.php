<?php
namespace kilobook\components\books;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use kilobook\interfaces\books\IBookKind;

/**
 * Class BookKind
 * 
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookKind extends Item implements IBookKind
{
    use THasName;
    use THasDescription;
    
    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
