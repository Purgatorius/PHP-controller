<?php
class Router
{
    public $className;
    public $methodName;
    public $operation;
    public $int1;
    public $int2;

    public function getUrl()
    {
        $url = $_GET['url'];
        return $url;
    }

    public function showUrl()
    {
        $url = $this->getUrl();
        echo "Wpisany URL to: ";
        echo $url;
        echo "<br \>";
        echo " ";
        echo "<br />";
    }

    public function cutURL()
    {
        $url = $this->getUrl();
        $table = explode("/", $url);
        $this->className = $table[0];
        $this->methodName = $table[1];

        $paramsArray = $table;
        unset($paramsArray[0], $paramsArray[1]);
        $paramsArray = array_values($paramsArray);

        return $paramsArray;
    }

    public function runController()
    {
        $table = $this->cutURL();

        $object = new $this->className();
        $method = $this->methodName;
        $object-> $method($table);
    }
}
