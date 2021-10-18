<template>
    <div style="min-height: 100vh; display: flex; font-family: Roboto;">
        <ep-sidebar :usuario="usuario" v-if="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-error :titulo="titulo" :descripcion="descripcion"/>
        </div>
    </div>
</template>

<script>
import EpError from '../Componentes/Jorge/Mensajes/Error';
import EpSidebar from '../Componentes/Jorge/Sidebar/Base';

export default{
    components:{
        EpError,
        EpSidebar
    },
    props:[
        'usuario',
        'titulo',
        'descripcion'
    ]
}
</script>
