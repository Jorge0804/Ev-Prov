<template>
    <div>
        <ep-label style="margin-bottom: 11px;">
            <slot></slot>
        </ep-label>
        <br>
        <ep-textbox :tipo="tipo"/>
    </div>
</template>

<script>
    import EpLabel from './Label';
    import EpTextbox from './textbox';

    export default {
        components:{
            EpLabel,
            EpTextbox
        },
        props:[
            'tipo'
        ]
    }
</script>
