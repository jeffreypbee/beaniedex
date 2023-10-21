<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import { useForm, Head } from '@inertiajs/vue3';
 
defineProps(['beanies']);

</script>
 
<template>
    <Head title="Beanies" />
 
    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <div v-for="beanie in beanies" :key="beanie.id">
                {{ beanie.name }}
            </div>
        </div>
    </AuthenticatedLayout>
</template>