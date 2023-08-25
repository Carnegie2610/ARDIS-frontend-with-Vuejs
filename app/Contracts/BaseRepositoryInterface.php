<?php

namespace App\Contracts;

interface BaseRepositoryInterface
{
    public function GetAll();


    public function GetFromId( $id);


    public function Create(array $data);


    public function Update($id, array $data);


    public function delete($id);

    // public function findByEmail($email);


    // public function findByName($name);

    // public function getActiveUsers();

    // public function getInactiveUsers();

    // public function getTrainingSession();

    // public function getNetworkingSession();


}

?>