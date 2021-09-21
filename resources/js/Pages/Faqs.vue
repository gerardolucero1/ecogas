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
    }
</style>

<template>
    <div class="main-container">
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
export default {
    props: {
        questions: Array,
    },
}
</script>