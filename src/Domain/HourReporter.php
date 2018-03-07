<?php

use App\Domain\Employee;
use App\Repository\EmployeeRepository;

class HourReporter {

    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository){
        $this->employeeRepository = $employeeRepository;
    }

    public function reportHours(Employee $employee)
    {
        $this->employeeRepository->getHoursByEmployeeCode($employeeRepository->code);
    }

}