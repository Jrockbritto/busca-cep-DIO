<?php 

namespace Workspace\DIO\PHP;

class Search{
    private $url = "https://viacep.com.br/ws/";

    public function getaddressfromzipcode(string $zipcode) { 
        $zipcode = preg_replace('/[^0-9]/im','',$zipcode);

        $get = file_get_contents($this->url . $zipcode . '/json');

        print_r($get);
    }
}