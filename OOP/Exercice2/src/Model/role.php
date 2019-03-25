<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 3/25/2019
 * Time: 2:27 PM
 */

namespace Model;
class Role
{
    private $id;
    protected $label;

    public const ROLE_USER = 'ROLE_USER';

    public const ROLE_ADMIN = 'ROLE_ADMIN';

    /**
     * role constructor.
     * @param $label
     */
    public function __construct(string $label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;
    }


}