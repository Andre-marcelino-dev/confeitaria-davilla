<div class="modal fade" id="modalEditar{{ $linha->id_usuario }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Usuário: {{ $linha->nome_usuario }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.usuarios.update', $linha->id_usuario) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">

                        <div class="col-12">
                            <div class="row align-items-center bg-light p-3 border rounded mb-2">
                                <div class="col-md-2 text-center mb-2 mb-md-0">
                                    @if ($linha->foto_usuario && $linha->foto_usuario !== 'default.png')
                                        <img src="{{ asset('dash/assets/img/' . $linha->foto_usuario) }}"
                                            width="70" height="70"
                                            style="object-fit: cover; border-radius: 50%;">
                                    @else
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($linha->nome_usuario) }}&background=random&size=70&rounded=true"
                                            width="70" height="70" style="border-radius: 50%;">
                                    @endif
                                </div>
                                <div class="col-md-10">
                                    <label class="form-label fw-bold">Alterar Foto</label>
                                    <input type="file" class="form-control" name="foto_usuario" accept="image/*">
                                    <div class="form-text">Deixe em branco para manter a foto atual.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">Nome <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nome_usuario"
                                required maxlength="255" value="{{ $linha->nome_usuario }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Perfil <span class="text-danger">*</span></label>
                            <select class="form-select" name="perfil_usuario" required>
                                @foreach (['ATENDENTE', 'GERENTE', 'CAIXA', 'CONFEITEIRO', 'Administrador'] as $perfil)
                                    <option value="{{ $perfil }}"
                                        {{ $linha->perfil_usuario === $perfil ? 'selected' : '' }}>
                                        {{ $perfil }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">E-mail <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email_usuario"
                                required maxlength="255" value="{{ $linha->email_usuario }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select" name="status_usuario" required>
                                <option value="ATIVO" {{ $linha->status_usuario === 'ATIVO' ? 'selected' : '' }}>Ativo</option>
                                <option value="INATIVO" {{ $linha->status_usuario === 'INATIVO' ? 'selected' : '' }}>Inativo</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Nova Senha</label>
                            <input type="password" class="form-control" name="senha_usuario"
                                minlength="6" placeholder="Deixe em branco para manter a atual">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Confirmar Nova Senha</label>
                            <input type="password" class="form-control" name="senha_usuario_confirmation"
                                minlength="6" placeholder="Repita a nova senha">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>
