<?php

class Database
{
  private $servername = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'lsp';

  protected $db;

  public function __construct()
  {
    $this->db = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
  }
}
