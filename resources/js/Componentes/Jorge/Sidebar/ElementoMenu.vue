<template>
    <button class="inline-flex items-center" style="font-size: 13px; font-weight: bold; line-height: 11px; margin-bottom: 30px">
        <i class="material-icons mr-3">
            {{ menu.icono }}
        </i>
        <p>{{ menu.nombre }}</p>
    </button>
</template>

<script>
    export default{
        props:[
            'menu'
        ]
    }
</script>
