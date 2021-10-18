<template>
    <div style="display: table; background: rgba(0, 0, 0, 0.7); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); border-radius: 15px; padding: 17px; margin-bottom: 15px; width: 100%; table-layout: fixed;">
        <div style="display: table-cell; text-align: center;" v-for="titulo in titulos">
            <label style="color: white; font-size: 18px;">
                {{titulo}}
            </label>
        </div>
    </div>
</template>

<script>
    export default{
        props:[
            'titulos'
        ]
    }
</script>
