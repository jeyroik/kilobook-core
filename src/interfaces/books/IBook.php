<?php
namespace kilobook\interfaces\books;

use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHasUpdatedAt;
use extas\interfaces\IItem;
use extas\interfaces\players\IHasOwner;
use kilobook\interfaces\IHasPages;
use kilobook\interfaces\users\IUser;

/**
 * Interface IBook
 *
 * @package kilobook\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IBook extends IItem, IHasName, IHasDescription, IHasCreatedAt, IHasUpdatedAt, IHasOwner, IHasPages
{
    const SUBJECT = 'kilobook.book';

    const FIELD__AUTHORS = 'authors';
    const FIELD__EDITIONS = 'editions';
    const FIELD__PUBLISHED_AT = 'published_at';
    const FIELD__KIND = 'kind';

    /**
     * @return IBookKind
     */
    public function getKind(): ?IBookKind;

    /**
     * @return string
     */
    public function getKindName(): string;

    /**
     * @param string $format
     *
     * @return string|int
     */
    public function getPublishedAt(string $format = '');

    /**
     * @return IUser[]
     */
    public function getAuthors(): array;

    /**
     * @return string[]
     */
    public function getAuthorsNames(): array;

    /**
     * @return IUser[]
     */
    public function getEditions(): array;

    /**
     * @return string[]
     */
    public function getEditionsNames(): array;

    /**
     * @param string[] $editionsNames
     *
     * @return IBook
     */
    public function setEditionsNames(array $editionsNames): IBook;

    /**
     * @param IUser[] $editions
     *
     * @return IBook
     */
    public function setEditions(array $editions): IBook;

    /**
     * @param string[] $authorsNames
     *
     * @return IBook
     */
    public function setAuthorsNames(array $authorsNames): IBook;

    /**
     * @param IUser[] $authors
     *
     * @return IBook
     */
    public function setAuthors(array $authors): IBook;

    /**
     * @param int $publishedAt
     *
     * @return IBook
     */
    public function setPublishedAt(int $publishedAt): IBook;

    /**
     * @param string $kindName
     *
     * @return IBook
     */
    public function setKindName(string $kindName): IBook;

    /**
     * @param IBookKind $kind
     *
     * @return IBook
     */
    public function setKind(IBookKind $kind): IBook;
}
