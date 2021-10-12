<template>
    <img :src="usuario.profile_photo_url" class="rounded-full" style="width: 130px; height: 130px">
    <label style="margin-top: 15px; display: flex; align-self: center; font-weight: bold; font-size: 13px; line-height: 11px">
        ADMINISTRADOR
    </label>
</template>

<script>
    export default{
        props:[
            'usuario'
        ]
    }
</script>
