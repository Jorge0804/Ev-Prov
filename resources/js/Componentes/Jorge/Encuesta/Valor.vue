<template>
    <div style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 400; line-height: 30px;">
        <input type="radio" :name="'valor_'+factor.id_factor">
        <slot></slot>
    </div>
</template>

<script>
    export default{
        props:[
            'factor'
        ]
    }
</script>
