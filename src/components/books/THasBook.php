<?php
namespace kilobook\components\books;

use extas\components\SystemContainer;
use kilobook\interfaces\books\IBook;
use kilobook\interfaces\books\IBookRepository;
use kilobook\interfaces\books\IHasBook;

/**
 * Trait THasBook
 *
 * @property $config
 *
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
trait THasBook
{
    /**
     * @return IBook|null
     */
    public function getBook(): ?IBook
    {
        /**
         * @var $repo IBookRepository
         */
        $repo = SystemContainer::getItem(IBookRepository::class);

        return $repo->one([IBook::FIELD__NAME => $this->getBookName()]);
    }

    /**
     * @return string
     */
    public function getBookName(): string
    {
        return $this->config[IHasBook::FIELD__BOOK_NAME] ?? '';
    }

    /**
     * @param IBook $book
     *
     * @return $this
     */
    public function setBook(IBook $book)
    {
        return $this->setBookName($book->getName());
    }

    /**
     * @param string $bookName
     *
     * @return $this
     */
    public function setBookName(string $bookName)
    {
        $this->config[IHasBook::FIELD__BOOK_NAME] = $bookName;

        return $this;
    }
}
