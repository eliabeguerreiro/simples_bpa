

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivenciar - Espaço Terapêutico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="vivenciar_logov2.png" alt="Logo Vivenciar">
        </div>
        <nav>
            <ul>
                <li><a href="pacientes.php">Pacientes</a></li>
                <li><a href="profissionais.php">Profissionais</a></li>

            </ul>
        </nav>
    </header>

<!-- Seção de Novo Atendimento -->
<section class="new-appointment">
    <h2>Novo Atendimento BPA-I</h2>
    <form action="" method="POST">
        <!-- Dados Básicos -->
        <div class="form-row">
            <div class="form-group">
                <label for="competencia">Competência (AAAAMM)</label>
                <div class="input-with-button">
                    <input type="text" id="competencia" name="competencia" required 
                           pattern="\d{6}" title="Formato: AAAAMM" >
                    <button type="button" class="btn-mes-atual" onclick="document.getElementById('competencia').value='<?= date('Ym') ?>'">
                        Usar mês atual
                    </button>
                </div>
            </div>
            
            <div class="form-group">
                <label for="data_atendimento">Data do Atendimento</label>
                <input type="date" id="data_atendimento" name="data_atendimento" required>
            </div>
        </div>

    
    <!-- Dados do Profissional e Procedimento -->
    <div class="form-row form-row-horizontal">
        <div class="form-group">
            <label for="profissional">Profissional</label>
            <select id="profissional" name="profissional_id" required>
                <option value="">Selecione</option>
                <option value=""></option>
            </select>
        </div>

        <div class="form-group">
            <label for="procedimento">Procedimento</label>
            <select id="procedimento" name="procedimento_id" required>
                <option value="">Selecione</option>
                <option value=""></option>
            </select>
        </div>
    </div>

        <!-- Dados do Paciente -->
        <div class="form-group">
            <label for="paciente">Paciente</label>
            <select id="paciente" name="paciente_id" required>
                <option value="">Selecione</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Informações Complementares -->
        <div class="form-row">
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" id="quantidade" name="quantidade" min="1" value="1" required>
            </div>
            <br>
            <div class="form-group">
                <label for="cid">CID-10 (Opcional)</label>
                <input type="text" id="cid" name="cid" maxlength="4" placeholder="Ex: F800">
            </div>
            <br>
            <!--div class="form-group">
                <label for="caracter_atendimento">Característica do Atendimento</label>
                <input type="text" id="caracter_atendimento" name="caracter_atendimento" maxlength="2">
            </div-->
        </div>

        <!-- Botão de envio -->
        <button type="submit" class="btn-add">Inserir Atendimento</button>
    </form>
</section>

   <!-- Seção de Atendimentos Registrados -->
<section class="appointments">
    <h2>Atendimentos Registrados</h2>
    
<!-- Filtros -->
<div class="filtros">
    <form method="GET" action="">
        <div class="form-group">
            <button type="submit" class="btn-filter">Filtrar</button>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="filtro_competencia">Competência:</label>
                <input type="text" id="filtro_competencia" name="competencia" 
                    placeholder="AAAAMM" pattern="\d{6}" value="<?= htmlspecialchars($filtros['competencia']) ?>">
            </div>
        </div>
    </form>
</div>
    
   <!-- Tabela de atendimentos -->
<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Paciente</th>
            <th>Profissional</th>
            <th>Procedimento</th>
            <th>Quantidade</th>
            <th>Competência</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>    
    </tbody>
</table>
    
    <!-- Botão para gerar arquivo BPA-I -->
    <form action="gerar_bpai.php" method="POST" style="margin-top: 20px;">
        <input type="hidden" name="competencia" value="<?= htmlspecialchars($filtros['competencia']) ?>">
        <input type="hidden" name="data_inicio" value="<?= htmlspecialchars($filtros['data_inicio']) ?>">
        <input type="hidden" name="data_fim" value="<?= htmlspecialchars($filtros['data_fim']) ?>">
        <button type="submit" class="btn-generate">Gerar Arquivo BPA-I</button>
    </form>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Formatação automática da competência
    const competenciaInput = document.getElementById('competencia');
    
    competenciaInput.addEventListener('input', function(e) {
        let value = this.value.replace(/\D/g, '');
        this.value = value.substring(0, 6);
    });
});


</script>
</body>
</html>