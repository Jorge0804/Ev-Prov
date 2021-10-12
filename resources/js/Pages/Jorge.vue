<template>
    <div style="min-height: min-content; display: flex; font-family: Roboto;">
        <ep-sidebar :usuario="usuario"/>
        <div style="flex: auto; display: flex; flex-direction: column; min-height: min-content; padding-left: 50px; padding-right: 50px; padding-top: 40px">
            <ep-card-titulo imagen="encyprov.png" style="margin-bottom: 30px">
                <template v-slot:titulo>Encuesta - DELL</template>
                <template v-slot:descripcion>De acuerdo al servicio brindado como calificaría los siguientes criterios, donde 'excelente' es la puntuación más alta y 'deficiente' la más baja.</template>
            </ep-card-titulo>
            <div style="background: #E7EEDD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); border-radius: 32px; padding: 25px">
                <label style="margin-bottom: 30px; color: rgba(0, 0, 0, 0.87); font-size: 20px; font-weight: bold; line-height: 25px;">
                    Contesta la evaluación según el desempeño del proveedor.
                </label>
                <div style="background: rgba(251, 251, 251, 0.8); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); border-radius: 15px; padding: 15px; margin-bottom: 20px; margin-top: 20px" v-for="factor in factores">
                    <label style="color: rgba(0, 0, 0, 0.87); font-size: 20px; font-weight: 400; line-height: 25px;">
                        {{ factor.nombre }}
                    </label>
                    <p style="color: gray; font-size: 12px; font-weight: 400; line-height: 15px; margin-top: 10px">
                        {{factor.descripcion}}
                    </p>
                    <fieldset style="margin-top: 15px; margin-left: 20px">
                        <div style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 400; line-height: 30px;" v-for="valor in valores">
                            <input type="radio" :name="'valor_'+factor.id_factor">
                            {{ valor.nombre }}
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EpCardTitulo from "../Componentes/Jorge/Cards/CardTitulo";
    import EpSidebar from '../Componentes/Jorge/Sidebar/Base';

    export default{
        props:[
            'usuario',
            'factores',
            'valores'
        ],
        components:{
            EpCardTitulo,
            EpSidebar
        }
    }
</script>
