<?php
namespace kilobook\interfaces\books;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;

/**
 * Interface IBookKind
 *
 * @package kilobook\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IBookKind extends IItem, IHasName, IHasDescription
{
    const SUBJECT = 'kilobook.book.kind';
}
