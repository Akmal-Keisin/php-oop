<?php

namespace Data;

require_once "NoteHelper.php";
require_once "Notes.php";

use Helper\NoteHelper;
use Data\Notes;

class Note implements Notes
{
  use NoteHelper;
  public array $property = [];

  public function addNote(string $title, string $content): string
  {
    $id = end($this->property);
    array_push($this->property, [
      'id' => $id['id'] + 1,
      'title' => $title,
      'contetn' => $content
    ]);
    return "Success add note";
  }

  public function editNote(int $id, string $title, string $content): string
  {
    $note = NoteHelper::find($id, $this->property);
    $newNote = [
      'id' => $note['id'],
      'title' => (empty($note['title']) ? $title : $note['title']),
      'content' => (empty($note['content']) ? $content : $note['content'])
    ];
    return "Success edit note";
  }

  public function deleteNote(int $id): string
  {
    return "Success delete note";
  }
}
