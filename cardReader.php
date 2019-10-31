<?php 
    
    class cardReader {

        /*
            use the cards.json to add as many cards as you wish. content of each card should be placed in a separate html file:
            that eases working with IDEs, especially for better formatting and syntax highlighting - at least that was my rational ;)
        */

        private $cardsJsonFileName = 'cards.json';
        private $cards;
        
        public function cardReader() {
            // read the cards from json file
            $this->cards = $this->readFile($this->cardsJsonFileName);

            // print all cards on screen
            $this->echoCards();
        }

        private function echoCards() {
            for($i = 0; $i < sizeof($this->cards); $i++){
                echo '<div id="personal_card" class="card">';

                if($i == 0) {
                    // first card should have the profile pic and no title
                    echo '<h1 class="card_head dont_show">'.$this->cards[$i]['title'].'</h1>';
                    echo '<img src="me.jpg" id="profile_pic">';
                }
                else
                    // all other cards should be displayed with title and text
                    echo '<h1 class="card_head highlight">'.$this->cards[$i]['title'].'</h1>';
                               
                echo file_get_contents($this->cards[$i]['text_html']);
                    
                echo '</div>';
                
            }
        }

        private function readFile($fileName) {
            $strJsonFileContents = file_get_contents($fileName);

            $cardsArray = json_decode($strJsonFileContents, true);
            return $cardsArray;            
        }

    }

?>