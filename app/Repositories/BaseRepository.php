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
            return $this->model->where('id', $id);
         }
         
         public function create(array $data)
         {
            return $this->model->create($data);
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
            $model = $this->getById($id);
            if($model){
                return $model->newQuery()->delete();
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
