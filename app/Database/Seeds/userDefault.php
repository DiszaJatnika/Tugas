<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class userDefault extends Seeder
{
	public function run()
	{
		// membuat data
		$user_data = [
			[
				'username'  => 'email@user.com',
				'password'  => '2e88d1dee3eca47f7655332a8b6a28ea62ba8fd7a69be9.22743587',
				'salt'      => '62ba8fd7a69be9.22743587',
				'role'      => 2,
            ],
            [
				'username'  => 'email@admin.com',
				'password'  => 'cb75b94efc8efd27721a501360557ffd62ba90afd8c3d3.74856686',
				'salt'      => '62ba90afd8c3d3.74856686',
				'role'      => 1,
            ]
		];

		foreach($user_data as $data){
			// insert semua data ke tabel
			$this->db->table('user')->insert($data);
		}
	}
}