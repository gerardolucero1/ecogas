<style lang="scss" scoped>
    .section-1{
        position: relative;

        .bg-1{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
        }

        .menu-score{
            z-index: 10000;

            position: absolute;
            top: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-top: 50px;
            margin-right: 50px;

            border-radius: 10px;
            padding: 10px;

            width: 500px;
            height: auto;
            background-color: #76B727;
            display: flex;
            justify-content: center;
            align-content: center;

            span{
                color: white;
            }

            & p:nth-child(1){
                font-size: 22px;
                line-height: 20px;
                text-shadow: 1px 1px 5px gray;
            }

            p{
                color: white;
                font-weight: bold;
                padding: 0 10px;
            }
        }

        .menu-float{
            z-index: 10000;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 80px;
            margin-left: 65px;

            .btn-menu{
                
                border-radius: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 10px;
                width: 70px;
                height: 70px;
                background-color: #76B727;
                color: white;
                box-shadow: 1px 1px 5px gray;

                font-size: 35px;
            }
        }

        .binnie{
            width: 100%;
            height: auto;
            z-index: 10000;
            position: absolute;
            top: 0;
            left: 0;
            margin-top: 245%;
            padding: 10px;
        }

        #questions{
            display: flex;

            .sec{
                flex: 1;
            }
        }

        .question{
            padding-right: 10px;
            margin-bottom: 20px;

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

        .binnie-2{
            width: 100%;
            height: 500px;
            z-index: 10000;
            position: absolute;
            top: 0;
            left: 0;
            margin-top: 295%;
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .binnie-container{
            display: flex;

            .box-normal{
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0 20px;
                flex-direction: column;
            }

            .box-big{
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0 20px;
                flex-direction: column;

                
            }

            .header{
                    background-color: #1D71B9;
                    padding: 15px 15px;
                    font-size: 35px;
                    border-radius: 5px;
                    z-index: 500000;
                    box-shadow: 1px 1px 5px gray;
                    margin-bottom: -30px;

                    p{
                        text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;
                        transform: rotate(-10deg);
                        color: #76B727;
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
                    color: blue;
                    font-weight: bold;
                    font-size: 27px;
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                    margin-bottom: 10px;
                }
            }

            .box-big{

                .header{
                    font-size: 45px;
                }
            }

            .box-normal{
                .winners-container{
                    width: 70%;
                    
                }

                .winner{
                    font-size: 19px;
                }
            }
        }

        .footer{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            margin-top: 100px;
            

            p{
                text-align: center;
                border-radius: 5px;
                font-size: 11px;
                height: 35px;
                line-height: 15px;
                margin: 10px;
                background-color: #025490;
                color: white;
                font-weight: bold;
                padding: 5px 10px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        #steps{
            width: 100%;
            height: 500px;
            z-index: 10000;
            position: absolute;
            top: 0;
            left: 0;
            margin-top: 80%;
        }

        #price{
            width: 100%;
            height: 500px;
            z-index: 10000;
            position: absolute;
            top: 0;
            left: 0;
            margin-top: 110%;
        }

        #payments{
            width: 100%;
            height: 500px;
            z-index: 10000;
            position: absolute;
            top: 0;
            left: 0;
            margin-top: 160%;
        }

        .whatsapp-2{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            z-index: 10000;
            position: absolute;
            top: 0;
            left: 0;
            margin-left: 82%;
            margin-top: 156%;
        }

        .whatsapp{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            z-index: 10000;
            position: absolute;
            top: 0;
            left: 0;
            margin-left: 82%;
            margin-top: 41%;
        }

        
    }

    @media only screen and (max-width: 1000px){ 

                .menu-float{
                    display: none !important;
                }

                .box-normal{
                    padding: 0;
                    margin-bottom: 50px  !important;
                }

                .box-big{
                    padding: 0;
                    margin-bottom: 50px  !important;
                    
                }
                .binnie-container{
                    flex-direction: column;
                }

                .whatsapp{
                    width: 50px !important;
                    height: 50px !important;
                }

                .whatsapp-2{
                    width: 50px !important;
                    height: 50px !important;
                }

                .footer{
                    flex-direction: column !important;
                }

                .menu-score{

                    margin-top: 10px !important;
                    margin-right: 5% !important;

                    width: 90% !important;

                }

                .binnie{
                    flex-direction: column !important;
                }

                .binnie-2{
                    margin-top: 595% !important;
                }
            }

    
</style>

<template>
    <div class="section-1">
        <img class="bg-1" src="/images/home1.png" alt="">

        <div id="steps">

        </div>
        <div id="price">

        </div>

        <div id="payments">

        </div>

        <div class="binnie" id="questions">
            <div class="sec">
                <div>
                    <div class="question" v-for="(question, index) in questions" :key="index" @click="indexSelect = index">
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
            </div>
            <div class="sec">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/1s-3WH9oFIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="binnie-2" id="score">
            <div class="binnie-container">
                <div class="box-normal">
                    <div class="header">
                        <p>REGISTROS</p>
                    </div>
                    <div class="winners-container">
                        <div class="winner">
                            <span>{{ info.registers }} PARTICIPANTES</span>
                        </div>
                    </div>
                </div>
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
                <div class="box-normal">
                    <div class="header">
                        <p>PREMIOS</p>
                    </div>
                    <div class="winners-container">
                        <div class="winner">
                            <span>{{ info.prizes }} PREMIOS ENTREGADOS</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <p>FAQ's</p>
                <p>PRELACION <br> DE PREMIOS</p>
                <p>BASES LEGALES <br> TERMINOS Y CONDICIONES</p>
                <p>AVISO DE PRIVACIDAD</p>
                <p>CONTACTO</p>
            </div>
        </div>

        <div class="menu-score">
            <p>¿Y tu, ya te <br> registraste?</p>
            <span>|</span>
            <p>{{ winners.length }} Ganadores</p>
            <span>|</span>
            <p>{{ info.registers }} Registros</p>
        </div>

        <a target="_blank" href="https://api.whatsapp.com/send?phone=15551234567" class="whatsapp">
        </a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=15551234567" class="whatsapp-2">
        </a>

        <div class="menu-float">
            <a href="#home">
                <div class="btn-menu">
                    <i class="fas fa-home"></i>
                </div>
            </a>
            <a href="#steps">
                <div class="btn-menu">
                    <i class="fas fa-file-alt"></i>
                </div>
            </a>
            <a href="#price">
                <div class="btn-menu">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </a>
            <a href="#payments">
                <div class="btn-menu">
                    <i class="far fa-credit-card"></i>
                </div>
            </a>
            <a href="#questions">
                <div class="btn-menu">
                    <i class="fas fa-question-circle"></i>
                </div>
            </a>
            <a href="#score">
                <div class="btn-menu">
                    <i class="fas fa-trophy"></i>
                </div>
            </a>
        </div>

    </div>
</template>

<script>
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default {
        components: {
            Head,
            Link,
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
                indexSelect: null,
            }
        }
    }
</script>
