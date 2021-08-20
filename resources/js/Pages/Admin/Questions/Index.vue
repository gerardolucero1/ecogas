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
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th class="px-4 py-3">Pregunta</th>
                                    <th class="px-4 py-3">Respuesta</th>
                                    <th class="px-4 py-3">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="text-gray-700" v-for="(question, index) in questions" :key="index">
                                    <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            
                                            <div>
                                            <p class="font-semibold text-black">{{ question.name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-ms font-semibold border">{{ question.answer }}</td>
                                    <td class="px-4 py-3 text-sm border">
                                        <a class="inline-flex items-center justify-center px-4 py-2 text-base leading-5 rounded-md border font-medium shadow-sm transition ease-in-out duration-150 focus:outline-none focus:shadow-outline bg-blue-600 border-blue-600 text-gray-100 hover:bg-blue-500 hover:border-blue-500 hover:text-gray-100" :href="route('questions.edit', [question.id])">Editar</a>
                                        <button class="inline-flex items-center justify-center px-4 py-2 text-base leading-5 rounded-md border font-medium shadow-sm transition ease-in-out duration-150 focus:outline-none focus:shadow-outline bg-red-600 border-red-600 text-gray-100 hover:bg-red-500 hover:border-red-500 hover:text-gray-100" @click="deleteQuestion(question, index)">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
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

        methods: {
            deleteQuestion(question, index){
                try {
                    let URL = `/question/${question.id}`

                    axios.delete(URL).then(response => {
                        this.questions.splice(index, 1)

                        alert('Eliminada')
                    })
                } catch (error) {
                    console.log(error);
                }
            }
        },
    }
</script>