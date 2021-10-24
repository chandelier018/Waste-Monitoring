<?php

namespace App\Models\Dashboard;

use CodeIgniter\Model;

class Barangay extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'waste_brgy';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'volume',
		'waste_type',
		'brgy_name',
		'created_at'
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function DailySubmissions()
	{
		date_default_timezone_set('Asia/Manila');
		$dayC = date('Y-m-d');
		$where = "DATE(created_at) = '$dayC'";
		$query = $this->where($where)
			->groupBy('brgy_name')
			->get();

		return $query->getNumRows();
	}
	public function DailyWaste()
	{
		date_default_timezone_set('Asia/Manila');
		$dayC = date('Y-m-d');
		//	$db = db_connect();
		$builder = $this->table('waste_brgy');
		$builder->select('SUM(ROUND(waste_brgy.volume, 2)) as vol, waste_type.waste as wasteName, waste_brgy.waste_type as wasteType, waste_brgy.created_at');
		$builder->join('waste_type', 'waste_brgy.waste_type = waste_type.waste')
			->where('DATE( waste_brgy.created_at)', $dayC)
			->groupBy('waste_type.waste');
		$data = $builder->get()->getResultArray();

		return $data;
	}
}
