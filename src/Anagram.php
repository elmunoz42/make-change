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
            $word_array=str_split($new_word);
            $match_array=str_split($new_word_to_match);
            sort($word_array);
            sort($match_array);
            $word_string=implode(" ",$word_array);
            $match_string=implode(" ",$match_array);

            // if ($new_word == $new_word_to_match) {
            //     array_push($success_results, $new_word_to_match);
            // }
            if ($word_string===$match_string) {
                array_push($success_results, $new_word_to_match);
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
