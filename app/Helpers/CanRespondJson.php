<?php

namespace App\Helpers;

trait CanRespondJson
{
  public function responds($data = [], $status = HttpStatuses::HTTP_OK, $message = '')
  {
    return response()->json(['data' => $data, 'message' => $message, 'status_code' => $status], $status);
  }
}
