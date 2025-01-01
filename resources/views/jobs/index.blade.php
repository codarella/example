<x-layout>
    <x-slot:heading>Welcome to the Jobs page</x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)


        <a href="/jobs/{{$job['id']}}"class="block px-4 py-6 border border-gray-200 rounded-lg ">
            <div class="font-bold text-blue-500 text-sm"> {{$job->employer->name}}</div>
        <li><strong>{{$job['Title']}}:</strong> Pays:{{$job['Salary']}}</li>
        </a>
        @endforeach
        <div> 
            {{$jobs->links()}}
        </div>

    </div>
        
</x-layout>