<template>
    <div style="min-height: min-content; display: flex; font-family: Roboto;">
        <ep-sidebar :usuario="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-card-titulo imagen="encyprov.png" style="margin-bottom: 30px">
                <template v-slot:titulo>Encuesta - {{ encuesta.proveedor.razo_social }} al {{encuesta.periodo.fecha_fin}}</template>
                <template v-slot:descripcion>De acuerdo al servicio brindado como calificaría los siguientes criterios, donde 'excelente' es la puntuación más alta y 'deficiente' la más baja.</template>
            </ep-card-titulo>
            <div style="background: #E7EEDD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); border-radius: 32px; padding: 25px; margin-bottom: 60px;">
                <ep-encuesta-titulo/>
                <div style="background: rgba(251, 251, 251, 0.8); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); border-radius: 15px; padding: 15px; margin-bottom: 20px; margin-top: 20px" v-for="factor in factores">
                    <ep-pregunta>
                        <template v-slot:nombre>
                            {{factor.nombre}}
                        </template>
                        <template v-slot:descripcion>
                            {{factor.descripcion}}
                        </template>
                    </ep-pregunta>
                    <fieldset style="margin-top: 15px; margin-left: 20px">
                        <div style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 400; line-height: 30px;" v-for="valor in valores">
                            <input type="radio" :name="factor.id_factor" @click="GuardarRespuesta(factor.id_factor, valor.id_valor)">
                            {{ valor.nombre }}
                        </div>
                    </fieldset>
                </div>
                <ep-boton style="width: 200px">
                    Enviar encuesta
                </ep-boton>
            </div>
        </div>
    </div>
</template>

<script>
import EpCardTitulo from "../Componentes/Jorge/Cards/CardTitulo";
import EpSidebar from '../Componentes/Jorge/Sidebar/Base';
import EpEncuestaTitulo from '../Componentes/Jorge/Encuesta/Titulo';
import EpPregunta from '../Componentes/Jorge/Encuesta/Pregunta';
import EpBoton from '../Componentes/Jorge/Login/Boton';

export default{
    props:[
        'usuario',
        'factores',
        'valores',
        'encuesta',
        'area'
    ],
    components:{
        EpCardTitulo,
        EpSidebar,
        EpEncuestaTitulo,
        EpPregunta,
        EpBoton
    },
    methods:{
        GuardarRespuesta: function (id_factor, id_valor) {
            console.log(id_factor+' '+id_valor);
            axios.post('/GuardarRespuesta', {
                id_encuesta: this.encuesta.id_encuesta,
                id_area: this.area.id_area
            })
            .then(function(response){
                console.log(response.data);
            });
        }
    }
}
</script>
