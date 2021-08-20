<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Preguntas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end bg-white overflow-hidden shadow-sm sm:rounded-lg p-2 flex">
                    <a :href="route('questions.create')" class="inline-flex items-center justify-center px-4 py-2 text-base leading-5 rounded-md border font-medium shadow-sm transition ease-in-out duration-150 focus:outline-none focus:shadow-outline bg-blue-600 border-blue-600 text-gray-100 hover:bg-blue-500 hover:border-blue-500 hover:text-gray-100">Agregar</a>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
                <div class="px-4 py-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg sm:p-6">
                    <table style="width:100%">
                        <tr>
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                            <th>Opciones</th>
                        </tr>
                        <tr v-for="(question, index) in questions" :key="index">
                            <td>{{ question.name }}</td>
                            <td>{{ question.answer }}</td>
                            <td>
                                <a :href="route('questions.edit')"></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    export default {
        props: [
            'questions'
        ],

        components: {
            AppLayout,
            Welcome,
        },
    }
</script>