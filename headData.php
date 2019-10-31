<?php

    class HeadData {

        /*
            This card is purely being used to create the HTML head data. Change the meta tags as you wish, or simply add other meta tags you prefer
        */

        private $title = 'Peter Osburg - Healthcare IT experiences since 2009';
        private $description = 'Info page of Peter Osburg, software developer and product manager';
        private $stylesheet = 'stylez_2.css';
        private $favicon = 'favicon.jpg';

        public function createHtmlHead() {
            echo '<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
            echo '<link rel="stylesheet" href="'.$this->stylesheet.'">';
            echo '<meta name="description" content="'.$this->description.'">';
            echo '<title>'.$this->title.'</title>';
            echo '<link rel="shortcut icon" type="image/x-icon" href="'.$this->favicon.'">';
        }
    }


?>