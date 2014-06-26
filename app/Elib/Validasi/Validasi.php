<?php namespace Elib\Validasi;

use Validator;

class Validasi {

  /**
   * pesan error
   * 
   * @var array
   */
  protected $errors;

  /**
   * cek validasi form
   * 
   * @return bool
   */
  public function cek($input)
  {
    // validasi
    $validasi = Validator::make($input, static::$rules);

    // validasi error
    if ($validasi->fails())
    {
      // pesan error
      $this->errors = $validasi->messages();

      return false;
    }

    return true;
  }

  /**
   * ambil pesan error
   * 
   * @return array
   */
  public function errors()
  {
    return $this->errors;
  }

}