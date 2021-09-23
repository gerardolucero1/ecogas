<style scoped lang="scss">
    .main-container{
        background-color: #005295;
        min-height: 100vh;
        padding: 10px;

        .header{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content{
            padding: 20px;
            color: white;
        }

        .button-section{
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 10000000;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            a{
                margin-left: 10px;
                margin-right: 10px;
                background-color: #76B727 !important;
                display: inline-block;
                text-decoration: none;
                color: #005295;
                border: 1px solid white;
                border-bottom: none;
                padding: 2px 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                font-weight: bold;
                text-align: center;
                line-height: 15px;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 35px;
            }
        }
    }
</style>

<template>
    <div class="main-container">

        <div class="button-section">
            <jet-nav-link :href="route('welcome')" :active="route().current('welcome')">
                INICIO
            </jet-nav-link>
            <jet-nav-link :href="route('faqs')" :active="route().current('faqs')">
                FAQ's
            </jet-nav-link>
            <jet-nav-link :href="route('terminos')" :active="route().current('terminos')">
                BASES LEGALES <br>
                TERMINOS Y CONDICIONES
            </jet-nav-link>
            <jet-nav-link :href="route('privacidad')" :active="route().current('privacidad')">
                AVISO DE PRIVACIDAD
            </jet-nav-link>
            <jet-nav-link :href="route('contacto')" :active="route().current('contacto')">
                CONTACTO
            </jet-nav-link>
        </div>

        <div class="content">
            <div class="web">
                <img class="" src="/images/nueva/web/PREGUNTAS_FRECUENTES.png" alt="">
            </div>
            <div class="movil">
                <img class="" src="/images/nueva/movil/PAGINAS_FRECUENTES_MOVIL.png" alt="">
            </div>
            <!-- <ul>
                <li v-for="(question, index) in questions" :key="index" style="margin-top: 20px;">
                    <span style="font-size: 22px; font-weight: bold;">{{ index + 1 }} - {{ question.name }}</span>

                    <p style="font-size: 19px;">{{ question.answer }}</p>
                </li>
            </ul> -->
        </div>
    </div>
</template>

<script>
import JetNavLink from '@/Jetstream/NavLink'

export default {
    components: {
        JetNavLink,
    },
}
</script>