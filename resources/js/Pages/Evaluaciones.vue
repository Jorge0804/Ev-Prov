<template>
    <div style="min-height: min-content; display: flex; font-family: Roboto;">
        <ep-sidebar :usuario="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-card-titulo imagen="encyprov.png" style="margin-bottom: 30px">
                <template v-slot:titulo>Evaluaciones</template>
                <template v-slot:descripcion>En este apartado se mostrarán todas las evaluaciones por proveedor del periodo actual.</template>
            </ep-card-titulo>
            <ep-table :titulos="titulos" :rows="rows"/>
        </div>
    </div>
</template>

<script>
import EpCardTitulo from "../Componentes/Jorge/Cards/CardTitulo";
import EpSidebar from '../Componentes/Jorge/Sidebar/Base';
import EpTable from '../Componentes/Jorge/Tabla/Base';

export default {
    props:[
        'usuario',
        'proveedores',
        'titulos',
        'rows'
    ],
    components:{
        EpCardTitulo,
        EpSidebar,
        EpTable
    },
}
</script>
