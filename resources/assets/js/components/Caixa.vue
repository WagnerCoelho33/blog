<template>
    <div class="small-box" :style="defineCor">
        <div class="inner">
            <h3>{{qtd}}</h3>

            <p>{{titulo}}</p>
        </div>
        <div class="icon">
            <i v-bind:class="icone"></i>
        </div>
        <a :href="url" class="small-box-footer">
            Ver mais <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</template>

<script>
    export default {
        props:['qtd', 'titulo', 'url', 'cor', 'icone'],
        computed:{
            defineCor:function(){
                return "background-color: "+this.cor+" !important;"
            }
        }
        
    }
</script>

<style>

    .bg-aqua {
     background-color: #00c0ef !important;
    }

    .small-box {
    border-radius: 2px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    color: #ffffff
    }

    .small-box:hover {
        text-decoration: none;
        color: #f9f9f9;
    }

    .small-box:hover .icon {
        font-size: 95px;
    }

    .small-box>.small-box-footer:hover {
        color: #fff;
        background: rgba(0,0,0,0.15);
    }

    a:hover, a:active, a:focus {
        outline: none;
        text-decoration: none;
        color: #72afd2;
    }

    .small-box>.inner {
    padding: 10px;
    }

    .small-box h3, .small-box p {
        z-index: 5;
    }

    .small-box h3 {
        font-size: 38px;
        font-weight: bold;
        margin: 0 0 10px 0;
        white-space: nowrap;
        padding: 0;
    }

    .small-box p {
        font-size: 15px;
    }

    p {
        margin: 0 0 10px;
    }

    .small-box .icon {
        -webkit-transition: all .3s linear;
        -o-transition: all .3s linear;
        transition: all .3s linear;
        position: absolute;
        top: -10px;
        right: 10px;
        z-index: 0;
        font-size: 90px;
        color: rgba(0,0,0,0.15);
    }

    .small-box>.small-box-footer {
        position: relative;
        text-align: center;
        padding: 3px 0;
        color: #fff;
        color: rgba(255,255,255,0.8);
        display: block;
        z-index: 10;
        background: rgba(0,0,0,0.1);
        text-decoration: none;
    }

    a {
        color: #3c8dbc;
    }

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

    .red {
        border-color: #e9c6c6;
    }

    .red > .panel-heading {
        color: #e9c6c6;
        background-color: #ff0000;
        border-color: #e9c6c6;
    }

</style>

