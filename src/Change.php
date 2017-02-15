<?php
    class Change
    {
        public $amount;

        function makeChange($new_amount)
        {
            $dollar_amount = floor($new_amount);
            $remainder = $new_amount - $dollar_amount;
            $quarters = floor(($remainder*100)/25);
            $remainder = $new_amount - (($dollar_amount) + ($quarters * .25));
            $dimes = floor(($remainder*100)/10);
            $remainder = $remainder - ($dimes * .10);
            $nickels = floor(($remainder*100)/5);
            $remainder = $remainder - ($nickels * .05);
            $pennies = ceil($remainder);
            $change_arr = array('dollar_amount'=>$dollar_amount, 'quarters'=>$quarters, 'dimes'=>$dimes, 'nickels'=>$nickels, 'pennies'=>$pennies );
            return $change_arr;
        }

        // function save()
        // {
        //     array_push($_SESSION['word'], $this);
        // }
        //
        // static function getAll()
        // {
        //     return $_SESSION['word'];
        // }
    }
 ?>
