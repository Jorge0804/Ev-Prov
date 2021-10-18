<template>
    <ep-elemento-menu v-for="elemento in elementos" :menu="elemento" :id="usuario.id"/>
</template>

<script>
    import EpElementoMenu from './ElementoMenu';

    export default{
        components:{
            EpElementoMenu
        },
        props:[
            'usuario'
        ],
        data() {
            return{
                elementos:[
                    {id: 1, nombre: 'DASHBOARD', icono: 'dashboard', ruta:'dashboard', tipo:'get', ver: false},
                    {id: 2, nombre: 'EVALUACIONES', icono: 'data_usage', ruta:'evaluaciones', tipo:'get', ver: false},
                    {id: 3, nombre: 'ENCUESTAS Y PROPUESTAS', icono: 'list_alt', ruta:'encyprop', tipo:'get', ver: false},
                    {id: 4, nombre: 'SALIR', icono: 'logout', ruta:'logout', tipo:'post', ver: true}
                ]
            }
        }
    }
</script>
