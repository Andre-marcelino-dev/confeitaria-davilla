<!-- Modal Editar Produto -->
<div class="modal fade" id="modalEditarProduto" tabindex="-1" aria-labelledby="editarProdutoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProdutoLabel">Editar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" id="formEditarProduto" action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="row">
                            <div class="col-8 mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" id="edit_nome_produto" name="nome_produto" required>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label">Ordem</label>
                                <input type="number" class="form-control" id="edit_ordem_produto" name="ordem_produto" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" id="edit_slug_produto" name="slug_produto" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" id="edit_descricao_produto" name="descricao_produto" rows="3" required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label">Tamanho</label>
                                <select class="form-select" id="edit_tamanho_produto" name="tamanho_produto" required>
                                    <option value="">Selecione</option>
                                    <option value="Pequeno">Pequeno</option>
                                    <option value="Médio">Médio</option>
                                    <option value="Grande">Grande</option>
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label">Unid. Medida</label>
                                <select class="form-select" id="edit_unid_medida_produto" name="unid_medida_produto" required>
                                    <option value="">Selecione</option>
                                    <option value="CX">CX</option>
                                    <option value="FT">FT</option>
                                    <option value="ML">ML</option>
                                    <option value="UN">UN</option>
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label">Valor (R$)</label>
                                <input type="number" step="0.01" class="form-control" id="edit_valor_produto" name="valor_produto" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" id="edit_status_produto" name="status_produto" required>
                                    <option value="">Selecione</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="INATIVO">INATIVO</option>
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label">Destaque</label>
                                <select class="form-select" id="edit_destaque_produto" name="destaque_produto" required>
                                    <option value="">Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NÃO</option>
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label">Categoria</label>
                                <select class="form-select" id="edit_id_categoria" name="id_categoria" required>
                                    <option value="">Selecione</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id_categoria }}">{{ $categoria->nome_categoria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto atual</label><br>
                            <img id="edit_foto_atual" src="" width="80" class="mb-2 rounded">
                            <input type="file" class="form-control" name="foto_produto" accept="image/*">
                            <div class="form-text">Deixe em branco para manter a foto atual</div>
                        </div>

                        <div class="modal-footer mb-3 btn-modal">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('modalEditarProduto').addEventListener('show.bs.modal', function(event) {
        const btn = event.relatedTarget;

        document.getElementById('edit_nome_produto').value         = btn.getAttribute('data-nome');
        document.getElementById('edit_descricao_produto').value    = btn.getAttribute('data-descricao');
        document.getElementById('edit_slug_produto').value         = btn.getAttribute('data-slug');
        document.getElementById('edit_tamanho_produto').value      = btn.getAttribute('data-tamanho');
        document.getElementById('edit_unid_medida_produto').value  = btn.getAttribute('data-unidade');
        document.getElementById('edit_valor_produto').value        = btn.getAttribute('data-valor');
        document.getElementById('edit_status_produto').value       = btn.getAttribute('data-status');
        document.getElementById('edit_destaque_produto').value     = btn.getAttribute('data-destaque');
        document.getElementById('edit_id_categoria').value         = btn.getAttribute('data-categoria');
        document.getElementById('edit_ordem_produto').value        = btn.getAttribute('data-ordem');
        document.getElementById('edit_foto_atual').src             = btn.getAttribute('data-foto');

        const id = btn.getAttribute('data-id');
        document.getElementById('formEditarProduto').action = '/admin/produto/' + id;
    });
</script>