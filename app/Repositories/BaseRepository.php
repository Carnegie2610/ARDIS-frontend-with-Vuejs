<?php

   namespace App\Repositories;

   use Illuminate\Database\Eloquent\Model;
   use App\Contracts\BaseRepositoryInterface;

    class BaseRepository implements BaseRepositoryInterface
    {
        protected $model;
      
      
        public function __construct(Model $model)
         {
            $this->model = $model;
         }
      
         public function getAll()
         {
            return $this->model->all();
         }
         
         public function getFromId($id)
         {
            return $this->model->newQuery()->find($id);
         }
         
         public function create($data) : Model
         {
            return $this->model->newQuery()->create($data);
         }
        
         public function update($id, array $data)
         {
            $model = $this->getFromId($id);
            if ($model){
                $this->model->newQuery()->update($data);
                return $model;
            }
         }
   
         public function delete($id)
         {
            $model = $this->getFromId($id);
            if($model){
                return $model->delete();
            }
         }
        



         // public function findByEmail($email)
         // {
         //    return $this->model->find($email);
         // }


         // public function findByName($name){}
     
         
     
         // public function getActiveUsers(){}
     
         // public function getInactiveUsers(){}
     
         // public function getTrainingSession(){}
     
         // public function getNetworkingSession(){}
    }
?>
