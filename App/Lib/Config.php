<?php
/**
 *  Thiago Soares
 */

namespace App\Lib;

class Config
{

    private $ambiente;

    public function __construct($ambiente = null) 
    {
        $this->ambiente = $ambiente;
    }

    public function ConfigApplication()
    {
        if(isset($this->ambiente) && $this->ambiente === 'development') {

            $config = array(
                "host" => "localhost",
                "user" => "root",
                "pass" => "",
                "base" => "db_loja",
                "url"  => "http://localhost:8888/"
            );

            return $config;

        } else if(isset($this->ambiente) && $this->ambiente === 'production') {

            $config = array(
                "host" => "localhost",
                "user" => "root",
                "pass" => "",
                "base" => "db_loja",
                "url"  => "http://localhost"
            );

            return $config;

        } else {
            
            echo ' Ambiente não setado ';
        }
    }


}