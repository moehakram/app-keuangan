<?php

namespace App\Controllers;


class DailyData extends BaseController
{
    function pemasukan(){ // pemasukan
        return $this->view('dashboard/daily-data/income');
    }

    function pengeluaran(){ // pemasukan
        return $this->view('dashboard/daily-data/expenditure');
    }
}