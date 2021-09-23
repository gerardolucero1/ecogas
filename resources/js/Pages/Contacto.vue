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
            font-size: 19px;
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

        @media only screen and (max-width: 1000px){
            .button-section{
                justify-content: center;


                a{
                    margin-left: 2px;
                    margin-right: 2px;
                    line-height: 9px;
                    height: 30px;
                    font-size: 9px;
                }
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

        <div class="header">
            <img src="/images/nueva/pages/contacto.png" alt="">
        </div>

        <div class="content">
            <p>Comunícate en nuestro chat en <strong>www.ecogas.com.mx</strong> <br> 
                para recibir asesoría sobre nuestra promoción de <br> 
                <strong>25 aniversario</strong> en un horario de: 
            </p>
            
            <br>
            <p>L-V 9:00 a 18:00 hrs y Sab. de 09:00 a 13:00 hrs. Tiempo del centro.</p>
            

            <div style="margin-top: 20px;">
                <a target="_blank" href="https://es-la.facebook.com/ECOGASMexico/" style="font-size: 25px !important;">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a target="_blank" style="margin-left: 10px; font-size: 25px !important;" href="https://twitter.com/ecogasmexico?lang=en">
                    <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" style="margin-left: 10px; font-size: 25px !important;" href="https://www.instagram.com/ecogasmexico/?hl=en">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
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