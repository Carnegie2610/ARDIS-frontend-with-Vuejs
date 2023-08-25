<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controllers extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
     public function __construct(Public UserRepository $user_repository){
        
    } 


    
    public function getAll(){
        return $this->user_repository->getAll();
    }

    public function getId($id){
        return $this->user_repository->getFromId($id);
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        return $this->user_repository->create($data);
    }

    public function update(){
        $data = ['Milovic',26,'Douala','Milkovic@douala','female'];

        return $this->user_repository->update(1,$data);
    }

    public function delete($id){
        return $this->user_repository->delete(1);
    }


    public function index(){
        $user = user::orderby('name')
            ->get();
        return $user;
    }
 

}


