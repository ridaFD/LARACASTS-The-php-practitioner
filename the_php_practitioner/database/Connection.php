<?php

class Connection {

    public static function make($config) {
        try {
//            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '6CC0E73296Rq@');
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {

            return die($e->getMessage());
        }
    }
}

