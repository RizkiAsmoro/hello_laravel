
@extends('layouts.app')
@section('content')
    <div id="container" class="container"></div>

    <script src="js/jquery-3.2.1.min.js"></script>

    <script>
    
    $.get ('/api/products',function (data){

        var container = document.getElementById('container');

        for(var i=0;i<data.length;i++){
            var item = document.createElement("DIV");
            item.innetHtml=data[i].name;
            container.appenChild(item);
        }
    })
    </script>
@endsection()

