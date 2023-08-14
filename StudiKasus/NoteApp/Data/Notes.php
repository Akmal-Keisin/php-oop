<?php

namespace Data;

interface Notes
{
  public function addNote(string $title, string $content): string;
  public function editNote(int $id, string $title, string $content): string;
  public function deleteNote(int $id): string;
}
