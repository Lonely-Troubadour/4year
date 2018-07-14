<?php
namespace app\index\controller;

use\think\Congig;
use\think\Env;
use\think\Request;
use\think\Controller;

class Index extends Controller
{    
    public function index()
    {
		
		$request = Request::instance()->get('id');//->has('id','get');
		//return $request;
		//return $request;
		$this->assign('request',$request);
		return $this->fetch();     	
    }
}
