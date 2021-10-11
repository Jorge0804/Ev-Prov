<template>
    <ep-elemento-menu v-for="elemento in elementos" :menu="elemento"/>
</template>

<script>
    import EpElementoMenu from './ElementoMenu';

    export default{
        components:{
            EpElementoMenu
        },
        data() {
            return{
                elementos:[
                    {id: 1, nombre: 'DASHBOARD', icono: 'dashboard', accion:'/dashboard'},
                    {id: 2, nombre: 'EVALUACIONES', icono: 'data_usage', accion:'/evaluaciones'},
                    {id: 3, nombre: 'ENCUESTAS Y PROPUESTAS', icono: 'list_alt', accion:'/encyprop'},
                    {id: 4, nombre: 'SALIR', icono: 'logout', accion:'/logout'}
                ]
            }
        }
    }
</script>
