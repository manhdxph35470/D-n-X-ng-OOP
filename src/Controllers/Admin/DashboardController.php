<?php

namespace Manh\XuongOop\Controllers\Admin;

use Manh\XuongOop\Commons\Controller;
use Manh\XuongOop\Commons\Helper;



class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}