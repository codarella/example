<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\User;

use Auth;

use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
    $job=job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index',[ 
        'jobs'=> $job


    ]);
}
    public function  create() {
        return view('jobs.create');


    }
    public function show(Job $job)
    {
        return view ('jobs.show',['job'=>$job]);

    }
    public function store()
    {
        request()->validate([
            'Title'=>['min:3','required'],
            'Salary'=>['required'],
        ]);
      
        $job= Job::create([
            'Title'=> request('Title'),
            'Salary'=>request('Salary'),
            'employer_id'=>1,
        ]);
        // \Illuminate\Support\Facades\Mail::to($job->employer->user)->send(
        //     new \App\Mail\JobPosted($job)
        // );
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
            // $job=Job::find($id);
            // Gate::define('edit-job',function(User $user, Job $job){
            //     return ($job->employer->user->is($user));

            // });
            // Gate::authorize('edit-job',$job);
            
        
          
            return view('jobs.edit',['job'=>$job]);
    }
    public function update(Job $job)
    {
        // Gate::authorize('edit-job',$job);

        request()->validate([
            'Title' => ['required', 'min:3'],
            'Salary' => ['required']
        ]);
    info("line 70");
        $job->update([
            'Title' => request('Title'),  // Fix the typo here
            'Salary' => request('Salary'),
        ]);
    info("line 75");
        return redirect('/jobs/'.$job->id);
    }
    public function delete(Job $job)
    {
        Gate::authorize('edit-job',$job);

        $job=job::findOrFail($job->id);
        $job->delete();
        return redirect('/jobs');
    }
   
    
    //
}
