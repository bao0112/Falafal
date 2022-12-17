<template>
    <div class="flex justify-center items-center min-h-full w-full min-w-full select-none">
        <div>
            <div class="mb-[32px]">
                <router-link
                    :to="{ name: 'app.dashboard' }"
                    class="flex justify-center mx-[160px] py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                    <span>
                        <i class="fa-solid fa-house"></i>
                    </span>
                </router-link>
            </div>
            <div class="flex justify-center text-blue-600 self-start text-6xl font-bold pb-2 mb-[24px] leading-10">
                4 0 4
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-12">Page Not Found</h1>
            </div>
        </div>
    </div>
</template>

<script setup></script>

<style scoped></style>
