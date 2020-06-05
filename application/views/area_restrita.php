<section style="min-height: calc(100vh - 83px)" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 text-center">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>ÁREA RESTRITA</h2>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-offset-5 col-lg-2 text-center">
				<div class="form-group">
					<a class="btn btn-link"><i class ="fa fa-user"></i></a>
					<a class="btn btn-link" href="Admin/logoff"><i class="fa fa-sign-out"></i></a>
				</div>					
			</div>
		</div>
	</div>

	<div class="container">
		<ul class="nav nav-tabs">
			<li class='active'><a href="#tab_eventos" role="tab" data-toggle="tab">Eventos e Projetos</a></li>
			<li><a href="#tab_time" role="tab" data-toggle="tab">Diretoria e Liderança</a></li>
			<li><a href="#tab_usuarios" role="tab" data-toggle="tab">Usuários</a></li>
	</div>

	<div class="tab-content">
		<div id="tab_eventos" class="tab-pane active">
			<div class="container-fluid">
				<h2 class="text-center"><strong>Gerenciar Projetos</strong></h2>
				<a id="btn_add_event" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;&nbsp;Adicionar Evento ou projeto</i></a>
				<table id="dt_event" class="table table-striped table-bordered">
					<thead>
						<tr class="tableheader">
							<th>Nome</th>
							<th>Imagem</th>
							<th>Data</th>
							<th>Descrição</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
		<div id="tab_time" class="tab-pane">
			<div class="container-fluid">
				<h2 class="text-center"><strong>Gerenciar Time</strong></h2>
				<a id="btn_add_member" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;&nbsp;Adicionar Novo Membro</i></a>
				<table id="dt_team" class="table table-striped table-bordered">
					<thead>
						<tr class="tableheader">
							<th>Nome</th>
							<th>Foto</th>
							<th>Descrição</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div></div>
		<div id="tab_usuarios" class="tab-pane">
		<div class="container-fluid">
				<h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
				<a id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;&nbsp;Adicionar Usuários</i></a>
				<table id="dt_users" class="table table-striped table-bordered">
					<thead>
						<tr class="tableheader">
							<th>Login</th>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<div id="modal_event" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Adicionar Evento ou Projeto</h4>
			</div>

			<div class="modal-body">
				<form id="form_event">
					<input name="event_id" hidden>

					<div class="form-group">
						<label class="col-lg-2 control-label">Nome</label>
						<div class="col-lg-10">
							<input id="event_name" name="event_name" class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Banner</label>
						<div class="col-lg-10">
							<img id="event_img_path" src="" style="max-height: 400px; max-height:400px">
							<label class="btn btn-block btn-info">
								<i class="fa fa-upload"></i>&nbsp;&nbsp;Importar imagem
								<input type="file" id="btn_upload_event_img" accept="image/*" style="display: none;">
							</label>
							<input id="event_img" style="width: 100%" name="event_img">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Data</label>
						<div class="col-lg-10">
							<input type="number" min="0" id="event_duration" name="event_duration" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Descrição</label>
						<div class="col-lg-10">
							<textarea id="event_description" name="event_description" class="form-control">
							</textarea>
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" id="btn_save_course" class="btn btn-primary">
							<i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
							</button>
							<span class="help-block"></span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="modal_member" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Membro</h4>
			</div>

			<div class="modal-body">
				<form id="form_member">
					<input name="member_id" hidden>

					<div class="form-group">
						<label class="col-lg-2 control-label">Nome</label>
						<div class="col-lg-10">
							<input id="member_name" name="member_name" class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Foto</label>
						<div class="col-lg-10">
							<img id="member_photo_path" src="" style="max-height: 400px; max-height:400px">
							<label class="btn btn-block btn-info">
								<i class="fa fa-upload"></i>&nbsp;&nbsp;Importar Foto
								<input type="file" id="btn_upload_member_photo" accept="image/*" style="display: none;">
							</label>
							<input id="member_photo" style="width: 100%" name="member_photo">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Descrição</label>
						<div class="col-lg-10">
							<textarea id="member_description" name="member_description" class="form-control">
							</textarea>
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" id="btn_save_member" class="btn btn-primary">
							<i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
							</button>
							<span class="help-block"></span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="modal_user" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Usuários</h4>
			</div>

			<div class="modal-body">
				<form id="form_user">
					<input name="user_id" hidden>

					<div class="form-group">
						<label class="col-lg-2 control-label">Login</label>
						<div class="col-lg-10">
							<input id="user_login" name="user_login" class="form-control" maxlength="30">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Nome Completo</label>
						<div class="col-lg-10">
							<input id="user_full_name" name="user_full_name" class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">E-mail</label>
						<div class="col-lg-10">
							<input id="user_email" name="user_email" class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Confirma E-mail</label>
						<div class="col-lg-10">
							<input id="user_email_confirm" name="user_email_confirm" class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Senha</label>
						<div class="col-lg-10">
							<input type="password" id="user_password" name="user_password" class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Confirmar Senha</label>
						<div class="col-lg-10">
							<input type="password" id="user_password_confirm" name="user_password_confirm" class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" id="btn_save_user" class="btn btn-primary">
							<i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
							</button>
							<span class="help-block"></span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

