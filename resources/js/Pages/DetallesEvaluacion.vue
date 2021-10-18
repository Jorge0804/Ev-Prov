<template>
    <div style="min-height: min-content; display: flex; font-family: Roboto;">
        <ep-sidebar :usuario="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-card-titulo imagen="encyprov.png" style="margin-bottom: 30px">
                <template v-slot:titulo>Resultados de evaluación - {{proveedor}}</template>
                <template v-slot:descripcion>En este apartado se mostrarán todos los resultados a las evaluaciones del proveedor.</template>
            </ep-card-titulo>
            <ep-evaluacion v-for="evaluacion in evaluaciones" :detalles="evaluacion.detalles">
                <template v-slot:titulo>Evaluado por {{ evaluacion.area.nombre }} - {{ evaluacion.resultado }}%</template>
            </ep-evaluacion>
        </div>
    </div>
</template>

<script>
    import EpCardTitulo from "../Componentes/Jorge/Cards/CardTitulo";
    import EpSidebar from '../Componentes/Jorge/Sidebar/Base';
    import EpEvaluacion from '../Componentes/Jorge/Detalles/Base';

    export default{
        props:[
            'usuario',
            'evaluaciones',
            'proveedor'
        ],
        components:{
            EpCardTitulo,
            EpSidebar,
            EpEvaluacion
        }
    }
</script>
