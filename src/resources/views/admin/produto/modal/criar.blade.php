

<script>
    setTimeout(function() {
        const sucesso = document.getElementById('alerta-sucesso');
        const erro = document.getElementById('alerta-erro');
        if (sucesso) sucesso.style.display = 'none';
        if (erro) erro.style.display = 'none';
    }, 3000);
</script>

<!-- Modal Novo Produto -->
<div class="modal fade" id="modalNovoProduto" tabindex="-1" aria-labelledby="novoProdutoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novoProdutoLabel">Cadastro de Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('admin.produto.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="row">
                            <div class="col-8 mb-3">
                                <label for="nome_produto" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome_produto" name="nome_produto"
                                    aria-describedby="alerta-nome_produto" required>
                                <div id="alerta-nome_produto" class="form-text">Informe o nome do produto</div>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="ordem_produto" class="form-label">Ordem</label>
                                <input type="number" class="form-control" id="ordem_produto" name="ordem_produto" required>
                                <div class="form-text">Ordem de exibição</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="slug_produto" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug_produto" name="slug_produto"
                                aria-describedby="alerta-slug_produto" required>
                            <div id="alerta-slug_produto" class="form-text">Gerado automaticamente pelo nome</div>
                        </div>

                        <div class="mb-3">
                            <label for="descricao_produto" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao_produto" name="descricao_produto"
                                rows="3" required></textarea>
                            <div class="form-text">Descrição do produto</div>
                        </div>

                        <div class="row">
                            <div class="col-4 mb-3">
                                <label for="tamanho_produto" class="form-label">Tamanho</label>
                                <select class="form-select" id="tamanho_produto" name="tamanho_produto" required>
                                    <option value="">Selecione</option>
                                    <option value="Pequeno">Pequeno</option>
                                    <option value="Médio">Médio</option>
                                    <option value="Grande">Grande</option>
                                </select>
                                <div class="form-text">Tamanho do produto</div>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="unid_medida_produto" class="form-label">Unid. Medida</label>
                                <select class="form-select" id="unid_medida_produto" name="unid_medida_produto" required>
                                    <option value="">Selecione</option>
                                    <option value="CX">CX</option>
                                    <option value="FT">FT</option>
                                    <option value="ML">ML</option>
                                    <option value="UN">UN</option>
                                </select>
                                <div class="form-text">Unidade de medida</div>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="valor_produto" class="form-label">Valor (R$)</label>
                                <input type="number" step="0.01" class="form-control" id="valor_produto"
                                    name="valor_produto" required>
                                <div class="form-text">Valor do produto</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 mb-3">
                                <label for="status_produto" class="form-label">Status</label>
                                <select class="form-select" id="status_produto" name="status_produto" required>
                                    <option value="">Selecione</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="INATIVO">INATIVO</option>
                                </select>
                                <div class="form-text">Status do produto</div>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="destaque_produto" class="form-label">Destaque</label>
                                <select class="form-select" id="destaque_produto" name="destaque_produto" required>
                                    <option value="">Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NÃO</option>
                                </select>
                                <div class="form-text">Produto em destaque?</div>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="id_categoria" class="form-label">Categoria</label>
                                <select class="form-select" id="id_categoria" name="id_categoria" required>
                                    <option value="">Selecione</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id_categoria }}">{{ $categoria->nome_categoria }}</option>
                                    @endforeach
                                </select>
                                <div class="form-text">Categoria do produto</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="foto_produto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto_produto" name="foto_produto"
                                accept="image/*">
                            <div class="form-text">Selecione a foto do produto</div>
                        </div>

                        <div class="modal-footer mb-3 btn-modal">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar Produto</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>