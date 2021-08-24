<style scoped lang="scss">
    .container{
        position: relative;
        width: 100vw;

        .whatsapp{
            z-index: 10000;

            position: fixed;
            bottom: 0;
            right: 0;
            width: 120px;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .section{
            position: relative;
            width: 100vw;
            height: auto;
            overflow-x: hidden;

            img{
                width: 100%;
                height: auto;
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

        .menu-score{
            z-index: 900000;

            position: fixed;
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

        #questions{
            position: relative;
            width: 100vw;
            

            .questions{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                display: flex;

                .sec{
                    flex: 1;
                    padding-right: 5%;

                    .question-form{
                        padding: 0 5%;
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
                        margin-top: 35%;
                    }
                }
            }
        }

        #score{
            position: relative;
            width: 100vw;

            .score{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                display: flex;
                flex-direction: column;

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
            }
        }
    }

    .container{
        display: block;
    }

    .container-movil{
        display: none;
    }

    @media only screen and (max-width: 1000px){
        .container{
            display: none;
        }

        .container-movil{
            background-color: #085995;
            display: block;

            .whatsapp{
                z-index: 10000;

                position: fixed;
                bottom: 0;
                right: 0;
                width: 100px;
                margin-bottom: 20px;
                margin-right: 20px;
            }

            .section{
                position: relative;
                width: 100vw;
                height: auto;
                overflow-x: hidden;

                img{
                    width: 100%;
                    height: auto;
                }
            }

            #questions{
                position: relative;
                width: 100vw;

                .question-movil{
                    margin-top: 20%;
                }

                .questions{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    display: flex;
                    flex-direction: column;

                    .sec{
                        flex: 1;
                        padding: 0 5%;
                        

                        .question-form{
                            
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
                            margin-top: 10%;
                        }

                    }
                }
            }

            #score{
                position: relative;
                width: 100vw;

                .score{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    display: flex;
                    flex-direction: column;

                    .binnie-container{
                        display: flex;
                        flex-direction: column;

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
                                font-size: 22px;
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
                                font-size: 15px;
                            }
                        }
                    }

                    .footer{
                        width: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: flex-end;
                        margin-top: 50px;
                        

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
                }
            }
        }
    }
</style>

<template>
    <div>
        <div class="container">

            <div class="menu-score">
                <p>¿Y tu, ya te <br> registraste?</p>
                <span>|</span>
                <p>{{ winners.length }} Ganadores</p>
                <span>|</span>
                <p>{{ info.registers }} Registros</p>
            </div>

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

            <a target="_blank" href="https://api.whatsapp.com/send?phone=8007000000">
                <img class="whatsapp" src="https://i0.wp.com/www.smartparent.in/wp-content/uploads/2018/06/Whatsapp-Icon.png" alt="">
            </a>

            

            <section class="section" id="home">
                <img src="/images/Mesa de trabajo 1.png" alt="">
            </section>
            <section class="section" id="steps">
                <img src="/images/Mesa de trabajo 2.png" alt="">
            </section>
            <section class="section" id="price">
                <img src="/images/Mesa de trabajo 3.png" alt="">
            </section>
            <section class="section" id="payments">
                <img src="/images/Mesa de trabajo 4.png" alt="">
            </section>
            <section class="section" id="questions">
                <img src="/images/Mesa de trabajo 5.png" alt="">

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
                
            </section>
            <section class="section" id="score">
                <img src="/images/Mesa de trabajo 6.png" alt="">

                <div class="score">
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
            </section>
        </div>

        <div class="container-movil">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=8007000000">
                <img class="whatsapp" src="https://i0.wp.com/www.smartparent.in/wp-content/uploads/2018/06/Whatsapp-Icon.png" alt="">
            </a>

            <section class="section" id="home">
                <img src="/images/movil/Mesa de trabajo 1.png" alt="">
            </section>
            <section class="section" id="steps">
                <img src="/images/movil/Mesa de trabajo 2.png" alt="">
            </section>
            <section class="section" id="price">
                <img src="/images/movil/Mesa de trabajo 3.png" alt="">
            </section>
            <section class="section" id="payments">
                <img src="/images/movil/Mesa de trabajo 4.png" alt="">
            </section>
            <section class="section" id="questions">
                <img src="/images/movil/Mesa de trabajo 5.png" alt="">

                <div class="questions">
                    <div class="sec">
                        <div class="question-movil">
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
                    </div>
                    <div class="sec">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/1s-3WH9oFIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            <section class="section" id="score">
                <img src="/images/movil/Mesa de trabajo 6.png" alt="">

                <div class="score">
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
                        <div class="box-big" style="margin-top: 50px;">
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
                        <div class="box-normal" style="margin-top: 50px;">
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
            </section>
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