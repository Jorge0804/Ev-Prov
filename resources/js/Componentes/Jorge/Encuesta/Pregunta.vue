<template>
    <label style="color: rgba(0, 0, 0, 0.87); font-size: 20px; font-weight: 400; line-height: 25px;">
        <slot name="nombre"></slot>
    </label>
    <p style="color: gray; font-size: 12px; font-weight: 400; line-height: 15px; margin-top: 10px">
        <slot name="descripcion"></slot>
    </p>
</template>
