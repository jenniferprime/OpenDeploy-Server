<?php

    class view
    {
        protected static bool $_ALLOWNEWKEYS = false;
        protected array $_FIELDS = array();

        protected string $_MODULE_HTML = "";
        protected string $_HEAD_HTML = "";

        public function getField(string $key)
        {
            return $this->_FIELDS[$key] ?? null;   
        }

        public function setField(string $key, $value) : bool
        {
            if(self::$_ALLOWNEWKEYS || array_key_exists($key, $this->_FIELDS))
            {
                $this->_FIELDS[$key] = $value;
                return true;
            }
            return false;
        }

        public function renderToHTML()
        {
            $html = "";

            require_once("html/template.html.common.php");


            $html .= $this->_MODULE_HTML;

            return 
                str_replace ("EXMODULE_INJECT", $this->_MODULE_HTML, 
                str_replace("EXHEAD_INJECT", $this->_HEAD_HTML, $exHTML));
        }
    }

?>