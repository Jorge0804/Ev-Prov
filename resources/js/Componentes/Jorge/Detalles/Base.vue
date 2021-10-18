<template>
    <div style="min-width: 500px; background: rgba(222,224,224,0.32); box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.14); border-radius: 32px; padding: 25px; margin-bottom: 60px;">
        <det-titulo>
            <slot name="titulo"></slot>
        </det-titulo>
        <div style="margin-top: 15px;">
            <det-pregunta v-for="detalle in detalles" style="margin-bottom: 15px;">
                <template v-slot:factor>
                    {{detalle.factor.nombre}}
                </template>
                <template v-slot:valor>
                    {{detalle.valor.nombre}} - {{detalle.valor.porcentaje}}%
                </template>
            </det-pregunta>
        </div>
    </div>
</template>

<script>
    import DetTitulo from './Titulo';
    import DetPregunta from './Pregunta';

    export default{
        components:{
            DetTitulo,
            DetPregunta
        },
        props:[
            'detalles'
        ]
    }
</script>
