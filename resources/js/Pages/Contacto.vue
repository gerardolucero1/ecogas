<style scoped lang="scss">
    .container{
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
    }
</style>

<template>
    <div class="container">
        <div class="header">
            <img src="/images/nueva/pages/contacto.png" alt="">
        </div>

        <div class="content">
            <p>Comunícate a nuestra línea de atención para recibir <br> asesoria sobre como avanzar con tu participación al <br> teléfono xxx-xxx-xxx en un horario de: </p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        
    },
}
</script>