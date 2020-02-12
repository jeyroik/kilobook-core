<?php
namespace kilobook\components\books;

use extas\components\Item;
use extas\components\players\THasOwner;
use extas\components\SystemContainer;
use extas\components\THasCreatedAt;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasUpdatedAt;
use kilobook\components\THasPages;
use kilobook\interfaces\books\IBook;
use kilobook\interfaces\books\IBookKind;
use kilobook\interfaces\books\IBookKindRepository;
use kilobook\interfaces\users\IUser;
use kilobook\interfaces\users\IUserRepository;

/**
 * Class Book
 * 
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class Book extends Item implements IBook
{
    use THasName;
    use THasDescription;
    use THasCreatedAt;
    use THasUpdatedAt;
    use THasOwner;
    use THasPages;

    /**
     * @return IUser[]
     */
    public function getAuthors(): array
    {
        /**
         * @var $repo IUserRepository
         */
        $repo = SystemContainer::getItem(IUserRepository::class);

        return $repo->all([IUser::FIELD__NAME => $this->getAuthorsNames()]);
    }

    /**
     * @return string[]
     */
    public function getAuthorsNames(): array
    {
        return $this->config[static::FIELD__AUTHORS] ?? [];
    }

    /**
     * @return IUser[]
     */
    public function getEditions(): array
    {
        /**
         * @var $repo IUserRepository
         */
        $repo = SystemContainer::getItem(IUserRepository::class);
        
        return $repo->all([IUser::FIELD__NAME => $this->getEditionsNames()]);
    }

    /**
     * @return string[]
     */
    public function getEditionsNames(): array
    {
        return $this->config[static::FIELD__EDITIONS] ?? [];
    }

    /**
     * @return IBookKind|null
     */
    public function getKind(): ?IBookKind
    {
        /**
         * @var $repo IBookKindRepository
         */
        $repo = SystemContainer::getItem(IBookKindRepository::class);
        
        return $repo->one([IBookKind::FIELD__NAME => $this->getKindName()]);
    }

    /**
     * @return string
     */
    public function getKindName(): string
    {
        return $this->config[static::FIELD__KIND] ?? '';
    }

    /**
     * @param string $format
     * 
     * @return false|int|string
     */
    public function getPublishedAt(string $format = '')
    {
        $date = $this->config[static::FIELD__PUBLISHED_AT] ?? 0;
        
        return $format ? date($format, $date) : $date;
    }

    /**
     * @param IUser[] $authors
     * 
     * @return IBook
     */
    public function setAuthors(array $authors): IBook
    {
        $names = [];
        
        foreach ($authors as $author) {
            $names[] = $author->getName();
        }
        
        return $this->setAuthorsNames($names);
    }

    /**
     * @param string[] $authorsNames
     * 
     * @return IBook
     */
    public function setAuthorsNames(array $authorsNames): IBook
    {
        $this->config[static::FIELD__AUTHORS] = $authorsNames;
        
        return $this;
    }

    /**
     * @param IUser[] $editions
     * 
     * @return IBook
     */
    public function setEditions(array $editions): IBook
    {
        $names = [];
        
        foreach ($editions as $edition) {
            $names[] = $edition->getName();
        }
        
        return $this->setEditionsNames($names);
    }

    /**
     * @param string[] $editionsNames
     * 
     * @return IBook
     */
    public function setEditionsNames(array $editionsNames): IBook
    {
        $this->config[static::FIELD__EDITIONS] = $editionsNames;
        
        return $this;
    }

    /**
     * @param IBookKind $kind
     * 
     * @return IBook
     */
    public function setKind(IBookKind $kind): IBook
    {
        return $this->setKindName($kind->getName());
    }

    /**
     * @param string $kindName
     * 
     * @return IBook
     */
    public function setKindName(string $kindName): IBook
    {
        $this->config[static::FIELD__KIND] = $kindName;
        
        return $this;
    }

    /**
     * @param int $publishedAt
     * 
     * @return IBook
     */
    public function setPublishedAt(int $publishedAt): IBook
    {
        $this->config[static::FIELD__PUBLISHED_AT] = $publishedAt;
        
        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
