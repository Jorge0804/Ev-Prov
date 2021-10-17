<template>
    <div style="height: 25vh; background-color: #FBFBFB; display: flex; border-radius: 15px">
        <div style="width: 65%; display: flex; justify-content: center; font-family: Quicksand; padding: 15px; flex-direction: column">
            <label style="color: green; font-size: 36px; font-weight: 300; line-height: 45px;">
                La encuesta se envió
            </label>
            <label style="color: green; font-size: 18px; line-height: 20px; margin-top: 10px;" v-show="showDesc">
                Te agradecemos tu cooperación, los resultados serán tomados en cuentas para las evaluaciones
            </label>
        </div>
        <div style="flex: auto; display: flex; align-items: center; justify-content: center">
            <img src="/images/success.png" style="width: 20vh">
        </div>
    </div>
</template>

<script>
export default{
    created() {
        this.showDesc = (document.documentElement.clientWidth > 850)?true:false;
        window.addEventListener("resize", this.CambioResolución);
    },
    data() {
        return {
            showDesc:true
        }
    },
    methods: {
        CambioResolución(e) {
            this.showDesc = (document.documentElement.clientWidth > 850)?true:false;
        }
    }
}
</script>
