<?php
/**
 * To display the integer values and string values seperately
 */
class DataArray 
{
	private $integers = array();
	private $strings = array();
	
	public function getData($dataArray)
	{
		$this->dataArray[] = $dataArray;
		/*if(is_array($dataArray)){
			echo "It is array";
		}else {
			echo "NOt Array";
		}*/
		if(is_array($dataArray)) {
			foreach ($dataArray as $value) {
				if(is_int($value)){
					$this->integers[] = $value;		// code...
				}elseif(is_string($value)){
					$this->strings[] = $value;
				} 
			}		
		}else {
			echo "Error in Array function";
		}
	}
	public function fetcharray()
	{
		return $this->dataArray;
	}
	public function getint()
	{
		return $this->integers;
	}
	public function getstring()
	{
		return $this->strings;
	}
}
$data = array('Apple',1,"Banana",23,43,"Orange");
$obj = new DataArray();
$obj->getData($data);
$obj0 = $obj->fetcharray();
$obj1 = $obj->getint();
$obj2 = $obj->getstring();
print "<pre>";print_r($obj0);
print_r($obj1);
print_r($obj2);

?>
