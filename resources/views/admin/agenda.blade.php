
                  <div class="px-4 pt-5 my-5 text-center border-bottom">
                    <h2 class="display-5 fw-bold">Agenda</h2>
                    <div class="col-lg-6 mx-auto">
                      <p class="lead mb-4">
                      </p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgendaAdd">
                        Adicionar
                      </button>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Link Youtube</th>
                            <th scope="col">Data Podcast</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody id="get-agenda-table">
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="modal fade" id="modalAgendaAdd" tabindex="-1" aria-labelledby="modalAgendaAddLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Adicionar na Agenda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form enctype="multipart/form-data" method="POST" id="formSubmitAddAgenda">
                          <div class="modal-body">
                            <div class="mb-3">
                                <label for="AgendaAddInputTitulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="AgendaAddInputTitulo" name="titulo" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaAddInputDescricao" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="AgendaAddInputDescricao" name="descricao" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaAddInputLink_youtube" class="form-label">Link do Youtube</label>
                                <input type="text" class="form-control" id="AgendaAddInputLink_youtube" name="link_youtube" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaAddInputDataPodcast" class="form-label">Data Podcast</label>
                                <input type="datetime-local" class="form-control" id="AgendaAddInputDataPodcast" name="dt_podcast" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaAddInputImagem" class="form-label">Imagem</label>
                                <input type="file" class="form-control" id="AgendaAddInputImagem" name="imagem" value="">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modalAgendaEditar" tabindex="-1" aria-labelledby="modalAgendaEditarLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Editar Agenda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" id="formSubmitEdtAgenda">
                          <div class="modal-body">
                            <input type="hidden" id="AgendaEdtInputId" name="id" value="">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                              <label for="AgendaEdtInputTitulo" class="form-label">Titulo</label>
                              <input type="text" class="form-control" id="AgendaEdtInputTitulo" name="titulo">
                            </div>
                            <div class="mb-3">
                              <label for="AgendaEdtInputDescricao" class="form-label">Descricao</label>
                              <input type="text" class="form-control" id="AgendaEdtInputDescricao" name="descricao">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaEdtInputLink_youtube" class="form-label">Link_youtube</label>
                                <input type="text" class="form-control" id="AgendaEdtInputLink_youtube" name="link_youtube">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaEdtInputDataPodcast" class="form-label">Data Podcast</label>
                                <input type="datetime-local" class="form-control" id="AgendaEdtInputDataPodcast" name="dt_podcast" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaEdtInputImagem" class="form-label">Imagem</label>
                                <input type="file" class="form-control" id="AgendaEdtInputImagem" name="imagem" value="">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modalAgendaDeletar" tabindex="-1" aria-labelledby="modalAgendaDeletarLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Deletar Agendauração</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method='POST' id="formSubmitDeleteAgenda">
                          <input type="hidden" id="AgendaDeleteInputId" name="id" value="">
                          <input type="hidden" name="_method" value="DELETE">
                          <div class="modal-body">
                            <h5>Deseja Deletar o Registro <span id="AgendaDeleteInputTitulo"> ?</span></h5>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Deletar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>