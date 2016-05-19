<?php
include_once 'DBConnection.php';

class ProcessEmployee
{
    protected $_dbConnection;
    public function __construct() {
        $dbConnectionObj = new DBConnection();
        $dbConnection = $dbConnectionObj->getConnection();
        $this->_dbConnection = $dbConnection;
    }
    public function getEmployeesList()
    {
        $select = 'select * from employees';
        $res = $this->_dbConnection->query($select);

        return $res->fetch_all(MYSQLI_ASSOC);
    }
    public function saveEmployee(Employee $employee)
    {
        if ($employee->getId()) {
            $update = 'update employees set name = \''.$employee->getEmployeeName().'\','.
                      'salary = '.$employee->getSalary().
                      ' where id = '.$employee->getId();
            $res = $this->_dbConnection->query($update);
        } else {
            $insert = 'insert into employees(name, salary) values '.
                      '(\''.$employee->getEmployeeName().'\','.$employee->getSalary().')';
            $res = $this->_dbConnection->query($insert);
        }
    }
}
