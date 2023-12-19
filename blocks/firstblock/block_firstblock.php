<?php
class block_firstblock extends block_base {
    public function init() {
        $this->title = get_string('FirstBlock', 'block_firstblock');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.


    //To get our block to actually display something on screen
    public function get_content() {
        //if the content of this page is Not Empty--> then display it
        if ($this->content !== null) {
          return $this->content;
        }     
        $this->content         =  new stdClass;
        $this->content->text   = 'Made by Liza';
        $this->content->footer = 'Footer here...';
     
        return $this->content;
    }
}