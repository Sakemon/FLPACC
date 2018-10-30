<?php

namespace App\Transformers;

use App\Pelanggan;
use League\Fractal\TransformerAbstract;

class PelangganTransformer extends TransformerAbstract
{
  public function transform(Pelanggan $pelanggan)
  {
    return [
      'nama_pelanggan' => $pelanggan->nama_pelanggan,
      'email_pelanggan' =>$pelanggan->email_pelanggan,
    ];
  }
}
