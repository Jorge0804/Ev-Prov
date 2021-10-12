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
                    {id: 1, nombre: 'DASHBOARD', icono: 'dashboard', ruta:'dashboard', tipo:'get'},
                    {id: 2, nombre: 'EVALUACIONES', icono: 'data_usage', ruta:'evaluaciones', tipo:'get'},
                    {id: 3, nombre: 'ENCUESTAS Y PROPUESTAS', icono: 'list_alt', ruta:'encyprop', tipo:'get'},
                    {id: 4, nombre: 'SALIR', icono: 'logout', ruta:'logout', tipo:'post'}
                ]
            }
        }
    }
</script>
