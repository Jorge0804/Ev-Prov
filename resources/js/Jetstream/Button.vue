<template>
    <button :type="type" style="font-weight: bold; color: white; border-radius: 5px; height: 35px; background-color: #527D66; margin-right: 30px; margin-left: 30px; font-size: 12px; margin-top: 40px;">
        <slot></slot>
    </button>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    })
</script>
