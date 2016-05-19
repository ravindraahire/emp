<?php
class Employee
{
    private $_id;
    private $_name;
    private $_salary = 0;
    
    public function setId($id)
    {
        $this->_id = $id;
    }
    public function getId()
    {
        return $this->_id;
    }
    public function setEmployeeName($employeeName)
    {
        $this->_name = $employeeName;
    }
    public function getEmployeeName()
    {
        return $this->_name;
    }
    public function setSalary($salary)
    {
        $this->_salary = $salary;
    }
    public function getSalary()
    {
        return $this->_salary;
    }
}