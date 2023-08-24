<?php

namespace App\Contracts;

interface BaseRepositoryInterface
{
    public function GetAll();


    public function GetById($user_id);


    public function Create(array $data);


    public function Update($id, array $data);


    public function delete($id);


}

?>