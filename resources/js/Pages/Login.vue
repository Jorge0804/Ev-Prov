<template>
    <div class="h-screen" style="background-color: #E9E2E2; display: flex; font-family: Roboto">
        <div style="background-color: green;">
            <img src="../../imagenes/fondo_login.jpeg" style="height: auto; max-height: 100%">
        </div>
        <div style="flex: auto; display: flex; flex-direction: column">
            <div style="flex: auto; display: flex; flex-direction: row-reverse; align-items: center">
                <img src="../../imagenes/logo_utt.png" style="display: flex; width: 15%; height: 35%; margin-right: 20px">
            </div>
            <div style="height: 70%; display: flex; align-items: center; justify-content: center">
                <div style="display: flex; height: auto; flex-direction: column">
                    <ep-titulos>
                        <template v-slot:titulo>
                            BIENVENIDO
                        </template>
                        <template v-slot:subtitulo>
                            Accede a tu cuenta
                        </template>
                    </ep-titulos>
                    <br>
                    <ep-campo-form tipo="text">
                        Usuario
                    </ep-campo-form>
                    <ep-campo-form tipo="password" style="margin-top: 10px">
                        Password
                    </ep-campo-form>
                    <ep-enlace>
                        Forgot your password?
                    </ep-enlace>
                    <ep-login-button>
                        Iniciar sesión
                    </ep-login-button>
                </div>
            </div>
            <div style="flex: auto;"></div>
        </div>
    </div>
</template>

<script>
import EpCampoForm from '../Componentes/Jorge/Login/CampoForm';
import EpLoginButton from '../Componentes/Jorge/Login/Boton';
import EpEnlace from '../Componentes/Jorge/Login/Enlace';
import EpTitulos from '../Componentes/Jorge/Login/Titulos';

export default{
    components:{
        EpCampoForm,
        EpLoginButton,
        EpEnlace,
        EpTitulos
    }
}
</script>
