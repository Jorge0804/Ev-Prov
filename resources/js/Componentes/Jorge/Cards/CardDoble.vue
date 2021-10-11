<template>
    <div class="h-full" style="width: 220px; display: flex; flex-direction: column">
        <card-pequeña imagen="email_sent.png">
            Evaluaciones contestadas
        </card-pequeña>
        <card-pequeña imagen="upload_file.png">
            Propuestas en espera
        </card-pequeña>
    </div>
</template>

<script>
    import CardPequeña from "./CardPequeña";

    export default{
        components:{
            CardPequeña
        }
    }
</script>
