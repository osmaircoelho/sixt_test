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
    	$arrSize = sizeof($this->numbers);
    	$arr = $this->numbers;
	    $result = "";
	    $count=0;

		for($i=0; $i < $arrSize; $i++ ){

			for($x=0; $x < $arrSize; $x++ ){

				if( $arr[$i] == $arr[$x]  ){
					$count ++;

					if( $count %2 != 0 );
					   $result = $arr[$i];
				}
			}
		}
		return (int) $result;
    }
}
$arr = [1, 2, 3, 2, 3, 1, 3];
$OddNumber = new OddNumber($arr);

print_r($OddNumber->find());