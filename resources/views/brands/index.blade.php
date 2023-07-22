<x-layout title="Marcas">

    <div class="row">
        <div class="col mb-3 text-end">
            <a href="/marcas/cadastrar" class="btn btn-dark text-white text-end">Adicionar</a>
        </div>
    </div>
    <ul class="list-group">
        @foreach ($brands as $brand)
            <li class="list-group-item">{{ $brand->name }}</li>
        @endforeach
    </ul>
    </div>
</x-layout>
