<?php

    namespace App\Repositories;
    use Illuminate\Database\Eloquent\Model;
    use App\Models\User;
    use App\Contracts\DepositInterface;
    use App\Models\Deposit;

    class DepositRepository extends BaseRepository implements DepositInterface{
        // public $DepositRepository;
       public $model;
        
        public function __construct(public Deposit $deposit)
        {
        
           
        }
       

       
    }