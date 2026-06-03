@extends('layout.admin')

@section('title', 'Usuários | Confeitaria Dashboard')
@section('pg-titulo', 'Usuários')
@section('link-topo', 'Usuários')

@section('content')

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gerenciamento de Usuários</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#modalNovoUsuario">
                                <i class="bi bi-plus-circle"></i>
                                Novo Usuário
                            </button>
                        </div>
                    </div>

                    @if (session('success'))
                        <div id="alerta-sucesso" class="alert alert-success alert-dismissible fade show mx-3"
                            role="alert">
                            ✅ {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div id="alerta-erro" class="alert alert-danger alert-dismissible fade show mx-3" role="alert">
                            ❌ {{ session('error') }}
                        </div>
                    @endif

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Perfil</th>
                                        <th>Status</th>
                                        <th>Criado em</th>
                                        <th style="width: 120px">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($usuarios as $linha)
                                        <tr class="align-middle">

                                            <td>
                                                <a href="{{ route('admin.usuarios.show', $linha->id_usuario) }}"
                                                    title="Ver perfil de {{ $linha->nome_usuario }}">
                                                    @if ($linha->foto_usuario && $linha->foto_usuario !== 'default.png')
                                                        <img src="{{ asset('dash/assets/img/' . $linha->foto_usuario) }}"
                                                            width="45" height="45"
                                                            style="object-fit: cover; border-radius: 50%; cursor: pointer;">
                                                    @else
                                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($linha->nome_usuario) }}&background=random&size=45&rounded=true"
                                                            width="45" height="45"
                                                            style="border-radius: 50%; cursor: pointer;">
                                                    @endif
                                                </a>
                                            </td>

                                            <td>{{ $linha->nome_usuario }}</td>
                                            <td>{{ $linha->email_usuario }}</td>

                                            <td>
                                                @php
                                                    $cores = [
                                                        'Administrador' => 'text-bg-danger',
                                                        'GERENTE' => 'text-bg-warning',
                                                        'CONFEITEIRO' => 'text-bg-primary',
                                                        'ATENDENTE' => 'text-bg-info',
                                                        'CAIXA' => 'text-bg-dark',
                                                    ];
                                                    $cor = $cores[$linha->perfil_usuario] ?? 'text-bg-secondary';
                                                @endphp
                                                <span class="badge {{ $cor }}">{{ $linha->perfil_usuario }}</span>
                                            </td>

                                            <td>
                                                @if ($linha->status_usuario === 'ATIVO')
                                                    <span class="badge text-bg-success">Ativo</span>
                                                @else
                                                    <span class="badge text-bg-secondary">Inativo</span>
                                                @endif
                                            </td>

                                            <td>{{ \Carbon\Carbon::parse($linha->criado_em_usuario)->format('d/m/Y') }}
                                            </td>

                                            <td>
                                                <form action="{{ route('admin.usuarios.update', $linha->id_usuario) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="nome_usuario"
                                                        value="{{ $linha->nome_usuario }}">
                                                    <input type="hidden" name="email_usuario"
                                                        value="{{ $linha->email_usuario }}">
                                                    <input type="hidden" name="perfil_usuario"
                                                        value="{{ $linha->perfil_usuario }}">
                                                    <input type="hidden" name="status_usuario"
                                                        value="{{ $linha->status_usuario === 'ATIVO' ? 'INATIVO' : 'ATIVO' }}">
                                                    <button type="submit"
                                                        class="btn btn-sm {{ $linha->status_usuario === 'ATIVO' ? 'btn-secondary' : 'btn-success' }}"
                                                        title="{{ $linha->status_usuario === 'ATIVO' ? 'Desativar' : 'Ativar' }}">
                                                        <i
                                                            class="bi bi-toggle-{{ $linha->status_usuario === 'ATIVO' ? 'on' : 'off' }}"></i>
                                                    </button>
                                                </form>

                                                {{-- <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditar{{ $linha->id_usuario }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button> --}}

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modalExcluir{{ $linha->id_usuario }}">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        @include('admin.usuarios.modal.editar', ['linha' => $linha])

                                        <div class="modal fade" id="modalExcluir{{ $linha->id_usuario }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0 shadow">
                                                    <div class="modal-header bg-danger text-white border-0 py-3">
                                                        <h5 class="modal-title fw-bold">
                                                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                                            Confirmar Exclusão
                                                        </h5>
                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body p-4 text-center">
                                                        <p class="text-muted mb-2">Você tem certeza que deseja remover o
                                                            usuário:</p>
                                                        <h5 class="fw-bold text-dark mb-4">{{ $linha->nome_usuario }}</h5>
                                                        <div
                                                            class="alert alert-warning border-0 small text-start d-flex align-items-start mb-0">
                                                            <i
                                                                class="bi bi-info-circle-fill me-2 fs-5 mt-1 text-warning"></i>
                                                            <div><strong>Atenção:</strong> Esta ação é definitiva e não
                                                                poderá ser desfeita.</div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="modal-footer border-0 bg-light py-3 d-flex justify-content-between">
                                                        <button type="button" class="btn btn-secondary px-4"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                        <form
                                                            action="{{ route('admin.usuarios.destroy', $linha->id_usuario) }}"
                                                            method="POST" class="m-0">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger px-4 fw-bold">Sim,
                                                                Excluir</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Nenhum usuário cadastrado.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.usuarios.modal.criar')

    <script>
        setTimeout(function() {
            let el = document.getElementById('alerta-sucesso');
            if (el) el.style.display = 'none';
        }, 3000);
        setTimeout(function() {
            let el = document.getElementById('alerta-erro');
            if (el) el.style.display = 'none';
        }, 3000);
    </script>

@endsection
