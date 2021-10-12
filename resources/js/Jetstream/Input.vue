<template>
    <input style="width: 320px; height: 35px;border: 0.2px solid #131212;box-sizing: border-box;border-radius: 5px; font-family: Roboto;font-size: 16px;" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input">
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: ['modelValue'],

        emits: ['update:modelValue'],

        methods: {
            focus() {
                this.$refs.input.focus()
            }
        }
    })
</script>
