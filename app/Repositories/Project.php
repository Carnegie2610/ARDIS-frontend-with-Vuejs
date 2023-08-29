<?php

    namespace App\Repositories;
    use Illuminate\Database\Eloquent\Model;
    use App\Models\User;
    use App\Contracts\ProjectInterface;
    use App\Models\Project;

    class ProjectRepository extends BaseRepository implements ProjectInterface
    
    {
        // public $ProjectRepository;
       
        
        public function __construct(public Project $project)
        {
            
           
        }
       

       
    }