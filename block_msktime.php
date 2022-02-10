<?php
class block_msktime extends block_base {
    public function init() {
        $this->title = get_string('msktime', 'block_msktime');
		$this->version = 2004111200;
    }
	public function get_content() {
    if ($this->content == null) {
      $this->content =  new stdClass;
    }

    
    $this->content->text  = date("H:i:s");
    return $this->content;
}
}