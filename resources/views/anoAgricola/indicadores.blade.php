@extends("app")

@section("body")

    <h4>Unidade de Produção {{ $anoAgricola->unidadeProducao->nome }}</h4>
    <hr>

    <div class="d-flex justify-content-between mb-3">
        <h3>Indicadores</h3>
    </div>

    <div class="col-12 col-xl-6 d-flex flex-column align-items-center">
        <div class="row w-100 text-center align-items-center justify-content-center my-2">
            <div class="col-4">
                <p class="my-1">Superfície Total (ST): <span class="fw-bold">{{ $st }} ha</span></p>
            </div>
            <div class="col-4">
                <p class="my-1">Superfície Agrícola Útil (SAU): <span class="fw-bold">{{ $sau }} ha</span></p>
            </div>
            <div class="col-4">
                <p class="my-1">Mão de Obra Total (UTH): <span class="fw-bold">{{ $uthTotal }}</span></p>
            </div>
            <div class="col-4">
                <p class="my-1">Mão de Obra Familiar (UTH): <span class="fw-bold">{{ $uthFamiliar }}</span></p>
            </div>
            <div class="col-4">
                <p class="my-1">Mão de Obra Contratada (UTH): <span class="fw-bold">{{ $uthContratada }}</span></p>
            </div>
            <div class="col-4">
                <p class="my-1">Superfície Agrícola Útil por Mão de Obra (SAU/UTH): <span class="fw-bold">{{ $sauPorUTH }}</span></p>
            </div>
        </div>
    </div>

@endsection
