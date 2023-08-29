<?php

    namespace App\Repositories;
    use Illuminate\Database\Eloquent\Model;
    use App\Models\User;
    use App\Contracts\FinanceCampaignInterface;
    use App\Models\FinanceCampaign;

    class FinanceCmpaignRepository extends BaseRepository implements FinanceCampaignInterface{
        // public $FinanceCmpaignRepository;
       
        
        public function __construct(public FinanceCampaign $fincamp)
        {
            
           
        }
       

       
    }