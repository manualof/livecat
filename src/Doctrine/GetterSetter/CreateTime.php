<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/5
 * Time: 18:07:06
 */

namespace ApigilityLogic\Foundation\Doctrine\GetterSetter;


trait CreateTime
{
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;
        return $this;
    }

    public function getCreateTime()
    {
        return $this->create_time;
    }
}