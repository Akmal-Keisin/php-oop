<?php

require_once "anonymusclass.php";

$anonymus = new class() implements Anonymus
{
  public function anonymus()
  {
    echo "this is anonymus class";
  }
};
