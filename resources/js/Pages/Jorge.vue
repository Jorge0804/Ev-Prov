<template>
    <div class="h-screen" style="display: flex; font-family: Roboto">
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <card-titulo imagen="elote.png">
                <template v-slot:titulo>Qué miras?</template>
                <template>Picale a los links</template>
            </card-titulo>
        </div>
    </div>
</template>

<script>
    import CardTitulo from "../Componentes/Jorge/Cards/CardTitulo";

    export default{
        components:{
            CardTitulo
        }
    }
</script>
