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

		$this->call('SeederTabelAktivitas');
		$this->command->info('Data tabel aktivitas berhasil dibuat!');

		$this->call('SeederTabelJejak');
		$this->command->info('Data tabel jejak berhasil dibuat!');
	}

}