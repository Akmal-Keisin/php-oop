<?php

function getGanjil(int $max)
{
  for ($i = 0; $i < $max; $i++) {
    if ($i % 2 != 0) {
      yield $i;
    }
  }
}
