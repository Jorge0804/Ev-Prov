<template>
    <input :type="tipo" style="width: 320px; height: 35px;border: 0.2px solid #131212;box-sizing: border-box;border-radius: 5px; font-family: Roboto;font-size: 16px;" ref="input">
</template>

<script>
    import Input from "../../../Jetstream/Input";
    export default{
        components: {Input},
        props:[
            'tipo'
        ]
    }
</script>
