<?php

namespace App\Helpers;

trait CanRespondHttp
{
  public function respond($route = '', $status = '', $message = '', $data = [])
  {
    return redirect()->route($route)->with([
      'response' => [
        'status' => $status,
        'message' => $message,
        'data' => compact($data)
      ]
    ]);
  }
}
