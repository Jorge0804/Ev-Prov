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
                    <!--<form method="POST" action="{{ route('login') }}">
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
                    </form>-->
                    <jet-validation-errors class="mb-4" />
                    <form @submit.prevent="submit" style="display: flex; height: auto; flex-direction: column">
                        <div>
                            <jet-label for="email" value="Usuario" />
                            <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
                        </div>

                        <div class="mt-4">
                            <jet-label for="password" value="Contraseña" />
                            <jet-input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                        </div>

                        <!--<div class="block mt-4">
                            <label class="flex items-center">
                                <jet-checkbox name="remember" v-model:checked="form.remember" />
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>
                        </div>-->
                        <ep-enlace>
                            Forgot your password?
                        </ep-enlace>

                        <div class="flex items-center justify-end mt-4">
                            <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                                Forgot your password?
                            </Link>

                            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing" style="width: 270px;">
                                Iniciar sesión
                            </jet-button>
                        </div>
                    </form>
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
import { defineComponent } from 'vue'
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetCheckbox from '@/Jetstream/Checkbox.vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default{
    components:{
        EpCampoForm,
        EpLoginButton,
        EpEnlace,
        EpTitulos,
        Head,
        JetAuthenticationCard,
        JetAuthenticationCardLogo,
        JetButton,
        JetInput,
        JetCheckbox,
        JetLabel,
        JetValidationErrors,
        Link,
    },
    props: {
        canResetPassword: Boolean,
        status: String
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form
                .transform(data => ({
                    ... data,
                    remember: this.form.remember ? 'on' : ''
                }))
                .post(this.route('login'), {
                    onFinish: () => this.form.reset('password'),
                })
        }
    }
}
</script>
