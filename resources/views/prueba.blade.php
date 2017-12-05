@extends('master')

@section('contenido')

    <div class="container">
        <div id="app-3">
            <p v-if="seen">Now you see me</p>
        </div>
    </div>


    @stop

@section('js-bottom')
    <script>
        var app3 = new Vue({
            el: '#app-3',
            data: {
                seen: false
            }
        })
    </script>
    @stop