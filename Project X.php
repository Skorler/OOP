<?php

require_once("Personell/Employee.php");

$workers = array();

$workers[0] = new Employee("lastName1", "firstName1", "secondName1", "Designer");
$workers[0]->setSalary(3000);
$workers[1] = new Employee("lastName2", "firstName2", "secondName2", "Senior Developer");
$workers[1]->setSalaryByHours(65, 10);
$workers[2] = new Employee("lastName3", "firstName3", "secondName3", "Middle Developer");
$workers[2]->setSalary(1000);
$workers[3] = new Employee("lastName4", "firstName4", "secondName4", "Middle Developer");
$workers[3]->setSalary(1000);
$workers[4] = new Employee("lastName5", "firstName5", "secondName5", "Layout Designer");
$workers[4]->setSalaryByHours(120, 5);

$totalCost = 0;
foreach ($workers as $worker) {
    $totalCost += $worker->getSalary();
}

print $totalCost;



