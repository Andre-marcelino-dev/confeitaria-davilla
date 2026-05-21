@extends('layout.admin')

@section('title', 'Produto | Confeitaria Dashboard')

@section('pg-titulo', 'Produto')

@section('link-topo', 'Produto')

@section('content')

<div class="app-content">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Gerenciamento de Produtos</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalNovaCategoria">
              <i class="bi bi-plus-circle"></i>
              Novo Produto
            </button>
          </div>
        </div>
        <!-- /.card-header -->
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

              @forelse(  $listaProduto as $linha)
              <tr class="align-middle">

                <td><img src="{{ asset('davilla/images/'. $linha->foto_produto) }}" width="80"></td>
                <td>{{ $linha->nome_produto }}</td>
                <td>{{ $linha->descricao_produto  }}</td>
                <td>
                  @if($linha->status_produto === 'ATIVO')
                  <span class="badge text-bg-success">Ativo</span>
                  @else
                  <span class="badge text-bg-danger">Desativar</span>
                  @endif
                </td>

                <td>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditarCategoria{{ $linha->id_produto }}">
                    <i class="bi bi-pencil"></i>
                  </button>

                  <button type="button" class="btn btn-danger">
                    <i class="bi bi-trash3"></i>
                  </button>

                </td>
              </tr>
              @empty
              <tr>
                <td>Nenhuma produto cadastrada</td>
              </tr>
              @endforelse

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>


    </div>
  </div>
</div>


@include('admin.produto.modal.criar')

@endsection