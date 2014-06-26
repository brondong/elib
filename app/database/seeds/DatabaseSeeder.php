<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SeederTabelUsers');
		$this->command->info('Data tabel user berhasil dibuat!');
	}

}