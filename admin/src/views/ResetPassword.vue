<template>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 select-none">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Reset password</h2>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true" />
                <div class="rounded-md -space-y-px">
                    <div class="relative z-0 w-full group">
                        <label
                            for="new-password"
                            class="invisible relative px-1 group-focus-within:visible group-focus-within:top-2 group-focus-within:bg-white group-focus-within group-focus-within:text-blue-600 top-8 left-3 w-auto"
                        >
                            Password
                        </label>
                        <input
                            type="password"
                            name="password"
                            id="new-password"
                            class="block w-full h-10 px-4 border border-gray-300 text-gray-900 rounded-md focus:ring-blue-500 focus:outline-blue-500 focus:placeholder-transparent dark:placeholder-gray-300 dark:focus:ring-blue-500 dark:focus:outline-blue-500"
                            required=""
                            placeholder="Enter your new password"
                        />
                    </div>
                    <div class="relative z-0 w-full group">
                        <label
                            for="password-repeat"
                            class="invisible relative px-1 group-focus-within:visible group-focus-within:top-2 group-focus-within:bg-white group-focus-within group-focus-within:text-blue-600 top-8 left-3 w-auto"
                        >
                            Confirm Password
                        </label>
                        <input
                            type="password"
                            name="password-repeat"
                            id="password-repeat"
                            class="block w-full h-10 px-4 border border-gray-300 text-gray-900 rounded-md focus:ring-blue-500 focus:outline-blue-500 focus:placeholder-transparent dark:placeholder-gray-300 dark:focus:ring-blue-500 dark:focus:outline-blue-500"
                            required=""
                            placeholder="Confirm your new password"
                        />
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup></script>
