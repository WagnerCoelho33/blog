<template>
    <div :class="'col-sm-'+ (sm || '6') + ' col-md-'+ (md || '4')">
            <div class="thumbnail">
            <img src="https://image.freepik.com/vetores-gratis/fundo-de-aquarela_1176-218.jpg" alt="...">
                <div class="caption">
                    <small>{{data | formataData}} - {{autor}}</small>
                    <h3>{{titulo}}</h3>
                    <p>{{descricao}}</p>
                    <p><a :href="link" class="btn btn-primary" role="button">Ler Mais</a></p>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
      props:['titulo', 'descricao', 'imagem', 'data', 'autor', 'sm', 'md', 'link'],
      filters:{
            formataData: function(value){
                if(!value) return '';
                value = value.toString();
                value = value.split('-');
                return value[2] + '/' + value[1]+ '/' + value[0];
            }
        }
    }
    
</script>