<template>
    <div class="h-full" style="margin-bottom: 20px; width: 200px; background: #F5F5F5; border-radius: 15px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); padding: 10px; display: flex;">
        <div style="flex: auto; display: flex; flex-direction: column; justify-content: center">
            <label style="font-family: QuickSand; font-size: 14px; font-weight: bold">
                <i class="material-icons mr-3" style="color: #6FCF97; font-size: 10px; font-weight: bold">
                    adjust
                </i>
                10
            </label>
            <label style="font-family: QuickSand; font-size: 12px;">
                <slot></slot>
            </label>
        </div>
        <div style="flex: auto; display: flex; align-items: center; justify-content: center">
            <img :src="'/images/'+imagen" style="width: 100px">
        </div>
    </div>
</template>

<script>
    export default{
        props:[
            'imagen'
        ]
    }
</script>
