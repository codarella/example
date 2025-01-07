<x-layout>
    <x-slot:heading>
        Log in
    </x-slot:heading>
  
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of your details from you.</p>
        
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email"  :value="old('email')"/>
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                </div>
        
                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" name="password" id="password" required />
                        <x-form-error name="password" />
                    </div>
                    
                </x-form-field>

            </div>
        
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <x-form-button>Log in</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
