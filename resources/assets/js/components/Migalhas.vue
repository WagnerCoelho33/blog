<template>
    <ol class="breadcrumb">
        <li v-for="item in lista" :key="item.id"><a v-if="item.url" :class="defineClass" :href="item.url">{{item.titulo}}</a><span v-if="!item.url">{{item.titulo}}</span></li>
    </ol>
</template>

<script>
    export default {
       props:['lista'],
       computed:{
           defineClass: function(){
               if(this.url){
                   return "active";
               }else{
                   return "";
               }
           }
       }
    }
</script>