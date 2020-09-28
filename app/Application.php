<?php

namespace App;

class Application
{

  public function say()
  {
    $message = <<< MESSAGE
      Gopibabu Srungavarapu

      I am a Software Engineer!!!
MESSAGE;
    return $message;
  }
}