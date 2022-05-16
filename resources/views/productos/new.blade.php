@extends('layouts.menu')
@section('contenido')
<div class="row">
    <h1 class="purple-text text-darken-4">nuevo producto:</h1>
<form 
    action=""
    class="col s8"
    method="POST">
    
    <div class="row">
     <div class=" col s8 input-field">
    <input
            placeholder="nombre de producto" 
            id="nombre" 
            type="text" 
            name="nombre">
        <label for="nombre">nombre de producto</label>
      </div> 
    </div>

    <div class="row">
     <div class=" col s8 input-field">
       <textarea
             name="desc"
             id="desc"
             class="materialize-textarea"></textarea>
             <label for="desc">descripcion</label>
      </div> 
    </div>

    <div class="row">
     <div class=" col s8 input-field">
     <input
            placeholder="precio" 
            id="precio" 
            type="text" 
            name="precio">
        <label for="precio">precio</label>
     </div> 
    </div>

    <div class="row">
      <div class=" col s8 file-field input-field">
        <div class="btn">
            <span>imagen del producto</span>
            <input type="file" name="imagen"/>
        </div>
       
        <div class="file-path-wrapper">
        <input  type="text" class="file-path">
        </div>
    </div>
  </form> 
</div>
@endsection



    
        
       