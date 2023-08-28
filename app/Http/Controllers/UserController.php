<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepository;
use App\Models\User;
use app\view\indexe;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controllers
{
    
    public function __construct(Public UserRepository $user_repository){
        
    } 
    
    public function index() : View
    {
        return View('index');
    }

    
    public function getAll(){
        return $this->user_repository->getAll();
    }

    public function getId($id){
        return $this->user_repository->getFromId($id);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required',
            'location' => 'required',
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'password' => 'required|min:6',
            
        ]);
        $newUser = $this->user_repository->create($data);
        // dd($request);
    }

    public function update(Request $request, User $user, $id){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required',
            'location' => 'required',
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'password' => 'required|min:6',
        ]);
        $user = $this->user_repository->update($id,$validated);
    }

    public function delete($id)
    {
        $this->user_repository->delete($id);
   
     }
}
