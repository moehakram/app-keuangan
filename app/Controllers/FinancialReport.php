<?php

namespace App\Controllers;


class FinancialReport extends BaseController
{
    function laporan(){
        return $this->view('dashboard/financial-report');
    }
}