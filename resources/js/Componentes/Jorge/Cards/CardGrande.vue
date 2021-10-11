<template>
    <div class="h-full" style="width: 440px; background: #F5F5F5; border-radius: 15px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.14); padding: 10px; display: flex; flex-direction: column">
        <label style="font-family: QuickSand; font-size: 19px; margin-bottom: 10px">
            <slot name="titulo"></slot>
        </label>
        <p style="font-family: QuickSand; font-size: 12px;">
            <slot name="descripcion"></slot>
        </p>
    </div>
</template>
