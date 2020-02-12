<?php
namespace kilobook\components;

use kilobook\interfaces\IHasComment;

/**
 * Trait THasComment
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasComment
{
    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->config[IHasComment::FIELD__COMMENT] ?? '';
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment(string $comment)
    {
        $this->config[IHasComment::FIELD__COMMENT] = $comment;

        return $this;
    }
}
