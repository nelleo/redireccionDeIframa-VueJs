<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body >
    <div id="app" class="row"> 
        <div class="col-12 mb-2">
            <label for="">introduzca una URL</label>
            <input type="text" v-model="url" @keyup.enter="cargarIframe">
            <button v-on:click="cargarIframe">ok</button>
        </div>   
        <div class="col-12" style="margin-top:2em;">
            <iframe class="" id="iframe" scrolling="true" src="" frameborder="0" width="600em" height="600em" style="border:2px solid;back-ground:red"></iframe>    
        </div>  
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script >
    var vue = new Vue({
        el: "#app",
        data:{
          url:''
        },
        methods:{
            cargarIframe:function(){ 
                document.getElementById("iframe").contentWindow.location.replace(this.url);
                this.url="";
            }
        }
      });
    </script>
    <body >    
</html>