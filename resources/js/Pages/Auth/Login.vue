<script setup>
import { ref } from "vue";
import InputError from "@/Components/InputError.vue";
import PasswordRecovery from "@/Components/PasswordRecovery.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

let showPasswordRecovery = ref(false);

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
                        <div
                            v-if="status"
                            class="mb-4 font-medium text-sm text-green-600"
                        >
                            {{ status }}
                        </div>
                        <form @submit.prevent="submit">
                            <div class="mb-4">
                                <label for="email" class="font-medium">
                                    Email
                                    <input
                                        type="email"
                                        id="email"
                                        v-model="form.email"
                                        required
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
                                        required
                                    />
                                </label>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.password"
                                />
                                <div class="mt-4 text-sm">
                                    <div
                                        v-if="canResetPassword"
                                        @click="showPasswordRecovery = true"
                                        class="text-sm text-gray-600 hover:text-gray-900 cursor-pointer"
                                    >
                                        Forgot your password?
                                    </div>
                                    <password-recovery
                                        v-show="showPasswordRecovery"
                                        @closeModal="showPasswordRecovery = false"
                                    />
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
                                        />
                                    </span>
                                    Remember me
                                </label>
                            </div>
                            <button
                                class="btn-primary"
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
                            >Join now
                        </Link>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden sm:block basis-[70%] bg-gray-500"></div>
    </div>
</template>
