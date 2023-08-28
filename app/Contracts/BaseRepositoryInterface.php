<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Psr7\Request;

interface BaseRepositoryInterface
{
    public function GetAll();


    public function GetFromId( $id);


    public function Create($data);


    public function Update($id, array $data);


    public function delete($model);

    // public function findByEmail($email);


    // public function findByName($name);

    // public function getActiveUsers();

    // public function getInactiveUsers();

    // public function getTrainingSession();

    // public function getNetworkingSession();


}

?>