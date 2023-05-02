<script setup>
import InputError from "@/Components/InputError.vue";
import { useForm } from "@inertiajs/vue3";

defineProps({
    status: {
        type: String,
    },
});

const emit = defineEmits(["closeModal"]);

const form = useForm({
    email: "",
});

const submit = () => {
    form.post(route("password.email"));
};
</script>

<template>
    <div
        class="flex flex-col justify-center inset-0 fixed z-[9999] bg-transparent"
    >
        <div class="absolute inset-0 bg-[#ffffffbf]"></div>
        <div class="w-full flex justify-center items-start h-max my-[40]">
            <div
                class="w-[510px] relative bg-white box-border shadow-md border border-gray-200 border-t-0 rounded-[3px]"
            >
                <div
                    class="w-full bg-gray-500 h-1 ml-[-1px] rounded-tl-[3px] rounded-tr-[3px]"
                ></div>
                <div class="flex flex-col p-10">
                    <div
                        v-if="status"
                        class="mb-4 font-medium text-sm text-green-600"
                    >
                        {{ status }}
                    </div>
                    <button
                        @click="emit('closeModal')"
                        class="w-8 h-8 flex justify-center items-center bg-transparent hover:bg-[#efeff0] border-0 rounded-[2px] cursor-pointer focus:outline-none text-gray-400 hover:text-[#222325] absolute right-2 top-3"
                    >
                        <div
                            class="h-6 w-6 relative flex justify-center items-center"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M19 6.74965L17.2503 5L11.9996 10.2503L6.74975 5L5 6.74965L10.2499 12L5 17.2503L6.74975 19L11.9996 13.7497L17.2503 19L19 17.2503L13.7494 12L19 6.74965Z"
                                    fill="currentColor"
                                ></path>
                            </svg>
                        </div>
                    </button>
                    <div
                        class="h-full min-h-full w-full justify-center items-center flex flex-col pt-0"
                    >
                        <div
                            class="w-full max-w-[360px] sm:max-w-full mx-auto flex-grow"
                        >
                            <p
                                class="text-gray-900 text-2xl font-semibold tracking-[0.2px]"
                            >
                                Password recovery
                            </p>
                            <form class="mt-2" @submit.prevent="submit">
                                <p class="text-[#62646a]">
                                    Enter the email address you used when you
                                    signed up for your account, and we’ll email
                                    you a link to reset your password.
                                </p>
                                <div class="w-full relative my-6">
                                    <input
                                        type="email"
                                        class=""
                                        placeholder="Email"
                                        v-model="form.email"
                                        required
                                    />
                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.email"
                                    />
                                </div>
                                <!-- <div class="recaptcha-area"></div> -->
                                <div>
                                    <button
                                        class="w-full h-[42px] relative cursor-pointer bg-gray-500 border-transparent rounded font-semibold text-base text-white text-center flex justify-center items-center transition focus:outline-none select-none"
                                        :class="{
                                            'opacity-25': form.processing,
                                        }"
                                        :disabled="form.processing"
                                    >
                                        Send reset link
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
