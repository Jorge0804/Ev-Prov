<template>
    <div style="min-height: min-content; display: flex; font-family: Roboto;">
        <ep-sidebar :usuario="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-card-titulo imagen="encyprov.png" style="margin-bottom: 30px">
                <template v-slot:titulo>Evaluaciones</template>
                <template v-slot:descripcion>En este apartado se mostrarán todas las evaluaciones por proveedor del periodo actual.</template>
            </ep-card-titulo>
            <div style="min-width: 800px">
                <div style="background: rgba(0, 0, 0, 0.7); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); border-radius: 15px; padding: 17px; margin-bottom: 15px; display: flex">
                    <div style="flex: auto">
                        <label style="color: white; font-size: 18px;">
                            Proveedor
                        </label>
                    </div>
                    <div style="flex: auto">
                        <label style="color: white; font-size: 18px;">
                            Estado actual
                        </label>
                    </div>
                    <div style="flex: auto">
                        <label style="color: white; font-size: 18px;">
                            Resultado
                        </label>
                    </div>
                    <div style="flex: auto; width: 30px;">
                        <label style="color: white; font-size: 18px;">
                            adios
                        </label>
                    </div>
                </div>
                <div style="background: #DDEDEE; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); border-radius: 15px; padding: 16px; margin-bottom: 10px; display: flex; font-family: Quicksand;">
                    <div style="flex: auto">
                        <label style="font-size: 14px;">
                            Proveedor
                        </label>
                    </div>
                    <div style="flex: auto">
                        <label style="font-size: 14px;">
                            Estado actual
                        </label>
                    </div>
                    <div style="flex: auto">
                        <label style="font-size: 14px;">
                            Resultado
                        </label>
                    </div>
                    <div style="flex: auto">
                        <label style="font-size: 14px;">
                            adios
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EpCardTitulo from "../Componentes/Jorge/Cards/CardTitulo";
    import EpSidebar from '../Componentes/Jorge/Sidebar/Base';

    export default {
        props:[
            'usuario',
            'proveedores'
        ],
        components:{
            EpCardTitulo,
            EpSidebar
        },
    }
</script>
