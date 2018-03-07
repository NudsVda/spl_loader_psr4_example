<?php

namespace App\Domain;

/**
 * This class violates the SRP
 * 3 methods are related to 3 differents actors
 * Martin, Clean Architecture, pg. 63
 */
class EmployeeSRPWrong {

    // this method is specified by the accounting department
    public function calculatePay()
    {
        return;
    }

    // this method is specified by human resources
    public function reportHours()
    {
        return;
    }

    // this method is specified by the database administrators
    public function save()
    {
        return;
    }

}