<?php
class SeederTabelUsers extends Seeder {

  public function run()
  {
    $date = new DateTime();

    $user = array(
      array(
        'foto'       => null,
        'nama'       => 'Admin',
        'telp'       => '0123456789',
        'email'      => 'admin@local.com',
        'password'   => Hash::make('adminlocal'),
        'created_at' => $date->format('Y-m-d H:i:s'),
        'updated_at' => $date->format('Y-m-d H:i:s')
      )
    );

    User::insert($user);
  }

}