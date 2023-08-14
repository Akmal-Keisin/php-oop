<?php

namespace Helper;

trait NoteHelper
{
  static function find($id, $notes)
  {
    foreach ($notes as $note) {
      if ($note["id"] == $id) {
        return $note;
      }
    }
    return null;
  }
}
