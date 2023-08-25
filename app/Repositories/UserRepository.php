<?php

    namespace App\Repositories;
    use Illuminate\Database\Eloquent\Model;
    use App\Models\User;
    use App\Contracts\UserInterface;

    class UserRepository extends BaseRepository implements UserInterface{
         
       
        
        public function __construct(User $user)
        {
            parent::__construct($user);
           
        }
       
       
    }
       
?>