<?php
    /**
     * Phat Mai 29-07-2022
     * this module is help to sanitization input form.
     */

     /**
      * this mapping rule with filter.
      */
    const FILTERS = [
        'string' => FILTER_SANITIZE_STRING,
        'string[]' => [
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_REQUIRE_ARRAY
        ],
        'email' => FILTER_SANITIZE_EMAIL,
        'int' => [
            'filter' => FILTER_SANITIZE_NUMBER_INT,
            'flags' => FILTER_REQUIRE_SCALAR
        ],
        'int[]' => [
            'filter' => FILTER_SANITIZE_NUMBER_INT,
            'flags' => FILTER_REQUIRE_ARRAY
        ],
        'float' => [
            'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
            'flags' => FILTER_FLAG_ALLOW_FRACTION
        ],
        'float[]' => [
            'filter' => [FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION],
            'flags' => FILTER_REQUIRE_ARRAY
        ],
        'url' => FILTER_SANITIZE_URL,
    ];

    /**
     * array_trim: help to trim array value
     * @param (array) $item
     * @return (array)
     */
    function array_trim(array $items)
    {
        return array_map(function ($item) {
            if (is_string($item)) {
                return trim($item);
            } elseif (is_array($item)) {
                return array_trim($item);
            } else
                return $item;
        }, $items);
    }


    /**
    * Sanitize the inputs based on the rules an optionally trim the string
    * @param (array) $inputs
    * @param (array) $fields
    * @param (int) $default_filter FILTER_SANITIZE_STRING
    * @param (array) $filters FILTERS
    * @param (bool) $trim
    * @return (array)
    */
    function sanitize(array $inputs, array $fields = [], int $default_filter = FILTER_SANITIZE_STRING, array $filters = FILTERS, bool $trim = true)
    {
        if ($fields) {
            $options = array_map(
                function($field) use($filters) {
                    $field = trim($field);
                    return $filters[$field];
                } , $fields
            );
            $data = filter_var_array($inputs, $options);
        } else {
            $data = filter_var_array($inputs, $default_filter);
        }

        return $trim ? array_trim($data) : $data;
    }