<?php

namespace AirAttack\AirCraft {
  class AirCraft
  {
    function info()
    {
      echo "Russian Aircraft" . PHP_EOL;
      echo "Sukhoi SU-34" . PHP_EOL;
      echo "Sukhoi SU-35" . PHP_EOL;
      return "Success";
    }
  }
  class GroundDeffence
  {
  }
  class Cannon
  {
  }
}

namespace AirAttack\AirCraft2 {
  class AirCraft
  {
    function info()
    {
      echo "American Bomber" . PHP_EOL;
      echo "B-1B Lancer" . PHP_EOL;
      echo "B-2A Spirit" . PHP_EOL;
      return "Success";
    }
  }
}

namespace Deffence\AirDeffence {
  const MISSILE = "2K11 Krug";
}

namespace Deffence\Attack {
  function attack()
  {
    return "Fire";
  }
}
