<?php

    class model
    {
        protected static bool $_ALLOWNEWKEYS = false;
        protected array $_FIELDS = array();

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
    }

?>