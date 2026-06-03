@extends('layout.admin')

@section('content')
<div class="app-content">
  <div class="container-fluid py-4">

    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show mb-4">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    @endif

    @php
      $fotoUser = $usuario->foto_usuario
          ? asset('dash/assets/img/user/' . $usuario->foto_usuario)
          : asset('dash/assets/img/user/user.png');
    @endphp

    <form action="{{ route('admin.perfil.update') }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="row g-4">

        {{-- Card lateral com foto --}}
        <div class="col-md-4 col-lg-3">
          <div class="card border-0 shadow-sm text-center p-4">
            <div class="mb-3">
              <img src="{{ $fotoUser }}" id="preview-foto"
                   class="rounded-circle border border-3"
                   style="width:100px; height:100px; object-fit:cover;">
            </div>
            <h6 class="fw-semibold mb-0">{{ $usuario->nome_usuario }}</h6>
            <p class="text-muted small mb-3">{{ $usuario->perfil_usuario }}</p>
            <label class="btn btn-outline-secondary btn-sm w-100">
              <i class="bi bi-camera me-1"></i> Trocar foto
              <input type="file" name="foto_usuario" class="d-none" accept="image/*"
                     onchange="previewFoto(this)">
            </label>
            @error('foto_usuario')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        {{-- Card de formulário --}}
        <div class="col-md-8 col-lg-9">
          <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent border-bottom py-3">
              <h6 class="mb-0 fw-semibold text-uppercase text-muted" style="font-size:12px; letter-spacing:.05em;">
                Editar informações
              </h6>
            </div>
            <div class="card-body p-4">

              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Nome completo</label>
                  <input type="text" name="nome_usuario" class="form-control @error('nome_usuario') is-invalid @enderror"
                         value="{{ old('nome_usuario', $usuario->nome_usuario) }}">
                  @error('nome_usuario') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Email</label>
                  <input type="email" name="email_usuario" class="form-control @error('email_usuario') is-invalid @enderror"
                         value="{{ old('email_usuario', $usuario->email_usuario) }}">
                  @error('email_usuario') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Perfil</label>
                  <input type="text" name="perfil_usuario" class="form-control @error('perfil_usuario') is-invalid @enderror"
                         value="{{ old('perfil_usuario', $usuario->perfil_usuario) }}">
                  @error('perfil_usuario') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Status</label>
                  <select name="status_usuario" class="form-select @error('status_usuario') is-invalid @enderror">
                    <option value="ATIVO" {{ $usuario->status_usuario === 'ATIVO' ? 'selected' : '' }}>Ativo</option>
                    <option value="INATIVO" {{ $usuario->status_usuario === 'INATIVO' ? 'selected' : '' }}>Inativo</option>
                  </select>
                  @error('status_usuario') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-12"><hr class="my-1"></div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Nova senha <span class="text-muted fw-normal">(deixe em branco para manter)</span></label>
                  <input type="password" name="senha_usuario" class="form-control @error('senha_usuario') is-invalid @enderror">
                  @error('senha_usuario') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Confirmar nova senha</label>
                  <input type="password" name="senha_usuario_confirmation" class="form-control">
                </div>
              </div>

            </div>
            <div class="card-footer bg-transparent border-top d-flex justify-content-end gap-2 py-3">
              <a href="{{ route('admin.dash') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
              <button type="submit" class="btn btn-primary btn-sm">
                <i class="bi bi-check-lg me-1"></i> Salvar alterações
              </button>
            </div>
          </div>
        </div>

      </div>
    </form>

  </div>
</div>

<script>
function previewFoto(input) {
  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = e => document.getElementById('preview-foto').src = e.target.result;
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
@endsection