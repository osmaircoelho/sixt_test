<?php

class OddNumber
{
    /**
     * @var int[]
     */
    private $numbers;

    /**
     * @param array $numbers
     */
    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * @return int
     * @throws Exception
     */
    public function find()
    {
    	$arr = sizeof($this->numbers);
	    $result =[];

		for($i=0; $i <= $arr; $i++ ){

			if( $this->numbers[$i] %3 == 0 ){
				$result[] += $this->numbers[$i];
			}
		}
		return $result;
    }
}
$arr = [2,4,6,7,8];
$OddNumber = new OddNumber($arr);

print_r($OddNumber->find());