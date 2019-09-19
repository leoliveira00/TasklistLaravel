@extends("template.app")

@section("content")
    <div class="col-md-6 well">
        <h4>Editar Tarefa</h4><br />
        <form action="{{ url('/tasklist/update') }}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$task->id}}" >
            <div class="form-group">
                <label for="tsk_titulo">Título:</label>
                <input type="text" value="{{$task->tsk_titulo}}" class="form-control" name="tsk_titulo" id="tsk_titulo" placeholder="Título">
            </div>
            <div class="form-group">
                <label for="tsk_status">Status:</label>
                <select class="form-control" name="tsk_status" id="tsk_status">
                    <option>Aberto</option>
                    <option>Fechado</option>
                </select>
            </div><br/>
            <button type="submit" class="btn btn-primary mb-2">Salvar</button>
        </form>
    </div>
@endsection
