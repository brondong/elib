<?php

class Jejak extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'jejak';

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = array();

  /**
   * data aktivitas user
   * 
   * @return array
   */
  public static function get()
  {
    return Jejak::select('users.nama', 'aktivitas.keterangan', 'jejak.created_at')
      ->join('users', 'jejak.id_user', '=', 'users.id')
      ->join('aktivitas', 'jejak.id_aktivitas', '=', 'aktivitas.id')
      ->get()->toArray();
  }

}