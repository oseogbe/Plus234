<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import DeleteUserForm from "./Partials/DeleteUserForm.vue";
import UpdatePasswordForm from "./Partials/UpdatePasswordForm.vue";
import UpdateProfileInformationForm from "./Partials/UpdateProfileInformationForm.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Profile" />

    <MainLayout>
        <div class="py-8">
            <header class="mb-8">
                <h2 class="px-5 text-lg font-medium text-gray-900">Settings</h2>

                <p class="px-5 mt-1 text-sm text-gray-600">
                    Would like to make some updates to your profile?
                </p>
            </header>

            <div class="grid md:grid-cols-2 gap-4 mx-5 sm:pr-6 lg:pr-8">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>

                <div class="space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <UpdatePasswordForm class="max-w-xl" />
                    </div>

                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <DeleteUserForm class="max-w-xl" />
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
