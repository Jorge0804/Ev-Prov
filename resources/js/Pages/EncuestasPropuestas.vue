<template>
    <div class="h-screen" style="min-height: 100vh; display: flex; font-family: Roboto">
        <ep-sidebar :usuario="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-card-titulo imagen="encyprov.png">
                <template v-slot:titulo>Encuestas y Propuestas</template>
                <template v-slot:descripcion>
                    Apartado donde tendrá acceso a los temas mencionados.
                </template>
            </ep-card-titulo>
            <div style="display: flex; flex: auto; margin-top: 20px; flex-direction: column; flex-wrap: wrap">
                <div style="margin-bottom: 20px; display: flex; flex: auto; justify-content: space-between">
                    <ep-card-larga imagen="card1.png" color="rgba(254, 206, 0, 0.5)">
                        <template v-slot:titulo>Propuestas nuevas</template>
                        <template v-slot:descripcion>
                            Aquí encontraras las propuestas nuevas de tus proveedores
                        </template>
                    </ep-card-larga>
                    <ep-card-larga imagen="card2.png" color="#F5F5F5">
                        <template v-slot:titulo>Propuestas aceptadas</template>
                        <template v-slot:descripcion>
                            Aquí encontraras las propuestas que hayan sido aceptadas por el sistema
                        </template>
                    </ep-card-larga>
                </div>
                <div style="margin-bottom: 20px; display: flex; flex: auto; justify-content: space-between">
                    <ep-card-larga imagen="card3.png" color="#F5F5F5">
                        <template v-slot:titulo>Propuestas rechazadas</template>
                        <template v-slot:descripcion>
                            Aquí encontraras las propuestas que hayan sido rechazadas por el sistema
                        </template>
                    </ep-card-larga>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import EpSidebar from '../Componentes/Jorge/Sidebar/Base';
import EpCardTitulo from '../Componentes/Jorge/Cards/CardTitulo';
import EpCardLarga from '../Componentes/Jorge/Cards/CardLarga';

export default{
    props:[
        'usuario'
    ],
    components:{
        EpSidebar,
        EpCardTitulo,
        EpCardLarga
    }
}
</script>
