<x-layout title="Nova Marca">
    <form action="/marcas/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Marca</label>
            <input id="name" name="name" class="form-control" placeholder="Marca">
        </div>
        <div class="mb-3 text-end">
            <a href="/marcas/" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</x-layout>
