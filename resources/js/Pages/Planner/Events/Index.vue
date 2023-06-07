<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from "@inertiajs/vue3";
import EventsTable from "./Partials/EventsTable.vue";

const form = useForm({
    name: "",
    description: "",
    location: "",
    tags: [],
    poster: null,
    post_at: null,
    schedule: [],
    pricings: []
});
</script>

<template>
    <Head title="Events" />

    <MainLayout>
        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:pr-6 lg:pr-8 space-y-6">
                <section>
                    <header>
                        <h2 class="text-lg px-5 font-medium text-gray-900">
                            Events
                        </h2>

                        <p class="mt-1 px-5 text-sm text-gray-600">
                            Plan and share your events across social media
                        </p>
                    </header>
                </section>

                <div class="px-5 mx-auto space-y-16">
                    <EventsTable />

                    <!-- <form
                        @submit.prevent="form.post(route('events.store'))"
                    >
                        <section>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div>
                                    <InputLabel for="name" value="Name" />

                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        type="text"
                                        class="mt-1 block w-full"
                                    />

                                    <InputError :message="form.errors.name" class="mt-2" />
                                </div>
                                <div>
                                    <InputLabel for="description" value="Description" />

                                    <TextInput
                                        id="description"
                                        v-model="form.description"
                                        type="text"
                                        class="mt-1 block w-full"
                                    />

                                    <InputError :message="form.errors.description" class="mt-2" />
                                </div>
                                <div>

                                </div>
                                <div>

                                </div>
                                <div>

                                </div>
                                <div>

                                </div>
                            </div>
                        </section>
                    </form> -->
                </div>
            </div>
        </div>
    </MainLayout>
</template>
