<?php

namespace OOP\FinalClass;

class SocialMedia
{
  public function info()
  {
    return "social media ";
  }
}

final class Facebook extends SocialMedia
{
  public function getInfo()
  {
    echo $this->info() . "facebook";
  }
}

// class FakeFacebook extends Facebook
// {
// }
