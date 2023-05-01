<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Login" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
    </div>

    <!-- <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form> -->

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
                        Sign in
                    </h2>
                    <div class="my-9">
                        <form @submit.prevent="submit">
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
                                <div class="mt-4 text-sm">
                                    <Link
                                        v-if="canResetPassword"
                                        :href="route('password.request')"
                                        class="text-sm text-gray-600 hover:text-gray-900"
                                    >
                                        Forgot your password?
                                    </Link>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="checkbox" class="text-sm">
                                    <span>
                                        <input
                                            type="checkbox"
                                            id="checkbox"
                                            name="remember"
                                            v-model="form.remember"
                                            class="rounded-[4px] focus:ring-0 text-gray-500"
                                        />
                                    </span>
                                    Remember me
                                </label>
                            </div>
                            <button
                                class="bg-gray-500 border-2 border-gray-500 w-full h-12 rounded cursor-pointer flex items-center justify-center text-white text-base font-semibold leading-6 outline-none transition duration-200 ease-in-out select-none"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                Login
                            </button>
                        </form>
                    </div>
                    <div class="mt-4 text-sm sm:text-base text-center">
                        <span class="pr-[3px]">Don't have an account?</span>
                        <Link
                            :href="route('register')"
                            class="text-gray-500 hover:text-gray-900 tracking-[0.23px] leading-6 underline"
                            >Join now</Link
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden sm:block basis-[70%] bg-gray-500"></div>
    </div>
</template>
