<?php

namespace app\controllers;

use system\controllers\Controller;
use app\models\TestCost;
use app\models\Test;
use app\models\Lab;


/**
* AppLabController
*/
class AppLabController extends Controller
{
	public function testApi()
	{
		echo json_encode(['success'=>true, 'data'=>Test::all()]);
	}

	public function labApi()
	{
		echo json_encode(['success'=>true, 'data'=>Lab::where('test_id', $this->get('test_id'))]);
	}

	public function testCostApi()
	{
		echo json_encode(['success'=>true, 'data'=>TestCost::where('test_id', $this->get('test_id'))->first()->with('lab')->get()]);
	}
}