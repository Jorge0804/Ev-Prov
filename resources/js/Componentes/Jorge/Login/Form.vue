<template>
    <div style="display: flex; height: auto; flex-direction: column">
        <label style="font-family: Roboto; font-weight: bold; font-size: 33px; line-height: 31px; color: #548068;">BIENVENIDO</label>
        <label style="font-family: Roboto; font-size: 15px; line-height: 14px; font-weight: bold; margin-top: 8px;">Accede a tu cuenta</label>
        <br>
        <campo-form tipo="text">
            Usuario
        </campo-form>
        <campo-form tipo="password" style="margin-top: 10px">
            Password
        </campo-form>
        <a style="display: flex; align-self: flex-end; color: #2C5282; font-size: 12px; margin-top: 10px; margin-right: 15px;">Forgot your password?</a>
        <button style="font-weight: bold; color: white; border-radius: 5px; height: 35px; background-color: #527D66; margin-right: 30px; margin-left: 30px; font-size: 12px; margin-top: 40px;">Aceptar</button>
    </div>
</template>

<script>
    import CampoForm from './CampoForm';

    export default {
        componentes: {
            CampoForm
        }
    }
</script>
