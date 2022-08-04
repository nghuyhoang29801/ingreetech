<?php

    /**
     * Phat Mai 30-07-2022
     * this module make sanitization and validation more concise.
     */

    require_once __DIR__ . '/sanitization.php';
    require_once __DIR__ . '/validation.php';



    function filter(array $data, array $fields, array $messages=[]) {
        $sanitization_rules = [];
        $validation_rules  = [];
    
        foreach ($fields as $field=>$rules) {
            if (strpos($rules, '|')) {
                [$sanitization_rules[$field], $validation_rules[$field] ] =  explode('|', $rules, 2);
            } else {
                $sanitization_rules[$field] = $rules;
            }
        }
    
        $inputs = sanitize($data, $sanitization_rules);
        $errors = validate($inputs, $validation_rules, $messages);
    
        return [$inputs, $errors];
    }
