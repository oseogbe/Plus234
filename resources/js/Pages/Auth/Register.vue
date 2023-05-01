<script setup>
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    username: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <Head title="Register" />

    <div class="h-screen flex flex-wrap justify-between">
        <div class="w-full bg-white basis-[100%] sm:basis-[30%] pt-12 sm:pt-20">
            <div class="px-[5%] sm:px-[10%]">
                <img
                    src="/img/plus234/logo-alt.png"
                    alt="Plus234 logo"
                    class="w-40 mx-auto mb-7 sm:mb-14"
                />
                <div class="register-body">
                    <h2
                        class="mb-6 text-2xl leading-8 font-semibold tracking-[0.2px]"
                    >
                        Sign up
                    </h2>
                    <div class="my-9">
                        <form @submit.prevent="submit">
                            <div class="mb-4">
                                <label for="name" class="font-medium">
                                    Username
                                    <input
                                        type="text"
                                        id="username"
                                        v-model="form.username"
                                        class="w-full h-[50px] p-[10px] border border-solid border-[#e4e5e7] focus:border-0 focus:ring-gray-500 text-[#222325] tracking-[0.57px] outline-none rounded"
                                        required
                                    />
                                </label>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.username"
                                />
                            </div>
                            <div class="mb-4">
                                <label for="email" class="font-medium">
                                    Email
                                    <input
                                        type="email"
                                        id="email"
                                        v-model="form.email"
                                        class="w-full h-[50px] p-[10px] border border-solid border-[#e4e5e7] focus:border-0 focus:ring-gray-500 text-[#222325] tracking-[0.57px] outline-none rounded"
                                    />
                                </label>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.email"
                                />
                            </div>
                            <div class="mb-4">
                                <label for="password" class="font-medium">
                                    Password
                                    <input
                                        type="password"
                                        id="password"
                                        v-model="form.password"
                                        class="w-full h-[50px] p-[10px] border border-solid border-[#e4e5e7] focus:border-0 focus:ring-gray-500 text-[#222325] tracking-[0.57px] outline-none rounded"
                                    />
                                </label>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.password"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="confirm-password"
                                    class="font-medium"
                                >
                                    Confirm Password
                                    <input
                                        type="password"
                                        id="confirm-password"
                                        v-model="form.password_confirmation"
                                        class="w-full h-[50px] p-[10px] border border-solid border-[#e4e5e7] focus:border-0 focus:ring-gray-500 text-[#222325] tracking-[0.57px] outline-none rounded"
                                    />
                                </label>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.password_confirmation"
                                />
                            </div>
                            <div class="mb-4">
                                <label for="checkbox" class="text-sm">
                                    <span>
                                        <input
                                            type="checkbox"
                                            id="checkbox"
                                            v-model="form.checkbox"
                                            class="rounded-[4px] focus:ring-0 text-gray-500"
                                        />
                                    </span>
                                    By providing us with your information you
                                    are consenting to the collection and use of
                                    your information in accordance with our
                                    <Link
                                        href="#"
                                        class="text-gray-500 no-underline font-medium"
                                        >Terms of Service</Link
                                    >
                                    and
                                    <Link
                                        href="#"
                                        class="text-gray-500 no-underline font-medium"
                                        >Privacy Policy</Link
                                    >
                                </label>
                            </div>
                            <button
                                class="bg-gray-500 border-2 border-gray-500 w-full h-12 rounded cursor-pointer flex items-center justify-center text-white text-base font-semibold leading-6 outline-none transition duration-200 ease-in-out select-none"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                Register
                            </button>
                        </form>
                    </div>
                    <div class="text-sm sm:text-base text-center">
                        <span class="pr-[3px]">Already have an account?</span>
                        <Link
                            :href="route('login')"
                            class="text-gray-500 tracking-[0.23px] leading-6 underline"
                            >Sign in</Link
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden sm:block basis-[70%] bg-gray-500"></div>
    </div>
</template>
