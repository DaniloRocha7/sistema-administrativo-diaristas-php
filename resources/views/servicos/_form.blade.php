@csrf

<div class="card">
    <div class="card-body">
        <fieldset>
            <legend>Identificação</legend>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input
                            value="{{ old('nome', $servico->nome  ?? '' )}}"
                            type ="input"
                            class="form-control"
                            name="nome"
                            id="nome"
                            required
                            placeholder="Nome do serviço">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="icone">Ícone</label>
                        <select name="icone" id="icone" class="form-control">
                            <option value="">Seleciona o ícone</option>
                            <option value="twf-cleaning-1" {{ old('icone', $servico->icone ?? '') ===  'twf-cleaning-1' ? 'selected' : ''}}>Ícone 1</option>
                            <option value="twf-cleaning-2" {{ old('icone', $servico->icone ?? '') ===  'twf-cleaning-2' ? 'selected' : ''}}>Ícone 2</option>
                            <option value="twf-cleaning-3" {{ old('icone', $servico->icone ?? '') ===  'twf-cleaning-3' ? 'selected' : ''}}>Ícone 3</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="posicao">Posição na plataforma</label>
                        <input
                            value="{{ old('posicao', $servico->posicao ?? '') }}"
                            type ="input"
                            class="form-control"
                            name="posicao"
                            data-mask="00"
                            id="posicao"
                            required
                            placeholder="Posição de serviço na plataforma">
                    </div>
                </div>
            </div>
        </fieldset>

        <br>

        <fieldset>
            <legend>Globais</legend>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_minimo">Valor Mínimo</label>
                        <input
                            value="{{ old('valor_minimo', $servico->valor_minimo ?? '') }}"
                            type="input"
                            class="form-control"
                            name="valor_minimo"
                            id="valor_minimo"
                            data-mask="#.##0,00"
                            data-mask-reverse="true"
                            required
                            placeholder="Valor mínimo do serviço">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantidade_horas">Quantidade Mínima de Horas</label>
                        <input
                            value="{{ old('quantidade_horas', $servico->quantidade_horas ?? '') }}"
                            type="input"
                            class="form-control"
                            name="quantidade_horas"
                            id="quantidade_horas"
                            data-mask="0"
                            required
                            placeholder="Quantidade mínima de horas">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="porcentagem">Porcentagem de Comissão</label>
                        <input
                            value="{{ old('porcentagem', $servico->porcentagem ?? '') }}"
                            type="input"
                            class="form-control"
                            name="porcentagem"
                            id="porcentagem"
                            data-mask="00"
                            required
                            placeholder="Porcentagem de comissão no serviço">
                    </div>
                </div>
            </div>
        </fieldset>

        <br>

        <fieldset>
            <legend>Cômodos</legend>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor_quarto">Valor por Quarto</label>
                        <input
                            value="{{ old('valor_quarto', $servico->valor_quarto ?? '') }}"
                            type="input"
                            class="form-control"
                            name="valor_quarto"
                            id="valor_quarto"
                            data-mask="#.##0,00"
                            data-mask-reverse="true"
                            required
                            placeholder="Valor por quarto">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horas_quarto">Quantidade de Horas por Quarto</label>
                        <input
                            value="{{ old('horas_quarto', $servico->horas_quarto ?? '') }}"
                            type="input"
                            class="form-control"
                            name="horas_quarto"
                            id="horas_quarto"
                            data-mask="0"
                            required
                            placeholder="Quantidade de horas por quarto">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor_sala">Valor por Sala</label>
                        <input
                            value="{{ old('valor_sala', $servico->valor_sala ?? '' )}}"
                            type="input"
                            class="form-control"
                            name="valor_sala"
                            id="valor_sala"
                            data-mask="#.##0,00"
                            data-mask-reverse="true"
                            required
                            placeholder="Valor por sala">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horas_sala">Quantidade de Horas por Sala</label>
                        <input
                            value="{{ old('horas_sala', $servico->horas_sala ?? '') }}"
                            type="input"
                            class="form-control"
                            name="horas_sala"
                            id="horas_sala"
                            data-mask="0"
                            required
                            placeholder="Quantidade de horas por sala">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor_banheiro">Valor por Banheiro</label>
                        <input
                            value="{{ old('valor_banheiro', $servico->valor_banheiro ?? '') }}"
                            type="input"
                            class="form-control"
                            name="valor_banheiro"
                            id="valor_banheiro"
                            data-mask="#.##0,00"
                            data-mask-reverse="true"
                            required
                            placeholder="Valor por banheiro">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horas_banheiro">Quantidade de Horas por Banheiro</label>
                        <input
                            value="{{ old('horas_banheiro', $servico->horas_banheiro ?? '') }}"
                            type="input"
                            class="form-control"
                            name="horas_banheiro"
                            id="horas_banheiro"
                            data-mask="0"
                            required
                            placeholder="Quantidade de horas por banheiro">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor_cozinha">Valor por Cozinha</label>
                        <input
                            value="{{ old('valor_cozinha', $servico->valor_cozinha ?? '') }}"
                            type="input"
                            class="form-control"
                            name="valor_cozinha"
                            id="valor_cozinha"
                            data-mask="#.##0,00"
                            data-mask-reverse="true"
                            required
                            placeholder="Valor por cozinha">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horas_cozinha">Quantidade de Horas por Cozinha</label>
                        <input
                            value="{{ old('horas_cozinha', $servico->horas_cozinha ?? '') }}"
                            type="input"
                            class="form-control"
                            name="horas_cozinha"
                            id="horas_cozinha"
                            data-mask="0"
                            required
                            placeholder="Quantidade de horas por cozinha">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor_quintal">Valor por Quintal</label>
                        <input
                            value="{{ old('valor_quintal', $servico->valor_quintal ?? '') }}"
                            type="input"
                            class="form-control"
                            name="valor_quintal"
                            id="valor_quintal"
                            data-mask="#.##0,00"
                            data-mask-reverse="true"
                            required
                            placeholder="Valor por quintal">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horas_quintal">Quantidade de Horas por Quintal</label>
                        <input
                            value="{{ old('horas_quintal', $servico->horas_quintal ?? '' ) }}"
                            type="input"
                            class="form-control"
                            name="horas_quintal"
                            id="horas_quintal"
                            data-mask="0"
                            required
                            placeholder="Quantidade de horas por quintal">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor_outros">Valor por Outros Tipos de Cômodos</label>
                        <input
                            value="{{ old('valor_outros', $servico->valor_outros ?? '') }}"
                            type="input"
                            class="form-control"
                            name="valor_outros"
                            id="valor_outros"
                            data-mask="#.##0,00"
                            data-mask-reverse="true"
                            required
                            placeholder="Valor por outros tipos de cômodos">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horas_outros">Quantidade de Horas por Outros Tipos de Cômodos</label>
                        <input
                            value="{{ old( 'horas_outros', $servico->horas_outros ?? '' )}}"
                            type="input"
                            class="form-control"
                            name="horas_outros"
                            id="horas_outros"
                            data-mask="0"
                            required
                            placeholder="Quantidade de horas por outros tipos de cômodos">
                    </div>
                </div>
            </div>
        </fieldset>

        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>
