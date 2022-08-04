<?php
    /** 
     * Phat Mai 27-07-2022.
     * this module is help to validation input form.
     */

     require_once __DIR__ .'/../../Model/connectdb.php';
     
    /**
     * specify the field name and list of rule to validate that rule.
     * $fields = [
     *  'fieldname' : 'rules'.
     * ]
     * details:
     * 
     *      Rule            |   Rule name       |       Parameter   |   Meaning
     * -------------------------------------------------------------------------------------------------------
     *  required            |   required        |       No          |   The field must not empty
     *  alphanumeric        |   alphanumeric	|       No          |   The field just contains letters and numbers without the space and others.
     *  letters             |   letters         |       No          |   The field just contains letters without space.
     *  numbers             |   numbers         |       No          |   the field just contains only the numbers. Any others is wrong.
     *  lettersAndSpace     |   lettersAndSpace |       No          |   The field just contains letters and Spaces. Any others is not valid.
     *  numbersAndSpace     |   numbersAndSpace |       No          |   The field just contains numbers and Spaces. Any others is not allowed.
     *  email	            |   email           |   	No	        |   The field is a valid email address
     *  secure  	        |   secure          |   	No          |	The field must have between 8 and 64 characters and contain at least one number, one upper case letter, one lower case letter, and one special character. This rule is for the password field.
     *  min: <min>          |	min	            |       1 integer   |   specifies the minimum length of the field 
     *  max: <max>          |   max             |   	1 integer   |   specifies the maximum length of the field	The length of the field must be less than or equal to min length, e.g., 255
     *  same: <string>      |   same            |       1 string    |   The field value must be the same as the value of the field which its name is string
     *  between:<min,max>   |	between         |	    2 integer   |   The length of the field must be between min and max.
     *  unique:<table,column>|  unique          |       2 string    |   The field value must be unique in the column of the table in a database
     */

    /**
     * this define the defalue validation error message.
     */
    const DEFAULT_VALIDATION_ERRORS = [
        'required' => 'Please enter the %s',
        'email' => 'The %s is not a valid email address',
        'min' => 'The %s must have at least %s characters',
        'max' => 'The %s must have at most %s characters',
        'between' => 'The %s must have between %d and %d characters',
        'same' => 'The %s must match with %s',
        'alphanumeric' => 'The %s should have only letters and numbers. Space and any letter is not permitted.',
        'secure' => 'The %s must have between 8 and 64 characters and contain at least one number, one upper case letter, one lower case letter and one special character',
        'unique' => 'The %s already exists',
        'letters' => 'The %s only contain letters',
        'numbers'=> 'The %s only contain numbers',
        'lettersAndSpace' => 'The %s only contain letter and spaces.',
        'numbersAndSpace' => 'The %s only contain numbers and spaces',
    ];     

    /**
     * Validate : use to validate and return error array if error happen.
     * @param (array) $data: the data array that contain fieldname and value to validate.
     * @param (array) $fields: this is specify the field and rules that validate that field.
     * @param (array) $messages: this is specify the customer fields and rules and corresponding error message.
     * @return (array) $errors : this contain the field and error message corresponding.
     */
    function validate(array $data,array $fields,array $messages = []){
        
        // this reused function get string and split this string by separator.
        $split = function ($str, $separator){
            return array_map('trim',explode($separator,$str));
        };

        // get rules with their customer error message.
        $rule_messages = array_filter($messages, function($message){
                            return is_string($message);
                        });
        // overwrite the default message that dulicate with the customer error message.
        $validation_errors = array_merge(DEFAULT_VALIDATION_ERRORS, $rule_messages);

        // return errors.
        $errors = [];
        foreach($fields as $field => $option){
            
            $rules = $split($option, '|');

            foreach ($rules as $rule){
                
                // get params if it is contained in rule
                $params = [];
                // if rule have params
                if(strpos($rule,':')){
                    [$rule_name, $param_str] = $split($rule, ':');
                    $params = $split($param_str,',');
                }else{
                    $rule_name = trim($rule);
                }

                // the callback is:
                $fn = 'is_' . $rule_name;

                if(is_callable($fn)){
                    $pass = $fn($data,$field,...$params);
                    if(!$pass){

                        $errors[$field] = sprintf(
                            $messages[$field][$rule_name] ?? $validation_errors[$rule_name],
                            $field,
                            ...$params
                        );
                    }
                }
            }
        }

        return $errors;
    }

    /**
     * is_required : check not empty
     * @param (array) $data
     * @param (string) $field
     * @return (bool)
     */
    function is_required (array $data, string $field){
        return isset($data[$field]) && trim($data[$field]) !== '';
    }

    
    /**
     * is_letters : check contain only letters
     * @param (array) $data
     * @param (string) $field
     * @return (bool)
     */
    function is_letters (array $data, string $field){
        if (!isset($data[$field])) {
            return true;
        }
        return ctype_alpha($data[$field]);
    }

    /**
     * is_numbers : check contain only numbers.
     * @param (array) $data
     * @param (string) $field
     * @return (bool)
     */
    function is_numbers (array $data, string $field){
        if (!isset($data[$field])) {
            return true;
        }
        return ctype_digit($data[$field]);
    }

    /**
     * is_lettersAndSpace : check contain only letters and spaces.
     * @param (array) $data
     * @param (string) $field
     * @return (bool)
     */    
    function is_lettersAndSpace(array $data, string $field){
        if (!isset($data[$field])) {
            return true;
        }
        $str = $data[$field];
        $str = preg_replace("/\s+/","",$str);
        return ctype_alpha( $str );
    }


    /**
     * is_numbersAndSpace : check contain only numbers and spaces.
     * @param (array) $data
     * @param (string) $field
     * @return (bool)
     */    
    function is_numbersAndSpace(array $data, string $field){
        if (!isset($data[$field])) {
            return true;
        }
        $str = $data[$field];
        $str = preg_replace("/\s+/","",$str);
        return ctype_digit( $str );
    }    

    /**
     * is_email: check value is a valid email
     * @param (array) $data
     * @param (string) $field
     * @return (bool)
     */
    function is_email(array $data, string $field)
    {
        if (empty($data[$field])) {
            return true;
        }

        return filter_var($data[$field], FILTER_VALIDATE_EMAIL);
    }    

    /**
     * is_min: string has at least min length
     * @param (array) $data
     * @param (string) $field
     * @param (int) $min
     * @return (bool)
     */
    function is_min(array $data, string $field, int $min): bool
    {
        if (!isset($data[$field])) {
            return true;
        }

        return mb_strlen($data[$field]) >= $min;
    }

    /**
     * is_max: string cannot exceed max length
     * @param (array) $data
     * @param (string) $field
     * @param (int) $max
     * @return (bool)
     */
    function is_max(array $data, string $field, int $max): bool
    {
        if (!isset($data[$field])) {
            return true;
        }

        return mb_strlen($data[$field]) <= $max;
    }

    /**
     * is_between: string must have length in range [min:max].
     * @param (array) $data
     * @param (string) $field
     * @param (int) $min
     * @param (int) $max
     * @return (bool)
     */
    function is_between(array $data, string $field, int $min, int $max): bool
    {
        if (!isset($data[$field])) {
            return true;
        }

        $len = mb_strlen($data[$field]);
        return $len >= $min && $len <= $max;
    }

    /**
     * is_same: a string equals the other
     * @param (array) $data
     * @param (string) $field
     * @param (string) $other
     * @return (bool)
     */
    function is_same(array $data, string $field, string $other): bool
    {
        if (isset($data[$field], $data[$other])) {
            return $data[$field] === $data[$other];
        }

        if (!isset($data[$field]) && !isset($data[$other])) {
            return true;
        }

        return false;
    }

    /**
     * is_alphanumeric: a string just contain letters and numbers.
     * @param (array) $data
     * @param (string) $field
     * @return (bool)
     */
    function is_alphanumeric(array $data, string $field): bool
    {
        if (!isset($data[$field])) {
            return true;
        }

        return ctype_alnum($data[$field]);
    }

    /**
     * is_secure: a password is secure
     * @param (array) $data
     * @param (string) $field
     * @return (bool)
     */
    function is_secure(array $data, string $field): bool
    {
        if (!isset($data[$field])) {
            return false;
        }
        // $pattern = "#.*^(?=.{8,64})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#";
        $lo ="[a-z]";
        $up = "[A-Z]";
        $nu = "[0-9]";
        $pattern = "#.*^(?=.{8,64})(?=.*\W)?(?=.*$lo)(?=.*\W)?(?=.*$up)(?=.*\W)?(?=.*$nu)(?=.*\W).*$#";
        return preg_match($pattern, $data[$field]);
    }   
    


    /**
     * is_unique: the value is unique in the column of a table
     * @param (array) $data
     * @param (string) $field
     * @param (string) $table
     * @param (string) $column
     * @return (bool)
     */
    function is_unique(array $data, string $field, string $table, string $column): bool
    {
        if (!isset($data[$field])) {
            return true;
        }

        $sql = "SELECT $column FROM $table WHERE $column = ?";
        $db_class = new DB_Manipulation();
        $db =$db_class->get_connection();
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $data[$field]);

        $stmt->execute();

        // return $stmt->get_result() === false;
        return intval($stmt->get_result()->num_rows) === 0;

    }    