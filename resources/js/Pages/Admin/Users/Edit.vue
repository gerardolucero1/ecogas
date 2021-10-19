<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end bg-white overflow-hidden shadow-sm sm:rounded-lg p-2 flex">
                    <a :href="route('winners.index')" class="inline-flex items-center justify-center px-4 py-2 text-base leading-5 rounded-md border font-medium shadow-sm transition ease-in-out duration-150 focus:outline-none focus:shadow-outline bg-blue-600 border-blue-600 text-gray-100 hover:bg-blue-500 hover:border-blue-500 hover:text-gray-100">Regresar</a>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
                <div class="px-4 py-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg sm:p-6">
                    <div class="grid grid-cols-12 md:grid-cols-12 gap-6">
                        <div class="col-span-6 sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Usuario</label>
                            <input v-model="winner.name" type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <label for="number" class="block text-sm font-medium text-gray-700">Estado</label>
                            <input v-model="winner.state" type="text" name="number" id="number" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" />
                        </div>
                    </div>
                    <div class="grid grid-cols-12 md:grid-cols-12 gap-6">
                        <div class="col-span-6 sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Cita</label>
                            <textarea v-model="winner.quote" type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 md:grid-cols-12 gap-6 mt-4">
                        <div class="col-span-6 sm:col-span-6">
                            <button class="inline-flex items-center justify-center px-4 py-2 text-base leading-5 rounded-md border font-medium shadow-sm transition ease-in-out duration-150 focus:outline-none focus:shadow-outline bg-white border-gray-300 text-gray-700" @click="updateWinner">Registrar</button>
                        </div>
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
            'winner'
        ],

        components: {
            AppLayout,
            Welcome,
        },

        data(){
            return{
                
            }
        },

        methods: {
            updateWinner(){
                try {
                    let URL = `/winner/${this.winner.id}`

                    let data = new FormData()
                    data.append('name', this.winner.name)
                    data.append('state', this.winner.state)
                    data.append('quote', this.winner.quote)

                    axios.post(URL, data).then(response => {
                        alert('Actualizado')
                    })
                } catch (error) {
                    console.log(error);
                }
            }
        },
    }
</script>