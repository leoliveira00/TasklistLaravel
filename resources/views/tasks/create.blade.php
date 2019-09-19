@extends("template.app")

@section("content")
    <div class="col-md-6 well">
    <h4>Nota Tarefa</h4><br />
        <form action="{{ url('/tasklist/store') }}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="tsk_titulo">Título:</label>
                <input type="text" class="form-control" name="tsk_titulo" id="tsk_titulo" placeholder="Título">
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
