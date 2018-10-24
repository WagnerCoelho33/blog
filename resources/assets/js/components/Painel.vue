<template>
    
    <div :class="defineCor">
        <div v-if="titulo" class="panel-heading">{{titulo}}</div>
            <div class="panel-body">
                <slot></slot>
            </div>
        </div>             
</template>

<script>
    export default {
        props:['titulo', 'cor'],
        computed:{
            defineCor: function(){
                return "panel "+ (this.cor || "panel-default");
            }
        }
    }
</script>

<style media="screen">
    .blue {
        border-color: #cec6e9;
    }

    .blue > .panel-heading {
        color: #cec6e9;
        background-color: #010047;
        border-color: #cec6e9;
    }

    .orange {
        border-color: #e9d4c6;
    }

    .orange > .panel-heading {
        color: #e9d4c6;
        background-color: #ff5100;
        border-color: #e9d4c6;
    }

</style>

