<?php
require_once "exception.php";

try {
  $request = new LoginRequest();
  unset($request->name);
  unset($request->password);
  validate($request);
} catch (\ValidationException | \Exception $e) {
  var_dump($e->getMessage());
  var_dump($e->getTrace());
  var_dump($e->getTraceAsString());
} finally {
  echo "success";
}
