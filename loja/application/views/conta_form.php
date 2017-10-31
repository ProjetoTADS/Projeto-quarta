
<legend>
{ACAO}
</legend>
<form action="{ACAOFORM}" method="post">
	<div class="container">
		<div class="form-group">
			<label for="nomecomprador">Nome <span class="required">*</span>:</label>
		    <input type="text" id="nomecomprador" class="form-control" name="nomecomprador" value="{nomecomprador}" required="required">

		</div>
		<div class="form-group">
			<label class=" for="cpfcomprador">CPF <span class="required">*</span>:</label>
		    <input type="text" class="form-control mask-cpf" id="cpfcomprador" name="cpfcomprador" value="{cpfcomprador}" required="required">
		</div>
		<div class="form-group">
			<label for="cepcomprador">CEP <span class="required">*</span>:</label>
		    <input type="text" class="form-control mask-cep busca-cep" id="cepcomprador" name="cepcomprador" value="{cepcomprador}" required="required">
		</div>
		<div class="form-group">
			<label for="enderecocomprador">Endereço <span class="required">*</span>:</label>
		
		    <input type="text" id="enderecocomprador" class="form-control" name="enderecocomprador" value="{enderecocomprador}" required="required">
		</div>
		<div class="form-group">
			<label for="cidadecomprador">Cidade <span class="required">*</span>:</label>
		    <input type="text" id="cidadecomprador"  class="form-control" name="cidadecomprador" value="{cidadecomprador}" required="required">
		    </div>
		</div>
	</div>
	<div class="container">
		<div class="form-group">
			<label for="ufcomprador">UF <span class="required">*</span>:</label>
	    	<select name="ufcomprador" id="ufcomprador" class="form-control">
		    	<option value="AC" {ufcomprador_AC}>AC</option>
		    	<option value="AL" {ufcomprador_AL}>AL</option>
		    	<option value="AP" {ufcomprador_AP}>AP</option>
		    	<option value="AM" {ufcomprador_AM}>AM</option>
		    	<option value="BA" {ufcomprador_BA}>BA</option>
		    	<option value="CE" {ufcomprador_CE}>CE</option>
		    	<option value="DF" {ufcomprador_DF}>DF</option>
		    	<option value="ES" {ufcomprador_ES}>ES</option>
		    	<option value="GO" {ufcomprador_GO}>GO</option>
		    	<option value="MA" {ufcomprador_MA}>MA</option>
		    	<option value="MT" {ufcomprador_MT}>MT</option>
		    	<option value="MS" {ufcomprador_MS}>MS</option>
		    	<option value="MG" {ufcomprador_MG}>MG</option>
		    	<option value="PA" {ufcomprador_PA}>PA</option>
		    	<option value="PB" {ufcomprador_PB}>PB</option>
		    	<option value="PR" {ufcomprador_PR}>PR</option>
		    	<option value="PE" {ufcomprador_PE}>PE</option>
		    	<option value="PI" {ufcomprador_PI}>PI</option>
		    	<option value="RJ" {ufcomprador_RJ}>RJ</option>
		    	<option value="RN" {ufcomprador_RN}>RN</option>
		    	<option value="RS" {ufcomprador_RS}>RS</option>
		    	<option value="RO" {ufcomprador_RO}>RO</option>
		    	<option value="RR" {ufcomprador_RR}>RR</option>
		    	<option value="SC" {ufcomprador_SC}>SC</option>
		    	<option value="SP" {ufcomprador_SP}>SP</option>
		    	<option value="SE" {ufcomprador_SE}>SE</option>
		    	<option value="TO" {ufcomprador_TO}>TO</option>
	    	</select>
		</div>
	</div>
	<div class="container">
		<div class="form-group">
			<label for="emailcomprador">Email <span class="required">*</span>:</label>
		    <input type="text" id="emailcomprador" class="form-control" name="emailcomprador" value="{emailcomprador}" required="required">
		</div>
		<div class="form-group">
			<label for="telefonecomprador">Telefone:</label>
		    <input type="text" id="telefonecomprador" class="form-control" name="telefonecomprador" value="{telefonecomprador}">
		</div>
		<div class="form-group">
			<label for="sexocomprador">Sexo:</label>
			<div class="radio">
		    	<label><input type="radio" name="sexocomprador" id="sexocompradorM" value="M" {sexocomprador_M}> Masculino</label>
		    </div>
		    <div class="radio">	
		    	<label><input type="radio" name="sexocomprador" id="sexocompradorF" value="F" {sexocomprador_F}> Feminino</label>
		 	</div>
		</div>
		<div class="form-group">
			<label for="senhacomprador">Senha:</label>
		    <input type="password" class="form-control" id="senhacomprador" name="senhacomprador" value="{senhacomprador}">
		</div>
	  	<div>
			<button type="submit" class="btn btn-primary">Salvar</button>
		</div>
	</div>
</form>