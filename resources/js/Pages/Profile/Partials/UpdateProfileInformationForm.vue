<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    username: user.username,
    email: user.email,
    bio: user.bio ?? "",
});

const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");

// const fileInputRef = ref(null);

// const handleFileChange = () => {
//     const file = fileInputRef.value.files[0];
//     console.log(file);
// };

const handleAddFile = (error, file) => {
    if (error) {
        console.log("Error adding file: ", error);
        return;
    }

    form.dp = file.file;
    console.log(form.dp);
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Profile Information
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile information and email address.
            </p>
        </header>

        <form
            @submit.prevent="form.patch(route('profile.update'))"
            class="mt-6 space-y-6"
        >
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="username" value="Username" />

                <TextInput
                    id="username"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.username"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.username" />
            </div>

            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="email"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <InputLabel for="bio" value="Bio" />

                <TextInput
                    id="bio"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.bio"
                    autocomplete="bio"
                />

                <InputError class="mt-2" :message="form.errors.bio" />
            </div>

            <div>
                <InputLabel for="dp" value="Display Image" />

                <!-- <input type="file" ref="fileInputRef" @change="handleFileChange" /> -->

                <div class="mt-2 w-[200px]">
                    <file-pond
                        id="dp"
                        name="dp"
                        label-idle="Drag & Drop your picture or <span class='filepond--label-action'>Browse</span>"
                        instant-upload="false"
                        accepted-file-types="image/jpeg, image/png"
                        :allow-multiple="false"
                        v-bind:files="user.dp"
                        stylePanelLayout="compact circle"
                        :server="{
                            url: route('dp.upload'),
                            process: {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken,
                                },
                            },
                        }"
                        @addfile=""
                    />
                </div>

                <InputError class="mt-2" :message="form.errors.dp" />
            </div>

            <div v-if="mustVerifyEmail && user.email_verified_at === null">
                <p class="text-sm mt-2 text-gray-800">
                    Your email address is unverified.
                    <Link
                        :href="route('verification.send')"
                        method="post"
                        as="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Click here to re-send the verification email.
                    </Link>
                </p>

                <div
                    v-show="status === 'verification-link-sent'"
                    class="mt-2 font-medium text-sm text-green-600"
                >
                    A new verification link has been sent to your email address.
                </div>
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition
                    enter-from-class="opacity-0"
                    leave-to-class="opacity-0"
                    class="transition ease-in-out"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600"
                    >
                        Saved.
                    </p>
                </Transition>
            </div>
        </form>
    </section>
</template>

<style>
.filepond--root :not(text) {
    font-size: 12px;
}
</style>
