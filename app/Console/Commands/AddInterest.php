<?php

namespace App\Console\Commands;

use App\FixedPlan;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class AddInterest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:interest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds interest to all fixed plans';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //


        $plans = FixedPlan::all();

        foreach($plans as $plan){
            if($plan->plan_balance >= 10000 and $plan->interest_status = 1  ){

                $interest = round(( $plan->plan_balance * ($plan->rate/100) * 1 ) / 364) ;

                $plan->next_interest_date = new DateTime($plan->next_interest_date);

                $plan->update([$plan->plan_balance = $plan->plan_balance + $interest, $plan->next_interest_date = $plan->next_interest_date->modify('+1 day')]);


            }
        }
    }
}
