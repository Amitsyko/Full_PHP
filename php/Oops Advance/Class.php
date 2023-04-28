<?php
	class A
	{
		public $a=10;
		protected $b=20;
		private $c=30;
		
		public function test1()
		{
				echo"This is public function A Class.";
		}
		protected function test2()
		{
				echo"This is protected function A Class.";
		}
		private function test3()
		{
				echo"This is private function A Class.";
		}
	};
	
	$obj=new A();
	echo $obj->a." ";		//Public member can be accessed.
	// echo $obj->b." ";		//Protected member can be accessed.
	// echo $obj->c." ";		//Private member can be accessed.
	
	$obj-> test1();			//Public method can be accessed.
	// $obj-> test2();			//Public method can be accessed.
	// $obj-> test3();			//Public method can be accessed.
?>