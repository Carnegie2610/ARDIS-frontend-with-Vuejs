<?php

    namespace App\Repositories;
    use Illuminate\Database\Eloquent\Model;
    use App\Models\User;
    use App\Contracts\UserInterface;

    class UserRepository extends BaseRepository implements UserInterface{
        // public $userRepository;
       
        
        public function __construct(BaseRepository $trainnet)
        {
            $this->model = $trainnet;
           
        }
       

       
    }