<?php

/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
|
| A set of generic validation-related functions.
|
*/

if ( ! function_exists('is_empty'))
{
    /**
     * A better function to check if a value is empty or null. Strings, arrays, and Objects are supported.
     *
     * @param mixed $value
     *
     * @return bool
     */
    function is_empty($value) : bool
    {
        if (is_null($value))
        {
            return true;
        }

        if (is_string($value))
        {
            if ($value === '')
            {
                return true;
            }
        }

        if (is_array($value))
        {
            if (count($value) === 0)
            {
                return true;
            }
        }

        if (is_object($value))
        {
            $value = (array) $value;

            if (count($value) === 0)
            {
                return true;
            }
        }

        return false;
    }
}
