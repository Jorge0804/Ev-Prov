<template>
    <Link @click="accion" v-if="menu.ver || (id == 1)">
        <button class="inline-flex items-center" style="font-size: 13px; font-weight: bold; line-height: 11px; margin-bottom: 30px">
            <i class="material-icons mr-3">
                {{ menu.icono }}
            </i>
            <p>{{ menu.nombre }}</p>
        </button>
    </Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default{
        components:{
            Link
        },
        props:[
            'menu',
            'id'
        ],
        methods:{
            accion(){
                if(this.menu.tipo == 'get'){
                    this.$inertia.get(route(this.menu.ruta));
                } else{
                    this.$inertia.post(route(this.menu.ruta));
                }
            }
        }
    }
</script>
