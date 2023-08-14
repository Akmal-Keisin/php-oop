<?php

class ValidationException extends Exception
{
}

class LoginRequest
{
  public string $name;
  public string $password;
}

function validate(LoginRequest $request)
{
  if (!isset($request->name)) {
    throw new ValidationException("Name empty");
  } elseif (!isset($request->password)) {
    throw new ValidationException("Password empty");
  } elseif (trim($request->name) == "") {
    throw new ValidationException("name empty");
  } elseif (trim($request->password) == "") {
    throw new ValidationException("Password empty");
  }
}
