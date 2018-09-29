<?php
/**
 * Created by PhpStorm.
 * User: eduardoluz
 * Date: 2018-09-28
 * Time: 11:06 PM
 */

namespace eduluz1976\task;

/**
 * Class Condition
 * @package eduluz1976\task
 * @author Eduardo Luz <eduluz1976@gmail.com>
 * @link https://github.com/eduluz1976/task
 */
class Condition
{
    protected $expression;

    /**
     * @return mixed
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * @param mixed $expression
     * @return Condition
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Condition constructor.
     * @param bool|string $expression
     */
    public function __construct($expression=false)
    {
        if ($expression) {
            $this->setExpression($expression);
        }
    }

    /**
     * @return bool
     */
    public function test() {
        return true;
    }
}