<?php
    class Anagram
    {
        public $word;
        public $word_to_match;
        public $success_results = array();

        function __construct($word, $word_to_match)
        {
            $this->word = $word;
            $this->word_to_match = $word_to_match;
        }

        function getWord()
        {
            return $this->word;
        }

        function checkWord($new_word, $new_word_to_match )
        {
            if ($new_word == $new_word_to_match) {
                array_push($this->success_results, $new_word);
            }
            return $this->success_results;
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
