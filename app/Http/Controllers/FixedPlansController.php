<?php

namespace App\Http\Controllers;

use App\FixedPlan;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FixedPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fixed_plans = FixedPlan::all();
        return view('admin.fixed.index', compact('fixed_plans'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $users = User::pluck('name', 'id')->all();
        $fixed_plans = FixedPlan::all();
        return view('admin.fixed.create', compact('fixed_plans', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $input = $request->all();

        $input['start_date'] = date('Y-m-d');



        FixedPlan::create($input);

        return redirect('/admin/fixedplan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::pluck('name', 'id')->all();
        $fixed_plans = FixedPlan::findOrFail($id);
        return view('admin.fixed.edit', compact('fixed_plans', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $fixed_plan = FixedPlan::findOrFail($id);

        $input = $request->all();





        $fixed_plan->update($input);

        return redirect('/admin/fixedplan');
    }

    public function addInterest(Request $request, $id)
    {
        //

        $fixed_plan = FixedPlan::findOrFail($id);

        $interest = round(( $fixed_plan->plan_balance * ($fixed_plan->rate/100) * 1 ) / 364) ;

        $fixed_plan->update(['plan_balance' => $fixed_plan->plan_balance+$interest, 'next_interest_date' => date('Y-m-d', strtotime('+1 day'))]);

        return redirect('/admin/fixedplan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fixed_plan = FixedPlan::findOrFail($id);

        $fixed_plan->delete();

        return redirect('/admin/fixedplan');
    }



}
