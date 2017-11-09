<?php
class Employee
{
public $name;
public $city;
protected $wage;

function __get($propName)
{
echo "123"."<br/>";
$vars=array("name","city");
if(in_array($propName,$vars))
{
return $this->$propName;
}else{
return "no";
}
}
}
$employee=new Employee();
$employee->name="mary";
echo $employee->name."<br/>";
echo $employee->wage;
?>
