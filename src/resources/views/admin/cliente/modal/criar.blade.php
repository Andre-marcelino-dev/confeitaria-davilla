{{-- MODAL NOVO CLIENTE --}}
<div class="modal fade" id="modalNovoCliente" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Novo Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.cliente.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">

                        {{-- Foto do Cliente --}}
                        <div class="col-12">
                            <div class="row align-items-center bg-light p-3 border rounded mb-2">
                                <div class="col-md-2 text-center mb-2 mb-md-0">
                                    <div class="avatar-preview d-flex align-items-center justify-content-center border rounded bg-white"
                                        style="width: 70px; height: 70px; margin: 0 auto;">
                                        <i class="bi bi-person text-secondary" style="font-size: 2rem;"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="form-label fw-bold">Foto do Cliente</label>
                                    <input type="file" class="form-control" name="foto_cliente" accept="image/*">
                                    <div class="form-text">Formatos permitidos: JPG, JPEG, PNG ou WEBP. Máx: 2MB.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">Nome do Cliente <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nome_cliente" required maxlength="50"
                                placeholder="Nome Completo">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Tipo <span class="text-danger">*</span></label>
                            <select class="form-select" name="tipo_cliente" required>
                                <option value="PF" selected>Pessoa Física (PF)</option>
                                <option value="PJ">Pessoa Jurídica (PJ)</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">CPF / CNPJ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="cpf_cnpj_cliente" required maxlength="18"
                                placeholder="Apenas números">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nasc_cliente">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email_cliente" maxlength="80"
                                placeholder="exemplo@email.com">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Telefone / Celular</label>
                            <input type="text" class="form-control" name="telefone_cliente" maxlength="14"
                                placeholder="(00) 00000-0000">
                        </div>

                            {{-- Senha --}}
                            <div class="col-6 mb-3">
                                <label class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha_cliente" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Confirmar Senha</label>
                                <input type="password" class="form-control" name="senha_cliente_confirmation" required>
                            </div>

                        <hr class="text-muted my-2">
                        <h6>Endereço</h6>

                        <div class="col-md-4">
                            <label class="form-label">CEP</label>
                            <input type="text" class="form-control" name="cep_cliente" maxlength="9"
                                placeholder="00000-000">
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="endereco_cliente" maxlength="40"
                                placeholder="Rua, Av, etc.">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Número</label>
                            <input type="text" class="form-control" name="numero_cliente" maxlength="6"
                                placeholder="Nº">
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">Complemento</label>
                            <input type="text" class="form-control" name="complemento_cliente" maxlength="50"
                                placeholder="Apto, Bloco, etc.">
                        </div>

                        <div class="col-md-5">
                            <label class="form-label">Bairro</label>
                            <input type="text" class="form-control" name="bairro_cliente" maxlength="40"
                                placeholder="Bairro">
                        </div>

                        <div class="col-md-5">
                            <label class="form-label">Cidade</label>
                            <input type="text" class="form-control" name="cidade_cliente" maxlength="40"
                                placeholder="Cidade">
                        </div>

                        <div class="col-md-2">
                            <label class="form-label">UF</label>
                            <input type="text" class="form-control" name="uf_cliente" maxlength="2"
                                placeholder="SP">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>