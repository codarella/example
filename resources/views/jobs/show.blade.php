<x-layout>
    <x-slot:heading>Welcome to the Jobs page</x-slot:heading>


   <h2>{{$job->Title}}</h2>
   <p>
    This job pays {{$job->Salary}} Per year.


   </p>
   @can('edit',$job)  
    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
    @endcan
</x-layout>
