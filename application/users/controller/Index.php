<?php

namespace app\users\controller;
use app\users\model\Students;
class Index
{
	public function index()
	{
		$user = new Students;
// save方法第二个参数为更新条件
		$user->data([
    	'userName'  => 'thinkphp',
    	'password' => 'thinkphp@qq.com',
		]);
		

		echo $user->id;
		$user->save();

	}
}

