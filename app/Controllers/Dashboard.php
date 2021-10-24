<?php

namespace App\Controllers;

use App\Models\ManageBarangayModel;
use App\Models\Manage\WasteModel;
use App\Models\Dashboard\Barangay;
use App\Models\Dashboard\Dumpsite;
use App\Controllers\BaseController;
use App\Models\Dashboard\ChartModel;
use App\Models\Dashboard\Users;

class Dashboard extends BaseController
{
	public function index()
	{
		//
		$brgy = new Barangay();
		$totalbrgy = new ManageBarangayModel();
		$waste = new WasteModel();
		$chartModel = new ChartModel();
		$dumpsite = new Dumpsite();
		$data['wasteType'] = $chartModel->fetch_day();
		$data['dumpN'] = $dumpsite->DailySubmissions();
		$data['wasteN'] = $brgy->DailyWaste();
		$data['brgyN'] = $brgy->DailySubmissions();
		$data['totalUsers'] = $totalbrgy->countAllResults();
		$data['totalBrgy'] = $totalbrgy->BrgyNumUsers();
		$data['totalDump'] = $totalbrgy->DumpNumUsers();
		$data['dumpWaste'] = $dumpsite->DailyWaste();
		$start_date = $this->request->getVar('DateFrom');
		$end_date = $this->request->getVar('DateTo');

		return view('admin/dashboard', $data);
	}
	public function Demo()
	{
		$brgy = new Barangay();
		$data['wasteN'] = $brgy->DailyWaste();
		//$data['brgyN'] = $brgy->findAll();
		echo "<pre>";
		print_r($data);
	}
	public function chartData()
	{
		$chartModel = new ChartModel();
		$data = $chartModel->fetch_chart_data($this->request->getVar('wasteT'));

		foreach ($data as $row) {
			$output[] = array(
				'collection_date' => $row['collection_date'],
				'volume'     => floatval($row['volume'])
			);
		}
		echo json_encode($output);
	}
	public function brgyDaily()
	{
		$modelUsers = new Users();
		$data['dailyBrgy'] = $modelUsers->dailySubmission();

		return view("admin/dashboards/brgyDaily", $data);
	}
}
