<?php

    class odDatabase
    {
        private static string $_DSN;
        private static string $_USER;
        private static string $_PASS;

        private static PDO $_INSTANCE;


        public static function getInstance(): PDO
        {
            if(is_null(self::$_INSTANCE))
            {
                self::$_INSTANCE = new PDO(self::$_DSN, self::$_USER, self::$_PASS);
            }
            return self::$_INSTANCE;
        }

        public static function setParams(string $DSN, string $username, string $password)
        {
            self::$_DSN = $DSN;
            self::$_USER = $username;
            self::$_PASS = $password;
        }
    }


?>