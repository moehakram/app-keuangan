<?php

namespace App\Controllers;


class InputData extends BaseController
{
    function formIncome()
    {
        return $this->view('dashboard/input-data/form-income');
    }

    function formExpenditure()
    {
        // response()->setPlainText();
        return $this->view('dashboard/input-data/form-expenditure');
    }
}
