<legend>Lista de Tags vinculadas ao trabalho</legend>
<div class='row justify-content-center'>
    @if ($trabalho->tags->count() > 0)    
        <div class="col-md-12">
            <table class="table table-sm table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="col-xs-10 col-sm-10 col-md-10 col-lg-10">Nome</th>
                        <th scope="col" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trabalho->tags as $tag)
                        <tr>
                            <td>{{ $tag->descricao }}</td>
                            <td>
                                <form name="form_delete" action="{{ route('trabalho.delTag') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="tag_id" value="{{ $tag->id }}">
                                    <input type="hidden" name="trabalho_id" value="{{ $trabalho->id }}">
                                    <button type="submit" class="btn btn-sm btn-light-red text-red" data-bs-toggle="tooltip" data-bs-title="Excluir" onclick="return confirm('Tem certeza que deseja excluir a tag: {{ $tag->descricao }}?')">
                                        <i class="ri-delete-bin-line text-red"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h5>Nenhuma tag vinculada</h5>
    @endif
</div>