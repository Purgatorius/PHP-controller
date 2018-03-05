<?php

class Math
{
    const ADD = "add";
    const MINUS = "minus";
    const TIMES = "times";
    const DIVIDE = "divide";
    protected $showResult;
    protected $int1;
    protected $int2;
    protected $int3;
    protected $int4;
    protected $int5;
    protected $operation;
    protected $result;

    public function __construct()
    {
        $this->showResult = new ShowResult();
    }

    public function getInt1()
    {
        return $this->int1;
    }

    public function getInt2()
    {
        return $this->int2;
    }

    public function getOperation()
    {
        return $this->operation;
    }

    public function wrongDataEcho($int1, $int2)
    {
        if (!$int1 > -9999 && !$int1 < 9999 && !$int2 > -9999 && !$int2 < 9999) {
            echo "Wrong data, please type integers from -9999 to 9999";
            return;
        }
    }

    public function mathOn2numbers($table)
    {
        $this->operation = $table[0];
        $this->int1 = $table[1];
        $this->int2 = $table[2];

        $this->wrongDataEcho($this->int1, $this->int2);

        switch ($this->operation) {
            case self::ADD:
                $result = $this->int1 + $this->int2;
                break;
            case self::MINUS:
                $result = $this->int1 - $this->int2;
                break;
            case self::TIMES:
                $result = $this->int1 * $this->int2;
                break;
            case self::DIVIDE:
                if ($this->int2 == 0) {
                    throw new DivisionByZeroException("Wrong data, you can not divide by 0");
                }
                $result = $this->int1 / $this->int2;
                break;
        }
        if (isset($result)) {
            $this->showResult->mathOn2numbersShowResult($this->operation, $this->int1, $this->int2, $result);
        }
    }

    public function sortNumbers($table)
    {
        $this->int1 = $table[0];
        $this->int2 = $table[1];
        $this->int3 = $table[2];
        $this->int4 = $table[3];
        $this->int5 = $table[4];

        for ($i = 0; $i <= 1000; $i++) {
            if ($this->int1 == $i) {
                echo "$this->int1" . ' ';
            }
            if ($this->int2 == $i) {
                echo "$this->int2" . ' ';
            }
            if ($this->int3 == $i) {
                echo "$this->int3" . ' ';
            }
            if ($this->int4 == $i) {
                echo "$this->int4" . ' ';
            }
            if ($this->int5 == $i) {
                echo "$this->int5" . ' ';
            }
        }
    }

    public function sortNumbers2($table)
    {
        $myTable = $table;
        sort($myTable);

        foreach ($myTable as $element) {
            echo $element . "<br />";
        }
    }

    public function sortNumbersByMyAlgorythm($table)
    {
        $lenght = count($table);
        echo 'Ilośc elementów tablicy: ' . $lenght . "<br />";

        for ($j = 0; $j < 10000; $j++) {
            foreach ($table as $value) {
                if ($value == $j) {
                    echo $value . "<br />";
                }
            }
        }
    }
}
