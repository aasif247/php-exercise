<?php
class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}


interface NetworkStorage{
    function connect();
    function getName();
    function report($data);
}

class MySQLServer implements NetworkStorage{
    function connect(){
        throw new DiskFullException;
    }

    function getName(){
        return "MySQL";
    }

    function report($data){
    }
}

class PostgreSQLServer implements NetworkStorage{
    function connect(){
        return $this;
    }

    function getName(){
        return "PostgreSQL";
    }

    function report($data){
    }
}

class MSSQLServer implements NetworkStorage{
    function connect(){
        throw new NetworkException;
    }

    function getName(){
        return "MSSQL";
    }

    function report($data){
    }
}

class ConnectionPool{
    private $connection;
    private $storage;
    function __construct(){
        $this->storage = array();
    }

    function addStorages(NetworkStorage $storage){
        array_push($this->storage,$storage);
    }

    function getConnection(){
        foreach($this->storage as $storage){
            try{
                $this->connection = $storage->connect();
            }catch(ServerException $e){
                echo $storage->getName()." is facing huge load";
                $storage->report(array('ip'=>'123.123.123.111','error'=>'load'));
            }catch(NetworkException $e){
                echo $storage->getName()." is having some problem with is network";
                $storage->report(array('ip'=>'123.123.123.111','error'=>'network'));
            }catch(DiskFullException $e){
                echo $storage->getName()." has it's disk full";
            }
            
            if($this->connection){
                break;
            }
        }
        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$pgsql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPool();
$cp->addStorages($mysql);
$cp->addStorages($pgsql);
$cp->addStorages($mssql);

$connection = $cp->getConnection();
print_r($connection);