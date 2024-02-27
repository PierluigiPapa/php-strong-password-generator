<?php
//Creazione della password generata attraverso una funzione
    if(isset($_GET['length'])){
        function generateRandomPassword($length){
            //Dichiaro una stringa di caratteri
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!$%&?+-=><*';
            $password = '';

            //Creo un ciclo per le iterazioni
            for($i = 0; $i < $length; $i++){
                //Genero un numero random
                $n = rand(0, strlen($alphabet)-1);
                //Associo l'indice dell'array ad un array di singoli caratteri
                $singleType = $alphabet[$n];
                $password = $password.$singleType;
            };
            return $password;
        }
    }
?> 