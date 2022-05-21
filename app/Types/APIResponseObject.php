<?php

namespace App\Types;

/**
 * Object representation of API Response
 */
class APIResponseObject
{
    /**
     * Status
     * Zero equals to a perfect response without any error. Values greater then zero means success with warnings. Values less than zero means failure.
     *
     * @var int $status
     */
    public $status;

    /**
     * Message
     * There might be a message when the status is NOT zero.
     *
     * @var string|null $message
     */
    public $message;

    /**
     * Data
     *
     * @var mixed|null $data
     */
    public $data;
}
