<?php

    namespace App\Repositories;
    use Illuminate\Database\Eloquent\Model;
    use App\Models\User;
    use App\Contracts\UserInterface;

    class UserRepository extends BaseRepository implements UserInterface{
        // public $userRepository;
       
        
        public function __construct(BaseRepository $User)
        {
            $this->model = $User;
           
        }
       

        public function getTrainingSession(){

        }

        public function getNetworkingSession(){
            
        }

       
        public function getUserDetails() {
            return [
            //   'name' => $this->name,
            // // 'address' => $this->address,
            //   //'phoneNumber' => $this->phoneNumber,
            //   'age' => $this->age,
            //   'location' => $this->location,
            //   'email' => $this->email,
            //   //'id' => $this->id,
            //   'gender' => $this->gender,

            ];
          }
        
        public function findByEmail($email)
        {
            // return $this->email;
        }
        
        public function findByName($name){
            // return $this->name;
        }
        public function findByGender(){
            // return $this->gender;
        }
    }
       
?>