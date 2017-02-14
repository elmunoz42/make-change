<?php
    class Anagram
    {
        public $word;
        public $word_to_match;

        function getWord()
        {
            return $this->word;
        }

        function checkWord($new_word, $new_word_to_match )
        {
            $success_results=array();
            if ($new_word == $new_word_to_match) {
                array_push($success_results, $new_word);
            }
            else {
                array_push($success_results, "no match");
            }
            return $success_results[0];
        }

        function save()
        {
            array_push($_SESSION['word'], $this);
        }

        static function getAll()
        {
            return $_SESSION['word'];
        }
    }
 ?>
