<?php
class person_info{
public  $first_name="ayush";
public    $second_name="khadka";
public static $age=24;
public function get_first_name(){
/*
self is for use in static member functions to allow you to access static member variables. 
$this is used in non-static member functions, 
and is a reference to the instance of the class on which the member
 function was called. Because this is an object, you use it like: $this->member
here,get_first_name() function is non-static member function
*/
	return $this->first_name;

}
 public function get_second_name(){
return $this->second_name;


}
public static function get_age(){
	//self is for use in static member functions to allow you to access static member variables. 
return self::$age;
}
}
$person1=new person_info();
echo $person1->get_first_name();
echo "<br/>";
 echo $person1->get_second_name();
 echo "<br/>";
 echo person_info::get_age();
//echo person_info::$first_name." ".person_info::$second_name."<br/>";

?>