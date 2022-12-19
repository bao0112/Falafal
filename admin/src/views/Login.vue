<template>
    <div class="flex min-h-full items-center justify-center px-4 sm:px-6 lg:px-8 select-none">
        <!-- Error Message -->
        <div
            v-if="errorMsg"
            class="absolute top-[24px] right-[24px] flex items-center justify-between py-3 px-5 bg-red-500 text-white rounded"
        >
            {{ errorMsg }}
            <span
                @click="errorMsg = ''"
                class="w-6 h-6 ml-[12px] mt-[4px] flex items-center justify-center rounded-full transition-colors cursor-pointer hover:bg-[rgba(0,0,0,0.2)]"
            >
                <i class="fa-solid fa-xmark"></i>
            </span>
        </div>

        <div class="w-[400px] max-w-sm space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="../assets/logo-full.svg" alt="Falafal" />
            </div>
            <form class="space-y-6" method="POST" @submit.prevent="login">
                <input type="hidden" name="remember" value="true" />
                <div class="pb-[24px] px-[12px] rounded-md shadow-lg">
                    <div>
                        <div class="relative z-0 w-full group">
                            <label
                                for="email"
                                class="invisible relative px-1 group-focus-within:visible group-focus-within:top-2 group-focus-within:bg-white group-focus-within group-focus-within:text-blue-600 top-8 left-3 w-auto"
                            >
                                Email
                            </label>
                            <input
                                type="email"
                                autocomplete="email"
                                name="email"
                                id="email"
                                v-model="user.email"
                                class="block w-full h-10 px-4 border border-gray-300 text-gray-900 rounded-md focus:outline focus:outline-[1.5px] focus:ring-blue-500 focus:outline-blue-500 focus:placeholder-transparent dark:placeholder-gray-300 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required=""
                                placeholder="Enter your email address"
                            />
                        </div>
                        <div class="relative z-0 w-full group">
                            <label
                                for="password"
                                class="invisible relative px-1 group-focus-within:visible group-focus-within:top-2 group-focus-within:bg-white group-focus-within group-focus-within:text-blue-600 top-8 left-3 w-auto"
                            >
                                Password
                            </label>
                            <input
                                type="password"
                                autocomplete="current-password"
                                name="password"
                                id="password"
                                v-model="user.password"
                                class="block w-full h-10 px-4 border border-gray-300 text-gray-900 rounded-md focus:outline focus:outline-[1.5px] focus:ring-blue-500 focus:outline-blue-500 focus:placeholder-transparent dark:placeholder-gray-300 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required=""
                                placeholder="Enter your password"
                            />
                            <span
                                id="eye-icon"
                                @click="handlePassword"
                                class="absolute p-[4px] top-[32px] right-[8px] flex items-center cursor-pointer text-gray-300 hover:text-gray-400"
                            >
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="flex mt-[24px] items-center justify-between">
                        <div class="flex items-center">
                            <input
                                id="remember-me"
                                name="remember-me"
                                v-model="user.remember"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                            />
                            <label for="remember-me" class="ml-2 block text-md text-gray-900">Remember me</label>
                        </div>

                        <div class="text-md">
                            <router-link
                                :to="{ name: 'requestPassword' }"
                                class="font-medium text-blue-600 hover:text-blue-500"
                                >Forgot password?
                            </router-link>
                        </div>
                    </div>

                    <div class="mt-[24px]">
                        <button
                            type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-md font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        >
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            Login
                        </button>
                    </div>

                    <!-- 
                    <div class="relative flex py-5 px-12 items-center">
                        <div class="flex-grow border-t border-gray-400"></div>
                        <span class="flex-shrink mx-4 text-gray-400">Bạn chưa có tài khoản</span>
                        <div class="flex-grow border-t border-gray-400"></div>
                    </div>

                    <div class="flex justify-center">
                        <button
                            type="submit"
                            class="group relative flex justify-center w-3/5 rounded-md border border-transparent bg-slate-400 py-2 text-sm font-small text-white hover:bg-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2"
                        >
                            Đăng ký
                        </button>
                    </div>
                    -->
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

import store from "../store";
import router from "../router";

const showPassword = ref(true);
const loading = ref(false);
const errorMsg = ref("");

const user = {
    email: "",
    password: "",
    remember: false,
};

function handlePassword() {
    const eyeIcon = document.getElementById("eye-icon");
    const password = document.getElementById("password");

    if (showPassword.value) {
        eyeIcon.innerHTML = `<i class="fa-solid fa-eye-slash"></i>`;
        password.type = "text";
    } else {
        eyeIcon.innerHTML = `<i class="fa-solid fa-eye"></i>`;
        password.type = "password";
    }

    showPassword.value = !showPassword.value;
}

function login() {
    loading.value = true;
    store
        .dispatch("login", user)
        .then(() => {
            loading.value = false;
            router.push({ name: "app.dashboard" });
        })
        .catch(({ response }) => {
            loading.value = false;
            errorMsg.value = response.data.message;
        });
}
</script>

<style scoped></style>
