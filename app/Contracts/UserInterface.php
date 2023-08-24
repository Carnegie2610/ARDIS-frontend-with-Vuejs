<?php

namespace App\Contracts;

interface UserInterface
{
    public function findByEmail($email);


    public function findByName($name);

    public function findByGender();

    public function getActiveUsers();

    public function getInactiveUsers();

    public function getTrainingSession();

    public function getNetworkingSession();




}

?>