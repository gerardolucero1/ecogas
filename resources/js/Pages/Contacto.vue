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
    }
</style>

<template>
    <div class="main-container">
        <div class="header">
            <img src="/images/nueva/pages/contacto.png" alt="">
        </div>

        <div class="content">
            <p>Comunícate a nuestra línea de atención para recibir <br> asesoria sobre como avanzar con tu participación al <br> teléfono xxx-xxx-xxx en un horario de: </p>
            
            <br>
            <p>L-V 9:00 a 18:00 hrs</p>
            <p>Sab. 9:00 a 16:00 hrs</p>

            <div style="margin-top: 20px;">
                <a href="#" style="font-size: 25px !important;">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a style="margin-left: 10px; font-size: 25px !important;" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a style="margin-left: 10px; font-size: 25px !important;" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
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