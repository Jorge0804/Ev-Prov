<template>
    <div style="min-height: min-content;display: flex; font-family: Roboto;">
        <ep-sidebar :usuario="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-card-titulo imagen="dash_image.png">
                <template v-slot:titulo>Bienvenido</template>
                <template v-slot:descripcion>
                    Aquí están las última actualizaciones del sistema de evaluaciones para mantenerte al día.
                </template>
            </ep-card-titulo>
            <!--<div style="display: flex; height: 60vh; margin-top: 20px; flex-direction: column">
                <ep-apartado>
                    Últimas actualizaciones
                </ep-apartado>
                <div style=" flex: auto; display: flex; justify-content: space-between; align-items: center; padding: 30px; flex-wrap: wrap; ">
                    <ep-card-mediana>
                        <template v-slot:titulo>
                            Encuestas
                        </template>
                        <template v-slot:descripcion>
                            Porcentaje de departamentos que han contestado las encuestas
                        </template>
                    </ep-card-mediana>
                    <ep-card-grande>
                        <template v-slot:titulo>
                            Evaluaciones
                        </template>
                        <template v-slot:descripcion>
                            Estas son las evaluaciones de los proveedores hasta el momento
                        </template>
                    </ep-card-grande>
                    <ep-card-doble/>
                </div>
            </div>-->
        </div>
    </div>
</template>

<script>
import EpSidebar from '../Componentes/Jorge/Sidebar/Base';
import EpCardTitulo from '../Componentes/Jorge/Cards/CardTitulo';
import EpApartado from '../Componentes/Jorge/Generales/Apartado';
import EpCardMediana from '../Componentes/Jorge/Cards/CardMediana';
import EpCardGrande from '../Componentes/Jorge/Cards/CardGrande';
import EpCardDoble from '../Componentes/Jorge/Cards/CardDoble';

export default{
    components:{
        EpSidebar,
        EpCardTitulo,
        EpApartado,
        EpCardMediana,
        EpCardGrande,
        EpCardDoble
    },
    props:[
        'usuario'
    ]
}
</script>
