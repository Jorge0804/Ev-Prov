<template>
    <div :style="'width: 45%; height: 180px; background: '+color+'; border-radius: 15px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); padding: 10px; display: flex; '">
        <div style="width: 75%; display: flex; justify-content: center; font-family: Quicksand; padding: 15px; flex-direction: column">
            <label style="color: rgba(0, 0, 0, 0.87); font-size: 20px; font-weight: 300; line-height: 45px;">
                <slot name="titulo"></slot>
            </label>
            <label style="color: rgba(0, 0, 0, 0.87); font-size: 12px; line-height: 20px; margin-top: 5px;">
                <slot name="descripcion"></slot>
            </label>
            <a style="color: darkblue;" href="#">Ver más</a>
        </div>
        <div style="flex: auto; display: flex; align-items: center; justify-content: center;">
            <img :src="'/images/'+imagen" style="width: 30vh">
        </div>
    </div>
</template>

<script>
    export default{
        props:[
            'imagen',
            'color'
        ]
    }
</script>
