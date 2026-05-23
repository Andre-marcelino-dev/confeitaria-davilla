@extends('layout.admin')

@section('title', 'Categoria | Confeitaria Dashboard')
@section('pg-titulo', 'Categoria')
@section('link-topo', 'Categoria')

@section('content')

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gerenciamento de Categorias</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#modalNovaCategoria">
                                <i class="bi bi-plus-circle"></i>
                                Nova Categoria
                            </button>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 40px">Ordem</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th style="width: 200px">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categorias as $linha)
                                    <tr class="align-middle">
                                        <td>{{ $linha->ordem_categoria }}</td>
                                        <td>{{ $linha->nome_categoria }}</td>
                                        <td>{{ $linha->descricao_categoria }}</td>
                                        <td>
                                            @if ($linha->status_categoria === 'ATIVO')
                                                <span class="badge text-bg-success">Ativo</span>
                                            @else
                                                <span class="badge text-bg-danger">Inativo</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- Botão Ativar/Desativar --}}
                                            <form action="{{ route('admin.categoria.status', $linha->id_categoria) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                @if ($linha->status_categoria === 'ATIVO')
                                                    <button type="submit" class="btn btn-secondary">
                                                        <i class="bi bi-toggle-on"></i>
                                                    </button>
                                                @else
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="bi bi-toggle-off"></i>
                                                    </button>
                                                @endif
                                            </form>

                                            {{-- Botão Atualizar --}}
                                            <button type="button" class="btn btn-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEditarCategoria"
                                                data-id="{{ $linha->id_categoria }}"
                                                data-nome="{{ $linha->nome_categoria }}"
                                                data-descricao="{{ $linha->descricao_categoria }}"
                                                data-ordem="{{ $linha->ordem_categoria }}"
                                                data-status="{{ $linha->status_categoria }}">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Nenhuma categoria cadastrada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modais --}}
    @include('admin.categoria.modal.criar')
    @include('admin.categoria.modal.editar')

    <script>
        // Preenche o modal de editar com os dados da linha
        document.getElementById('modalEditarCategoria').addEventListener('show.bs.modal', function (event) {
            const btn = event.relatedTarget;

            document.getElementById('edit_nome_categoria').value      = btn.getAttribute('data-nome');
            document.getElementById('edit_descricao_categoria').value = btn.getAttribute('data-descricao');
            document.getElementById('edit_ordem_categoria').value     = btn.getAttribute('data-ordem');
            document.getElementById('edit_status_categoria').value    = btn.getAttribute('data-status');

            document.getElementById('formEditarCategoria').action = '{{ url("admin/categoria") }}/' + btn.getAttribute('data-id');
        });

        // ALERTA SUCESSO
        setTimeout(function() {
            let alertaSucesso = document.getElementById('alertSucesso');
            if (alertaSucesso) alertaSucesso.style.display = 'none';
        }, 3000);

        // ALERTA ERRO
        setTimeout(function() {
            let alertaErro = document.getElementById('alertErro');
            if (alertaErro) alertaErro.style.display = 'none';
        }, 3000);
    </script>

@endsection