<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const user = usePage().props.auth.user;

const bankInput = ref(null);
const accountNameInput = ref(null);
const accountNoInput = ref(null);

const form = useForm({
    bank: user.bank ?? "",
    account_name: user.account_name ?? "",
    account_no: user.account_no ?? "",
});

const updateBankInfo = () => {
    form.put(route('bank-info.update'), {
        preserveScroll: true,
        // onSuccess: () => form.reset(),
        // onError: () => {
        //     if (form.errors.password) {
        //         form.reset('password', 'password_confirmation');
        //         passwordInput.value.focus();
        //     }
        //     if (form.errors.current_password) {
        //         form.reset('current_password');
        //         currentPasswordInput.value.focus();
        //     }
        // },
    });
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Update Bank Details</h2>

            <p class="mt-1 text-sm text-gray-600">
                Ensure your details are up-to-date. All payments will be made to this account.
            </p>
        </header>

        <form @submit.prevent="updateBankInfo" class="mt-6 space-y-6" autocomplete="off">
            <div>
                <InputLabel for="bank" value="Name of Bank" />

                <TextInput
                    id="bank"
                    ref="bankInput"
                    v-model="form.bank"
                    type="text"
                    class="mt-1 block w-full"
                />

                <InputError :message="form.errors.bank" class="mt-2" />
            </div>

            <div>
                <InputLabel for="account_name" value="Account Name" />

                <TextInput
                    id="account_name"
                    ref="accountNameInput"
                    v-model="form.account_name"
                    type="text"
                    class="mt-1 block w-full"
                />

                <InputError :message="form.errors.account_name" class="mt-2" />
            </div>

            <div>
                <InputLabel for="account_no" value="Account Number" />

                <TextInput
                    id="account_no"
                    ref="accountNoInput"
                    v-model="form.account_no"
                    type="text"
                    class="mt-1 block w-full"
                />

                <InputError :message="form.errors.account_no" class="mt-2" />
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>
