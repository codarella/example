<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>
    <p> 
        
<form method="POST" action="/jobs/{{$job->id}}" >
  @csrf
  @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of your details from you. </p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="Title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input type="text" 

                name="Title" 
                value="{{$job->Title}}"
                id="Title" 
                autocomplete="Title" 
                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                >
              </div>
              @error('Title')
              <p class="text-sx text-red-500 italic">{{$message}}</p>
              @enderror
            </div>
          </div>
          

  
          <div class="sm:col-span-4">
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input type="text"
                value="{{$job->Salary}}" name="Salary" id="Salary"  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50,000">
              </div>
              @error('Salary')
              <p class="text-sx text-red-500 italic">{{$message}}</p>
              @enderror
            </div>
          </div>

        </div >
      
      </div>
  
  
          
    
    <div class="mt-6 flex items-center justify-between gap-x-6">
      <div class='flex items center'>
            <button class="text-red-500 text-sm font-bold" form="delete-form"> Delete</button>
      </div>
      <div class="flex items-center gap-x-6">
        <a  href="/jobs/{{$job->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
       <div >
         <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semib old text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
       </div>
      </div>    
    </div>
  </form> 
  <form method="POST" action="/jobs/{{$job->id}}" class="hidden" id="delete-form"> 
    @csrf
    @method('DELETE')
  
    
</x-layout>