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

        .web{
            display: block;
        }

        .movil{
            display: none;
        }

        @media only screen and (max-width: 1000px){
            .web{
                display: none;
            }

            .movil{
                display: block;
            }
        }
    }
</style>

<template>
    <div class="main-container">
        <div class="content">
            <div class="web">
                <img class="" src="/images/nueva/web/AVISO DE PRIVACIDAD.png" alt="">
            </div>
            <div class="movil">
                <img class="" src="/images/nueva/movil/AVISO DE PRIVACIDAD.png" alt="">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        
    },
}
</script>