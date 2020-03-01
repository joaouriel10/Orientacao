<?php 

     class Conexaobanco{

        public function connect()
        {
            define('HOST', 'localhost');
            define('USER', 'joao');
            define('PASS', 'Joaouriel10');
            define('BANCO', 'trabalho');

            return mysqli_connect(HOST, USER, PASS, BANCO);
        }

    }