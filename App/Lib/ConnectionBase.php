<?php
/**
 *  Thiago Soares
 */

namespace App\Lib;

use PDO;

class ConnectionBase
{

    private $config, $instance, $type_conn;
    private static $host, $user, $pass, $base;

    public function __construct()
    {
        $this->config = new Config('development');
        $this->type_conn = $this->config->ConfigApplication();

        self::$host = $this->type_conn['host'];
        self::$user = $this->type_conn['user'];
        self::$pass = $this->type_conn['pass'];
        self::$base = $this->type_conn['base'];
    }

    public function setInstance()
    {
        if(!isset($this->instance)) {

            try {

                $this->instance = new PDO("mysql:host=".self::$host.";dbname=".self::$base."", self::$user, self::$pass);
                $this->instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {
                exit('Falha no acesso ao banco de dados contacte o suporte ' . $e->getMessage());
            }
        }

        return $this->instance;
    }

}