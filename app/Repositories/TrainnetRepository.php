<?php

    namespace App\Repositories;
    use Illuminate\Database\Eloquent\Model;
    use App\Models\User;
    use App\Contracts\UserInterface;
use App\Models\trainnet;

    class TrainRepository extends BaseRepository implements UserInterface{
        // public $TrainReository;
       
        
        public function __construct(public trainnet $trainnet)
        {
            
           
        }
       

       
    }