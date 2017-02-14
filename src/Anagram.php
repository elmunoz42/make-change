<?php
    class Anagram
    {
        public $word;

        function __construct($word)
        {
            $this->word = $word;
        }

        function getWord()
        {
            return $this->word;
        }

        function checkWord()
        {
            
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
