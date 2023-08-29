<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepository;
use App\Models\User;
use app\view\indexe;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

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
        Log::info('entered the create successfully');
        try {
            $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required:user',
            'gender' => 'required:user',
            'location' => 'required:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:6',
        ]);
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            throw $th;
        }
        
      
        Log::info('Array Filled Successfully');
        Log::info('Array content: ' . print_r($data, true));
        $newUser = $this->user_repository->create($data);

    }

    public function update(Request $request, User $user, $id){
       try {
            $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required:user',
            'gender' => 'required:user',
            'location' => 'required:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:6',
        ]);
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            throw $th;
        }
        $user = $this->user_repository->update($id,$data);
    }

    public function delete($id)
    {
        $this->user_repository->delete($id);
    }
}
