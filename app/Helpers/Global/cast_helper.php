<?php

/*
|--------------------------------------------------------------------------
| Cast
|--------------------------------------------------------------------------
|
| A set of cast-related functions.
|
*/

if ( ! function_exists('get_sql_from_eloquent'))
{
    /**
     * A Function to dump SQL query out from an Eloquent object.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The Eloquent object.
     *
     * @return string The SQL query.
     */
    function get_sql_from_eloquent(\Illuminate\Database\Eloquent\Builder $query) : string
    {
        $sql = $query->toSql();

        foreach($query->getBindings() as $binding)
        {
            $value = is_numeric($binding) ? $binding : "'{$binding}'";

            $sql = preg_replace('/\?/', $value, $sql, 1);
        }

        return $sql;
    }
}
