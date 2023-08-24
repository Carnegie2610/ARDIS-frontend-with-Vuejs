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
         
         public function GetById($user_id)
         {
            return $this->model->find($user_id);
         }
         
         public function create(array $data)
         {
            return $this->model->create($data);
         }
         
         public function update($id, array $data)
         {
            $model = $this->getById($id);
            if ($model){
                $model->newQuery->update($data);
                return $model;
            }
         }
   
         public function delete($id)
         {
            $model = $this->getById($id);
            if($model){
                return $model->newQuery->delete();
            }
         }
    }
?>
