<?php
class SeederTabelJejak extends Seeder {

  public function run()
  {
    $date = new DateTime();

    $jejak = array(
      array(
        'id_user'      => 1,
        'id_aktivitas' => 1,
        'created_at'   => $date->format('Y-m-d H:i:s'),
        'updated_at'   => $date->format('Y-m-d H:i:s')
      ),
      array(
        'id_user'      => 1,
        'id_aktivitas' => 2,
        'created_at'   => $date->format('Y-m-d H:i:s'),
        'updated_at'   => $date->format('Y-m-d H:i:s')
      ),
    );

    Jejak::insert($jejak);
  }

}