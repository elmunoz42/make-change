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
            $search_result_type="not integer";
            foreach($match_array as $letter){
                $search_result = array_search($letter, $word_array);
                $search_result_type = gettype($search_result);
                if($search_result_type=="integer"){
                    array_push($success_results, $letter);
                }
            }
            if ($search_result_type!="integer"){
                $success_string = "no match";
            }
            elseif (count($success_results)<count($match_array)) {
                $success_string = "no match";
            }
            elseif (count($match_array)>count($word_array)) {
                $success_string = "no match";
            }
            else {
                // $success_string = implode("", $success_results);
                $success_string = $new_word_to_match;
            }


            return $success_string;
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
