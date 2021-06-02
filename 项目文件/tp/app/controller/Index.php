<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
	    $file = './static/start.html';
            $filestr = file_get_contents($file);
	    return $filestr; 
    }
}
