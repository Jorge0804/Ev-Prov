<template>
    <div style="min-height: min-content;display: flex; font-family: Roboto;">
        <ep-sidebar :usuario="usuario" v-if="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-success>
                <template slot="titulo">skljsalkaj</template>
                <template slot="descripcion">{{descripcion}}</template>
            </ep-success>
        </div>
    </div>
</template>

<script>
import EpSuccess from '../Componentes/Jorge/Mensajes/Success';
import EpSidebar from '../Componentes/Jorge/Sidebar/Base';

export default{
    components:{
        EpSuccess,
        EpSidebar
    },
    props:[
        'usuario',
        'titulo',
        'descripcion'
    ]
}
</script>
