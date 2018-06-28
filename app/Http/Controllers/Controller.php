<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //Hàm dùm để phân quyền cho tất cả các quyền hệ thống
    public function check_admin()
    {
        return Auth::user()->RO_ID == 1 ? true : false;
    }
    public function check_Servant()
    {
        return Auth::user()->RO_ID == 2 ? true : false;
    }
    public function check_Client()
    {
        return Auth::user()->role == 3 ? true : false;
    }

}
