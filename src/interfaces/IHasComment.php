<?php
namespace kilobook\interfaces;

/**
 * Interface IHasComment
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasComment
{
    const FIELD__COMMENT = 'comment';

    /**
     * @return string
     */
    public function getComment(): string;

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment(string $comment);
}
