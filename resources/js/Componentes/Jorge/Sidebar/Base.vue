<template>
    <div style="display: flex; flex-direction: column; background-color: rgba(224, 224, 222, 0.31);" >
        <div style="display: flex; height: 50px; align-items: center; padding: 10px">
            <ep-top @click="SwitchMenu" style="cursor: pointer"/>
        </div>
        <div style="display: flex; width: 210px; min-width: 210px; flex-direction: column;" v-show="showMenu">
            <div style="display: flex; padding: 40px; flex-direction: column">
                <ep-perfil :usuario="usuario"/>
                <div style="margin-top: 60px">
                    <ep-menu/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EpTop from './top';
    import EpPerfil from './Perfil';
    import EpMenu from './Menu';

    export default{
        data(){
            return {
                showMenu:true
            }
        },
        components:{
            EpMenu,
            EpTop,
            EpPerfil
        },
        props:[
            'usuario'
        ],
        methods:{
            SwitchMenu: function(){
                if(this.showMenu){
                    this.showMenu = false;
                } else{
                    this.showMenu = true;
                }
            }
        }
    }
</script>
