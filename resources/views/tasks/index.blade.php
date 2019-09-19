@extends("template.app")

@section("content")
    <div class="row">
        @foreach($tasks as $task)
            <div class="col-sm-3">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $task->tsk_titulo }}</h5>
                    <p class="card-text">Status: {{ $task->tsk_status }}</p>
                    <a href='{{url("/tasklist/$task->id/editar")}}' class="btn btn-primary">Editar</a>
                    <a href='{{url("/tasklist/$task->id/excluir")}}' class="btn btn-danger">Excluir</a>
                </div>
                </div><br/>
            </div>
        @endforeach
    </div>
@endsection
