<template>
    <div v-for="row in rows" :style="'display: table; background: '+row.color+'; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); border-radius: 15px; padding: 15px; margin-bottom: 10px; width: 100%; font-family: Quicksand; table-layout: fixed;'">
        <div style="display: table-cell; text-align: center" v-for="campo in row.campos">
            <label style="font-size: 14px;">
                {{ campo }}
            </label>
        </div>
        <div style="display: table-cell; text-align: center; vertical-align: middle;">
            <Link v-for="accion in row.acciones" @click="this.$inertia.get(route(accion.ruta, accion.parametros))" style="margin-right: 5px">
                <i class="material-icons">
                    {{ accion.icono }}
                </i>
            </Link>
        </div>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default{
        props:[
            'rows'
        ],
        components:{
            Link
        }
    }
</script>
