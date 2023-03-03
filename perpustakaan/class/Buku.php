<?php

class Buku extends Database
{
  public function findAll()
  {
    return $this->db->query("SELECT *FROM buku")->fetch_all(MYSQLI_ASSOC);
  }
}
