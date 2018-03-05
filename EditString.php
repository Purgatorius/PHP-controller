<?php

class EditString
{
    protected $showResult;
    protected $string;
    protected $letter;
    protected $result;

    public function __construct()
    {
        $this->showresult = new ShowResult();
    }

    public function getString()
    {
        return $this->string;
    }

    public function getLetter()
    {
        return $this->letter;
    }

    public function wrongDataEcho($letter)
    {
        if (gettype($letter)=='integer') {
            echo "Wrong data, please type a letter, not an integer";
            return;
        }
    }

    public function removeLetterFromString($table){
        $this->string = $table[0];
        $this->letter = $table[1];


        $this->wrongDataEcho($this->letter);

        $result = str_replace($this->letter, "| |", $this->string);
        $this->showresult->removeLetterFromStringShowResult($this->string,$this->letter,$result);
    }
}
