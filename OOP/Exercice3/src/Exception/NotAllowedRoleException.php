<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 3/26/2019
 * Time: 12:24 PM
 */
namespace Exception;

use Throwable;

class NotAllowedRoleException extends \RuntimeException
{
    public function __construct(array $roles, string $label, string $message = "", int $code = 0,Throwable $previous = null) {
        $tmpMessage = 'The role'.$label.'is not allowed';
        $tmpMessage .= 'only'.implode(',', $roles).'are allowed';
        $tmpMessage .= $message;
        parent::__construct($message,$code,$previous);}


}