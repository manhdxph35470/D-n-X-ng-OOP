<?php 

namespace Manh\XuongOop\Controllers\Client;

use Manh\XuongOop\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'MANHDXPH35470';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
    
}