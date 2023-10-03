<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Veterinários", 'rota' => "veterinarios.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') veterinarios @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            <x-datatable 
                title="Veterinários" 
                crud="veterinarios" 
                :header="['id', 'CRMV', 'nome', 'especialidade']" 
                :data="$dados"
                :hide="[true, false, true, false]" 
            /> 
        </div>
    </div>
@endsection