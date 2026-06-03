@extends('layout.admin')

@section('title', $usuario->nome_usuario . ' | Perfil')
@section('pg-titulo', 'Perfil do Usuário')
@section('link-topo', 'Usuários')

@section('content')

<div class="app-content">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm">

                    {{-- Cabeçalho com foto --}}
                    <div class="card-body text-center py-5"
                        style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); border-radius: .375rem .375rem 0 0;">

                        @if ($usuario->foto_usuario && $usuario->foto_usuario !== 'default.png')
                            <img src="{{ asset('dash/assets/img/' . $usuario->foto_usuario) }}"
                                width="120" height="120"
                                style="object-fit: cover; border-radius: 50%; border: 4px solid #fff;">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($usuario->nome_usuario) }}&background=random&size=120&rounded=true"
                                width="120" height="120"
                                style="border-radius: 50%; border: 4px solid #fff;">
                        @endif

                        <h3 class="mt-3 mb-1 text-white fw-bold">{{ $usuario->nome_usuario }}</h3>

                        @php
                            $cores = [
                                'Administrador' => 'text-bg-danger',
                                'GERENTE'       => 'text-bg-warning',
                                'CONFEITEIRO'   => 'text-bg-primary',
                                'ATENDENTE'     => 'text-bg-info',
                                'CAIXA'         => 'text-bg-dark',
                            ];
                            $cor = $cores[$usuario->perfil_usuario] ?? 'text-bg-secondary';
                        @endphp
                        <span class="badge {{ $cor }} fs-6 px-3 py-2">{{ $usuario->perfil_usuario }}</span>
                    </div>

                    {{-- Informações --}}
                    <div class="card-body px-4 py-4">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3 p-3 bg-light rounded">
                                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle text-white"
                                        style="width: 42px; height: 42px; min-width: 42px;">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">Nome</div>
                                        <div class="fw-semibold">{{ $usuario->nome_usuario }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3 p-3 bg-light rounded">
                                    <div class="d-flex align-items-center justify-content-center bg-info rounded-circle text-white"
                                        style="width: 42px; height: 42px; min-width: 42px;">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">E-mail</div>
                                        <div class="fw-semibold">{{ $usuario->email_usuario }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3 p-3 bg-light rounded">
                                    <div class="d-flex align-items-center justify-content-center bg-success rounded-circle text-white"
                                        style="width: 42px; height: 42px; min-width: 42px;">
                                        <i class="bi bi-shield-check-fill"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">Status</div>
                                        <div>
                                            @if ($usuario->status_usuario === 'ATIVO')
                                                <span class="badge text-bg-success">Ativo</span>
                                            @else
                                                <span class="badge text-bg-secondary">Inativo</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3 p-3 bg-light rounded">
                                    <div class="d-flex align-items-center justify-content-center bg-warning rounded-circle text-white"
                                        style="width: 42px; height: 42px; min-width: 42px;">
                                        <i class="bi bi-briefcase-fill"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">Perfil de Acesso</div>
                                        <div class="fw-semibold">{{ $usuario->perfil_usuario }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3 p-3 bg-light rounded">
                                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-circle text-white"
                                        style="width: 42px; height: 42px; min-width: 42px;">
                                        <i class="bi bi-calendar-plus-fill"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">Criado em</div>
                                        <div class="fw-semibold">
                                            {{ \Carbon\Carbon::parse($usuario->criado_em_usuario)->format('d/m/Y \à\s H:i') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3 p-3 bg-light rounded">
                                    <div class="d-flex align-items-center justify-content-center bg-danger rounded-circle text-white"
                                        style="width: 42px; height: 42px; min-width: 42px;">
                                        <i class="bi bi-calendar-check-fill"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">Atualizado em</div>
                                        <div class="fw-semibold">
                                            {{ \Carbon\Carbon::parse($usuario->atualizado_em_usuario)->format('d/m/Y \à\s H:i') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Rodapé com botões --}}
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Voltar
                        </a>
                        <button type="button" class="btn btn-warning"
                            data-bs-toggle="modal" data-bs-target="#modalEditar{{ $usuario->id_usuario }}">
                            <i class="bi bi-pencil-square"></i> Editar
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

{{-- Reutiliza o modal de editar --}}
@include('admin.usuarios.modal.editar', ['linha' => $usuario])

@endsection
