<template>
    <factor>
        <slot name="factor"></slot>
    </factor>
    <valor style="margin-bottom: 20px;">
        <slot name="valor"></slot>
    </valor>
</template>

<script>
    import Factor from './Factor';
    import Valor from './Valor';

    export default{
        components:{
            Factor,
            Valor
        }
    }
</script>
