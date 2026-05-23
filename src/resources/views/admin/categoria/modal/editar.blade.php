<!-- Modal Editar Categoria -->
<div class="modal fade" id="modalEditarCategoria" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" id="formEditarCategoria" action="">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="edit_nome_categoria" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="edit_nome_categoria" name="nome_categoria" aria-describedby="alerta-edit-nome" Required>
                            <div id="alerta-edit-nome" class="form-text">
                                Informe o nome da categoria
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="edit_descricao_categoria" class="form-label">Descrição</label>
                            <textarea class="form-control textarea-xzycode" id="edit_descricao_categoria" rows="3" aria-describedby="alerta-edit-descricao" name="descricao_categoria" Required></textarea>
                            <div id="alerta-edit-descricao" class="form-text">
                                Descrição da categoria
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="edit_ordem_categoria" class="form-label">Ordem</label>
                                    <input type="number" class="form-control" id="edit_ordem_categoria" name="ordem_categoria" aria-describedby="alerta-edit-ordem" Required>
                                    <div id="alerta-edit-ordem" class="form-text">
                                        Informe a ordem da categoria
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="edit_status_categoria" class="form-label">Status</label>
                                    <select class="form-select" id="edit_status_categoria" aria-label="Selecione um status" name="status_categoria" Required>
                                        <option value="">Selecione uma opção</option>
                                        <option value="ATIVO">ATIVO</option>
                                        <option value="INATIVO">INATIVO</option>
                                    </select>
                                    <div class="form-text">
                                        Informe o status da categoria
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer mb-3 btn-modal">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Salvar Alterações</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

