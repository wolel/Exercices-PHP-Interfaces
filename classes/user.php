<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 13/12/2018
 * Time: 11:18
 */



class user implements userInterface{

    private $request;

    public function __construct()
    {
        $this->getRequest($_REQUEST);
    }


    public function getRequest($request)
    {
        echo " getRequest impementé";
        // TODO: Implement parseRequest() method.
    }
public function parseRequest()
{
    echo " parse Request impementé";
    // TODO: Implement parseRequest() method.
}
}