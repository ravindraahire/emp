<?php
require_once 'ProcessEmployee.php';
$processEmployeeObj = new ProcessEmployee();
$employeeList = $processEmployeeObj->getEmployeesList();
require_once 'list-employee.html';