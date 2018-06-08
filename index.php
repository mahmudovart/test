<?php
echo "string";
echo "string-2";


class someClass extends AnotherClass
{
	public $name;
	public function someFun($arg)	
	{
		echo $this->name.$arg;
	}
}
?>