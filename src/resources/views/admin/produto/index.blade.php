@extends('layout.admin')

@section('title', 'Produto | Confeitaria Dashboard')
@section('pg-titulo', 'Produto')
@section('link-topo', 'Produto')

@section('content')

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gerenciamento de Produtos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#modalNovoProduto">
                                <i class="bi bi-plus-circle"></i>
                                Novo Produto
                            </button>
                        </div>
                    </div>

                    {{-- MENSAGENS DE FEEDBACK --}}
                    @if (session('sucesso'))
                        <div id="alerta-sucesso" class="alert alert-success alert-dismissible fade show mx-3"
                            role="alert">
                            ✅ {{ session('sucesso') }}
                        </div>
                    @endif

                    @if (session('erro'))
                        <div id="alerta-erro" class="alert alert-danger alert-dismissible fade show mx-3" role="alert">
                            ❌ {{ session('erro') }}
                        </div>
                    @endif

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 40px">Foto</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th style="width: 200px">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($listaProduto as $linha)
                                    <tr class="align-middle">

                                        {{-- Imagem clicável --}}
                                        <td>
                                            <img src="{{ asset('davilla/images/' . $linha->foto_produto) }}" width="80"
                                                style="cursor:pointer; border-radius: 6px;" data-bs-toggle="modal"
                                                data-bs-target="#modalVerProduto"
                                                data-foto="{{ asset('davilla/images/' . $linha->foto_produto) }}"
                                                data-nome="{{ $linha->nome_produto }}"
                                                data-descricao="{{ $linha->descricao_produto }}"
                                                data-tamanho="{{ $linha->tamanho_produto }}"
                                                data-unidade="{{ $linha->unid_medida_produto }}"
                                                data-valor="{{ number_format($linha->valor_produto, 2, ',', '.') }}"
                                                data-status="{{ $linha->status_produto }}">
                                        </td>

                                        <td>{{ $linha->nome_produto }}</td>
                                        <td>{{ $linha->descricao_produto }}</td>
                                        <td>
                                            @if ($linha->status_produto === 'ATIVO')
                                                <span class="badge text-bg-success">Ativo</span>
                                            @else
                                                <span class="badge text-bg-danger">Inativo</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex gap-1 align-items-center">
                                                {{-- 1. BOTÃO ALTERAR STATUS (ATIVAR/DESATIVAR) --}}
                                                <form action="{{ route('admin.produto.status', $linha->id_produto) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    @if ($linha->status_produto === 'ATIVO')
                                                        <button type="submit" class="btn btn-secondary"
                                                            title="Desativar Produto">
                                                            <i class="bi bi-toggle-on"></i>
                                                        </button>
                                                    @else
                                                        <button type="submit" class="btn btn-success"
                                                            title="Ativar Produto">
                                                            <i class="bi bi-toggle-off"></i>
                                                        </button>
                                                    @endif
                                                </form>

                                                {{-- 2. BOTÃO EDITAR --}}
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditarProduto" data-id="{{ $linha->id_produto }}"
                                                    data-nome="{{ $linha->nome_produto }}"
                                                    data-slug="{{ $linha->slug_produto }}"
                                                    data-ordem="{{ $linha->ordem_produto }}"
                                                    data-descricao="{{ $linha->descricao_produto }}"
                                                    data-tamanho="{{ $linha->tamanho_produto }}"
                                                    data-unidade="{{ $linha->unid_medida_produto }}"
                                                    data-valor="{{ $linha->valor_produto }}"
                                                    data-status="{{ $linha->status_produto }}"
                                                    data-destaque="{{ $linha->destaque_produto }}"
                                                    data-categoria="{{ $linha->id_categoria }}"
                                                    data-foto="{{ asset('davilla/images/' . $linha->foto_produto) }}">
                                                    <i class="bi bi-pencil"></i>
                                                </button>

                                                {{-- 3. BOTÃO EXCLUIR (AGORA DENTRO DO FORMULÁRIO) --}}
                                                <form action="{{ route('admin.produto.destroy', $linha->id_produto) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Tem certeza que deseja excluir permanentemente este produto?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" title="Excluir Produto">
                                                        <i class="bi bi-trash3"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhum produto cadastrado</td>
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
    @include('admin.produto.modal.criar')
    @include('admin.produto.modal.editar')

    <!-- Modal Ver Produto -->
    <div class="modal fade" id="modalVerProduto" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVerProdutoNome"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center">
                            <img id="modalVerProdutoFoto" src="" alt="" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-7">
                            <h4 id="modalVerProdutoNome2" class="mb-3"></h4>
                            <p id="modalVerProdutoDescricao" class="text-muted mb-3"></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><strong>Tamanho</strong></span>
                                    <span id="modalVerProdutoTamanho"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><strong>Unidade</strong></span>
                                    <span id="modalVerProdutoUnidade"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><strong>Valor</strong></span>
                                    <span id="modalVerProdutoValor" class="fw-bold text-success"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><strong>Status</strong></span>
                                    <span id="modalVerProdutoStatus"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modal Ver Produto ao clicar na imagem
        document.getElementById('modalVerProduto').addEventListener('show.bs.modal', function(event) {
            const img = event.relatedTarget;

            document.getElementById('modalVerProdutoFoto').src = img.getAttribute('data-foto');
            document.getElementById('modalVerProdutoNome').textContent = img.getAttribute('data-nome');
            document.getElementById('modalVerProdutoNome2').textContent = img.getAttribute('data-nome');
            document.getElementById('modalVerProdutoDescricao').textContent = img.getAttribute('data-descricao');
            document.getElementById('modalVerProdutoTamanho').textContent = img.getAttribute('data-tamanho');
            document.getElementById('modalVerProdutoUnidade').textContent = img.getAttribute('data-unidade');
            document.getElementById('modalVerProdutoValor').textContent = 'R$ ' + img.getAttribute('data-valor');

            const status = img.getAttribute('data-status');
            const statusEl = document.getElementById('modalVerProdutoStatus');
            statusEl.innerHTML = status === 'ATIVO' ?
                '<span class="badge text-bg-success">Ativo</span>' :
                '<span class="badge text-bg-danger">Inativo</span>';
        });

        // Gera slug automaticamente a partir do nome
        document.getElementById('nome_produto').addEventListener('input', function() {
            const slug = this.value
                .toLowerCase()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .replace(/[^a-z0-9\s-]/g, '')
                .trim()
                .replace(/\s+/g, '-');
            document.getElementById('slug_produto').value = slug;
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
