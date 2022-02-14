<?php

class Dbh
{
    protected function connect()
    {
        try{
            $username = "banibai";
            $password = "Learning_mysql_074";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        }
        catch (PDOException $exception){
            print "Error!: " . $exception->getMessage() . "<br/>";
            die();
        }
    }
}