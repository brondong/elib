<?php
class SeederTabelAktivitas extends Seeder {

  public function run()
  {
    $date = new DateTime();

    $aktivitas = array(
      array(
        'tipe'       => 'login',
        'keterangan' => 'Login ke dalam aplikasi.',
        'created_at' => $date->format('Y-m-d H:i:s'),
        'updated_at' => $date->format('Y-m-d H:i:s')
      ),
      array(
        'tipe'       => 'logout',
        'keterangan' => 'Logout dari aplikasi.',
        'created_at' => $date->format('Y-m-d H:i:s'),
        'updated_at' => $date->format('Y-m-d H:i:s')
      )
    );

    Aktivitas::insert($aktivitas);
  }

}