<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
                <div class="px-4 py-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg sm:p-6 flex">
                    <div>
                        <div class='flex  p-8 w-full rounded-lg overflow-hidden mx-auto'>
                            <div class="relative flex flex-col items-center justify-around p-4 mr-4 w-80 h-80 rounded-2xl " style="transform: translate(0px, 0px); opacity: 1;">
                                <div class="absolute z-0 w-full h-full text-white transform scale-x-105 scale-y-95 bg-purple-300 rounded-xl -rotate-2 " style="z-index: -1;"></div>
                                <div class="absolute z-0 w-full h-full text-white transform scale-x-105 scale-y-95 bg-purple-400 rounded-xl rotate-2 " style="z-index: -1;"></div>
                                <div class="absolute z-0 w-full h-full transform scale-x-105 scale-y-95 bg-white rounded-xl " style="z-index: -1;"></div>
                                    <h3 class="z-10 p-2 text-2xl font-semibold text-purple-900">REGISTROS</h3>
                                <div class="z-10 p-2 text-purple-900">
                                    <i style="font-size: 30px;" class="fas fa-user-edit"></i>
                                </div>
                                <div class="z-10 p-2 text-sm text-center text-gray-500 ">
                                    <input type="text" v-model="info.registers">
                                    <br>
                                    <button style="margin-top: 10px;" class="inline-flex items-center justify-center px-4 py-2 text-base leading-5 rounded-md border font-medium shadow-sm transition ease-in-out duration-150 focus:outline-none focus:shadow-outline bg-white border-gray-300 text-gray-700" @click="updateRegister">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class='flex  p-8 w-full rounded-lg overflow-hidden mx-auto'>
                            <div class="relative flex flex-col items-center justify-around p-4 mr-4 w-80 h-80 rounded-2xl " style="transform: translate(0px, 0px); opacity: 1;">
                                <div class="absolute z-0 w-full h-full text-white transform scale-x-105 scale-y-95 bg-purple-300 rounded-xl -rotate-2 " style="z-index: -1;"></div>
                                <div class="absolute z-0 w-full h-full text-white transform scale-x-105 scale-y-95 bg-purple-400 rounded-xl rotate-2 " style="z-index: -1;"></div>
                                <div class="absolute z-0 w-full h-full transform scale-x-105 scale-y-95 bg-white rounded-xl " style="z-index: -1;"></div>
                                    <h3 class="z-10 p-2 text-2xl font-semibold text-purple-900">GANADORES</h3>
                                <div class="z-10 p-2 text-purple-900">
                                    <i style="font-size: 30px;" class="fas fa-trophy"></i>
                                </div>
                                <div class="z-10 p-2 text-sm text-center text-gray-500 ">
                                    <span style="font-size: 25px; font-weight: bold;">{{ winners.length }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class='flex  p-8 w-full rounded-lg overflow-hidden mx-auto'>
                            <div class="relative flex flex-col items-center justify-around p-4 mr-4 w-80 h-80 rounded-2xl " style="transform: translate(0px, 0px); opacity: 1;">
                                <div class="absolute z-0 w-full h-full text-white transform scale-x-105 scale-y-95 bg-purple-300 rounded-xl -rotate-2 " style="z-index: -1;"></div>
                                <div class="absolute z-0 w-full h-full text-white transform scale-x-105 scale-y-95 bg-purple-400 rounded-xl rotate-2 " style="z-index: -1;"></div>
                                <div class="absolute z-0 w-full h-full transform scale-x-105 scale-y-95 bg-white rounded-xl " style="z-index: -1;"></div>
                                    <h3 class="z-10 p-2 text-2xl font-semibold text-purple-900">PREMIOS</h3>
                                <div class="z-10 p-2 text-purple-900">
                                    <i style="font-size: 30px;" class="fas fa-award"></i>
                                </div>
                                <div class="z-10 p-2 text-sm text-center text-gray-500 ">
                                    <input type="text" v-model="info.prizes">
                                    <br>
                                    <button style="margin-top: 10px;" class="inline-flex items-center justify-center px-4 py-2 text-base leading-5 rounded-md border font-medium shadow-sm transition ease-in-out duration-150 focus:outline-none focus:shadow-outline bg-white border-gray-300 text-gray-700" @click="updateRegister">Actualizar</button>
                                </div>
                            </div>
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
            'winners',
            'info'
        ],

        components: {
            AppLayout,
            Welcome,
        },

        methods: {
            updateRegister(){
                try {
                    let URL = '/update-info'

                    let data = new FormData()
                    data.append('registers', this.info.registers)
                    data.append('prizes', this.info.prizes)

                    axios.post(URL, data).then(response => {
                        
                        alert('actualziado')
                    })

                } catch (error) {
                    
                }
            }
        },
    }
</script>
