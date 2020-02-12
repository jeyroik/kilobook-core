<?php
namespace kilobook\interfaces\books;

/**
 * Interface IHasBook
 *
 * @package kilobook\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IHasBook
{
    const FIELD__BOOK_NAME = 'book_name';

    /**
     * @return IBook
     */
    public function getBook(): ?IBook;

    /**
     * @return string
     */
    public function getBookName(): string;

    /**
     * @param IBook $book
     *
     * @return $this
     */
    public function setBook(IBook $book);

    /**
     * @param string $bookName
     *
     * @return $this
     */
    public function setBookName(string $bookName);
}
