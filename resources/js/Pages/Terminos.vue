<style scoped lang="scss">

    .main-container{
        padding: 0;
        margin: 0;
        background-color: #005295;
        min-height: 100vh;

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
        <div class="header">
            <img src="/images/nueva/pages/terminos.png" alt="">
        </div>

        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe veritatis esse quas repudiandae dignissimos cupiditate corporis fuga ipsa cum fugiat soluta, suscipit autem est, voluptatibus quisquam eos eum culpa? Voluptates.</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        
    },
}
</script>