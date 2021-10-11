<template>
    <card-titulo imagen="dash_image.png">
        <template v-slot:titulo>BIENVENIDO</template>
        <template v-slot:descripcion>
            Aquí están las última actualizaciones del sistema de evaluaciones para mantenerte al día.
        </template>
    </card-titulo>
</template>

<script>
    import CardTitulo from "../Cards/CardTitulo";
    import Apartado from '../Generales/Apartado';

    export default{
        components:{
            CardTitulo,
            Apartado
        }
    }
</script>
