<?php
require_once 'Employee.php';
require_once 'ProcessEmployee.php';
$processEmployeeObj = new ProcessEmployee();

$employeeId = filter_input(INPUT_POST, 'employeeId', FILTER_DEFAULT);
if (filter_input_array(INPUT_POST)) {
    $name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
    $salary = filter_input(INPUT_POST, 'salary', FILTER_DEFAULT);
    $employeeObj = new Employee();
    //$employeeObj->setId(3);
    if ($employeeId) {
        $employeeObj->setId($employeeId);
    }
    $employeeObj->setEmployeeName($name);
    $employeeObj->setSalary($salary);
    $saveEmployee = $processEmployeeObj->saveEmployee($employeeObj);
}
require_once 'add-employee.html';