<x-app-layout>
    <form action="{{ route('register') }}" method="post" class="w-[400px] mx-auto px-6">
        @csrf
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="pb-[24px] px-[12px] rounded-md shadow-lg">
            <div>
                <div class="relative z-0 w-full group">
                    <label for="email" class="invisible relative px-1 group-focus-within:visible group-focus-within:top-2 group-focus-within:bg-white group-focus-within group-focus-within:text-blue-600 top-8 left-3 w-auto">
                        Name
                    </label>
                    <x-input type="email" name="email" placeholder="Enter your name" :value="old('name')" />
                </div>
                <div class="relative z-0 w-full group">
                    <label for="email" class="invisible relative px-1 group-focus-within:visible group-focus-within:top-2 group-focus-within:bg-white group-focus-within group-focus-within:text-blue-600 top-8 left-3 w-auto">
                        Email
                    </label>
                    <x-input type="email" name="email" placeholder="Enter your email address" :value="old('email')" />
                </div>
                <div class="relative z-0 w-full group">
                    <label for="password" class="invisible relative px-1 group-focus-within:visible group-focus-within:top-2 group-focus-within:bg-white group-focus-within group-focus-within:text-blue-600 top-8 left-3 w-auto">
                        Password
                    </label>
                    <x-input type="password" name="password" placeholder="Enter your password" :value="old('password')" />
                </div>
                <div class="relative z-0 w-full group">
                    <label for="password" class="invisible relative px-1 group-focus-within:visible group-focus-within:top-2 group-focus-within:bg-white group-focus-within group-focus-within:text-blue-600 top-8 left-3 w-auto">
                        Password
                    </label>
                    <x-input type="password" name="password" placeholder="Confirm your password" :value="old('password')" />
                </div>
            </div>

            <div class="mt-[24px]">
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-md font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    Register
                </button>
            </div>


            <div class="relative flex py-5 px-12 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-gray-400">Already have an account</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>

            <div class="flex justify-center">
                <a href="{{ route('login') }}" class="group relative flex justify-center w-3/5 rounded-md border border-transparent bg-slate-400 py-2 text-sm font-small text-white hover:bg-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2">
                    Login
                </a>
            </div>

        </div>
    </form>
</x-app-layout>