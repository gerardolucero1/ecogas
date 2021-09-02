<style lang="scss" scoped>
    .main-container{
        padding: 0;
        margin: 0;
        position: relative;

        .wp{
            position: fixed;
            bottom: 0;
            right: 0;
            width: 90px;
            z-index: 1000000;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .section{
            position: relative;

            img{
                width: 100%;
                height: 100%;
            }

            .content{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        }

        .web{
            display: block;
            position: relative;

            .menu-web{
                position: fixed;
                display: flex;
                left: 0;
                top: 25%;
                flex-direction: column;
                z-index: 1000;
                margin-left: 20px;

                    .btn-menu{
                        margin-top: 10px;

                        img{
                            width: 65px;
                        }
                    }

                 
            }

            #premios{
                .content{

                    .box{
                        display: flex;
                        justify-content: flex-end;
                    
                        .carousel{
                            width: 60%;
                            display: block !important;

                            img{
                                margin-left: 10%;
                                margin-top: 15%;
                                width: 60%;
                            }
                        }
                    }
                    
                }
            }


            #ganadores{

                .content{
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;

                    .box{
                        flex: 1;
                        
                    }

                    & .box:nth-child(2){
                        .binnie-container{
                            display: flex;
                            justify-content: center;
                            align-items: center;

                            .box-big{
                                flex: .7;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                padding: 0 20px;
                                flex-direction: column;
                                
                            }

                            .header{
                                    background-color: #76B727;
                                    padding: 15px 15px;
                                    font-size: 45px;
                                    border-radius: 5px;
                                    z-index: 500000;
                                    box-shadow: 1px 1px 5px rgb(43, 43, 43);
                                    margin-bottom: -30px;

                                    p{
                                       
                                        transform: rotate(-10deg);
                                        color: white;
                                        letter-spacing: 2px;
                                    }
                                }

                            .winners-container{
                                width: 100%;
                                background-color: #76B727;
                                box-shadow: 1px 1px 5px gray;
                                padding: 50px 5px;
                                border-radius: 10px;
                                padding-top: 55px;

                                .winner{
                                    border-radius: 10px;
                                    background-color: white;
                                    color: #005295;
                                    font-weight: bold;
                                    font-size: 27px;
                                    display: flex;
                                    justify-content: space-around;
                                    align-items: center;
                                    margin-bottom: 10px;
                                }
                            }
                        }
                    }
                }
            }

            #preguntas{
                z-index: 100;
                .content{
                    display: flex;

                    .box{
                        flex: 1;
                        
                    }

                    & .box:nth-child(2){
                            color: white;
                            display: flex;
                            justify-content: center;
                            align-items: flex-end;
                            margin-right: 7%;
                            z-index: 1000000;
                            
                            a{
                                display: inline-block;
                                font-size: 39px;
                                padding: 10px;
                            }
                        }

                    & .box:nth-child(1){
                        flex: 1.5;
                        padding-right: 8%;

                        .questions{
                           
                            width: 100%;
                            display: flex;
                            flex-direction: column;

                            .sec{
                                margin-top: 35%;
                                flex: 1;
                                justify-content: center;
                                align-items: center;

                                .question-form{
                                    padding: 0 15%;
                                    margin-top: 10px;

                                    .question-name{
                                        display: flex;
                                        justify-content: space-between;
                                        align-items: center;
                                        background-color: #76B727;
                                        box-shadow: 1px 1px 5px gray;
                                        border-radius: 5px;
                                        color: white;
                                        padding: 10px;

                                        cursor: pointer;
                                    }

                                    .answer{
                                        padding: 5px;
                                        background-color: white;
                                    }
                                }

                                iframe{
                                    margin-top: -30%;
                                    width: 70%;
                                    height: 270px;
                                    margin-left: 15%;
                                    z-index: 10000;
                                }
                            }
                        }
                    }
                }
            }
        }

        .movil{
            display: none;
        }

        @media only screen and (max-width: 1000px){
            .wp{
                width: 50px;
            }

            .web{
                display: none;
            }

            .movil{
                display: block;
                position: relative;

                .menu-movil{
                    position: fixed;
                    top: 170px;
                    left: 0;
                    display: flex;
                    flex-direction: column;
                    z-index: 1000;
                    margin-left: 10px;
                    margin-top: 10px;

                        .btn-menu{
                            margin-top: 5px;

                            img{
                                width: 33px;
                            }
                        }

                    
                }

                #premios2{
                    .content{
                        display: flex;
                        justify-content: center;
                        align-items: flex-start;
                        width: 100%;

                        .carousel-movil{
                            margin-top: 50%;
                            width: 80%;
                        }
                        
                    }
                }

                #ganadores2{

                    .content{
                        display: flex;
                        flex-direction: column-reverse;

                        .box{
                            flex: 1;
                            
                        }

                        & .box:nth-child(2){
                            padding: 15%;

                            .binnie-container{
                                display: flex;
                                justify-content: center;
                                align-items: center;

                                .box-big{
                                    flex: 1;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    flex-direction: column;
                                    
                                }

                                .header{
                                        background-color: #76B727;
                                        padding: 15px 15px;
                                        font-size: 35px;
                                        border-radius: 5px;
                                        z-index: 500000;
                                        box-shadow: 1px 1px 5px gray;
                                        margin-bottom: -30px;

                                        p{
                                            
                                            transform: rotate(-10deg);
                                            color: white;
                                            letter-spacing: 2px;
                                        }
                                    }

                                .winners-container{
                                    width: 100%;
                                    background-color: #76B727;
                                    box-shadow: 1px 1px 5px gray;
                                    padding: 50px 5px;
                                    border-radius: 10px;
                                    padding-top: 55px;

                                    .winner{
                                        border-radius: 10px;
                                        background-color: white;
                                        color: #005295;
                                        font-weight: bold;
                                        font-size: 23px;
                                        display: flex;
                                        justify-content: space-around;
                                        align-items: center;
                                        margin-bottom: 10px;
                                    }
                                }
                            }
                        }
                    }
                }

                #preguntas2{
                    .content{
                        display: flex;
                        flex-direction: column-reverse;

                        .box{
                            flex: 1;
                            
                        }

                        

                        & .box:nth-child(1){
                            flex: 1.5;
                            

                            .questions{
                                margin-top: 50%;
                                width: 100%;
                                display: flex;
                                flex-direction: column;

                                .sec{
                                    
                                    flex: 1;
                                    justify-content: center;
                                    align-items: center;

                                    .question-form{
                                        padding: 0 15%;
                                        margin-top: 10px;

                                        .question-name{
                                            display: flex;
                                            justify-content: space-between;
                                            align-items: center;
                                            background-color: #76B727;
                                            box-shadow: 1px 1px 5px gray;
                                            border-radius: 5px;
                                            color: white;
                                            padding: 10px;

                                            cursor: pointer;
                                        }

                                        .answer{
                                            padding: 5px;
                                            background-color: white;
                                        }
                                    }

                                    iframe{
                                        display: none;
                                        width: 70%;
                                        margin-left: 15%;
                                        z-index: 10000;
                                    }
                                }
                            }
                        }
                    }
                }
            }

            .button-section{
                justify-content: space-around;


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

    .btn-menu{
        position: relative;
    }

    .tooltip{
        position: absolute;
        top: 0;
        right: 0;
        margin-top: 30%;
        
        background-color: gray;
        color: white;
        border-radius: 5px;
        padding: 5px;
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
            background-color: #76B727;
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
</style>

<template>
    <div class="main-container">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=8007000000">
            <img class="wp" src="/images/nueva/icos/Recurso 81.png" alt="">
        </a>

        <div class="button-section">
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
        
        <div class="web">
            <div class="menu-web">
                <div class="btn-menu">
                    <a href="#home" @mouseenter="tooltip = 1" @mouseleave="tooltip = 0">
                        <img src="/images/nueva/icos/Recurso 75.png" alt="">
                    </a>

                    <span style="margin-right: -50px;" v-show="tooltip == 1" class="tooltip">Inicio</span>
                </div>
                <div class="btn-menu">
                    <a href="#mecanica" @mouseenter="tooltip = 2" @mouseleave="tooltip = 0">
                        <img src="/images/nueva/icos/Recurso 76.png" alt="">
                    </a>
                    <span style="margin-right: -80px;" v-show="tooltip == 2" class="tooltip">Mecanica</span>
                </div>
                <div class="btn-menu" @mouseenter="tooltip = 3" @mouseleave="tooltip = 0">
                    <a href="#premios">
                        <img src="/images/nueva/icos/Recurso 77.png" alt="">
                    </a>

                    <span style="margin-right: -70px;" v-show="tooltip == 3" class="tooltip">Premios</span>
                </div>
                <div class="btn-menu" @mouseenter="tooltip = 4" @mouseleave="tooltip = 0">
                    <a href="#pagos">
                        <img src="/images/nueva/icos/Recurso 78.png" alt="">
                    </a>

                    <span style="margin-right: -57px;" v-show="tooltip == 4" class="tooltip">Pagos</span>
                </div>
                <div class="btn-menu" @mouseenter="tooltip = 5" @mouseleave="tooltip = 0">
                    <a href="#preguntas">
                        <img src="/images/nueva/icos/Recurso 79.png" alt="">
                    </a>

                    <span style="margin-right: -85px;" v-show="tooltip == 5" class="tooltip">Preguntas</span>
                </div>
                <div class="btn-menu" @mouseenter="tooltip = 6" @mouseleave="tooltip = 0">
                    <a href="#ganadores">
                        <img src="/images/nueva/icos/Recurso 80.png" alt="">
                    </a>

                    <span style="margin-right: -90px;" v-show="tooltip == 6" class="tooltip">Ganadores</span>
                </div>
            </div>
            <section class="section" id="home">
                <img src="/images/nueva/web/HOME.png" alt="">
                <div class="content">
                    
                </div>
            </section>
            <section class="section" id="mecanica">
                <img src="/images/nueva/web/MECANICA.png" alt="">
                <div class="content">
                    
                </div>
            </section>
            <section class="section" id="premios">
                <img src="/images/nueva/web/PREMIOS.png" alt="">
                <div class="content">
                    <div class="box">
                        <div class="carousel">
                            <agile :centerMode="true" autoplay="autoplay" :nav-buttons="false" :autoplay-speed="4000" :speed="1000">
                                <div class="slide" v-for="(slide, index) in slides" :key="index">
                                    <img :src="slide" alt="">
                                </div>
                            </agile>
                        </div>
                        <!-- <div>
                            <img :src="slides[slide]" alt="">
                        </div> -->
                    </div>
                </div>
            </section>
            <section class="section" id="pagos">
                <img src="/images/nueva/web/FORMAS DE PAGO.png" alt="">
                <div class="content">
                    
                </div>
            </section>
            <section class="section" id="preguntas">
                <img src="/images/nueva/web/PREGUNTAS.png" alt="">
                
                <div class="content">
                    <div class="box">
                        <div class="questions">
                            <div class="sec">
                                <div class="question-form" v-for="(question, index) in questions" :key="index" @click="indexSelect == index ? indexSelect = null : indexSelect = index">
                                    <div class="question-name">
                                        <p>{{ question.name }}</p>
                                        <span>
                                            <i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="answer" v-show="indexSelect == index">
                                        <p>{{ question.answer }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sec">
                                <iframe width="100%" height="415" src="https://www.youtube.com/embed/1s-3WH9oFIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <a href="#">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </section>
            <section class="section" id="ganadores">
                <img src="/images/nueva/web/GANADORES.png" alt="">
                <div class="content">
                    <div class="box">

                    </div>
                    <div class="box">
                        <div class="binnie-container">
                            <div class="box-big">
                                <div class="header">
                                    <p>GANADORES</p>
                                </div>
                                <div class="winners-container">
                                    <div class="winner" v-for="item in winners" :key="item.id">
                                        <span>{{ item.name }}</span>
                                        <span>{{ item.points }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="movil" style="background-color: #005295; overflow: hidden;">
            <div class="menu-movil">
                <div class="btn-menu">
                    <a href="#home2">
                        <img src="/images/nueva/icos/Recurso 75.png" alt="">
                    </a>
                </div>
                <div class="btn-menu">
                    <a href="#mecanica2">
                        <img src="/images/nueva/icos/Recurso 76.png" alt="">
                    </a>
                </div>
                <div class="btn-menu">
                    <a href="#premios2">
                        <img src="/images/nueva/icos/Recurso 77.png" alt="">
                    </a>
                </div>
                <div class="btn-menu">
                    <a href="#pagos2">
                        <img src="/images/nueva/icos/Recurso 78.png" alt="">
                    </a>
                </div>
                <div class="btn-menu">
                    <a href="#preguntas2">
                        <img src="/images/nueva/icos/Recurso 79.png" alt="">
                    </a>
                </div>
                <div class="btn-menu">
                    <a href="#ganadores2">
                        <img src="/images/nueva/icos/Recurso 80.png" alt="">
                    </a>
                </div>
            </div>

            <section class="section" id="home2">
                <img src="/images/nueva/movil/HOME.png" alt="">
                <div class="content">
                    
                </div>
            </section>
            <section class="section" id="mecanica2">
                <img src="/images/nueva/movil/MECANICA.png" alt="">
                <div class="content">
                    
                </div>
            </section>
            <section class="section" id="premios2">
                <img src="/images/nueva/movil/PREMIOS.png" alt="">
                <div class="content">
                    <div class="carousel-movil">
                        <agile :centerMode="true" autoplay="autoplay" :nav-buttons="false" :autoplay-speed="4000" :speed="1000">
                            <div class="slide" v-for="(slide, index) in slides" :key="index">
                                <img :src="slide" alt="">
                            </div>
                        </agile>
                    </div>
                </div>
            </section>
            <section class="section" id="pagos2" style="background-color: #005295;">
                <img src="/images/nueva/movil/FORMAS DE PAGO.png" alt="">
                <div class="content">
                    
                </div>
            </section>
            <section class="section" id="preguntas2">
                <img src="/images/nueva/movil/PREGUNTAS.png" alt="">
                <div class="content">
                    <div class="box">
                        <div class="questions">
                            <div class="sec">
                                <div class="question-form" v-for="(question, index) in questions" :key="index" @click="indexSelect == index ? indexSelect = null : indexSelect = index">
                                    <div class="question-name">
                                        <p>{{ question.name }}</p>
                                        <span>
                                            <i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="answer" v-show="indexSelect == index">
                                        <p>{{ question.answer }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sec">
                                <iframe width="100%" height="415" src="https://www.youtube.com/embed/1s-3WH9oFIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section" id="ganadores2" style="background-color: #005295">
                <img style="margin-left: -2px;" src="/images/nueva/movil/GANADORES.png" alt="">
                <div class="content">
                    <div class="box">

                    </div>
                    <div class="box">
                        <div class="binnie-container">
                            <div class="box-big">
                                <div class="header">
                                    <p>GANADORES</p>
                                </div>
                                <div class="winners-container">
                                    <div class="winner" v-for="item in winners" :key="item.id">
                                        <span>{{ item.name }}</span>
                                        <span>{{ item.points }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import JetNavLink from '@/Jetstream/NavLink'

export default {
    components: {
            Head,
            Link,
            JetNavLink,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
            questions: Array,
            winners: Array,
            info: Object
        },

        data(){
            return{
                tooltip: 0,
                slide: 0,
                indexSelect: null,
                slides: [
                    '/images/nueva/elements/premios 2k.png',
                    '/images/nueva/elements/premios 10k.png',
                    '/images/nueva/elements/premios 25k.png',
                    '/images/nueva/elements/premios 5500.png',
                ]
            }
        },

        mounted() {
            setInterval(() => {
                this.slide++
                if (this.slide == 4) {
                    this.slide = 0
                }
            }, 4000)
        },

        watch: {
            
        },

        methods: {
            left(){
                console.log('ola');
                if (this.slide == 0) {
                    this.slide = this.slides.length - 1
                }else{
                    this.slides--
                }
            },

            right(){
                if (this.slide == (this.slides.length - 1)) {
                    this.slide = 0
                }else{
                    this.slides++
                }
            }
        },
}
</script>