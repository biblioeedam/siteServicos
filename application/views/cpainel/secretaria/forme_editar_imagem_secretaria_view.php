<div class="row col-lg-12">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("cpainel/") ?>">cpainel</a></li>
        <li><a href="<?php echo base_url("cpainel/secretaria") ?>">Secretaria</a></li>
        <li class="active">Alterar Texto</li>       
    </ol>
    <div class="col-lg-8">
        <form class="form-horizontal" action="<?php echo base_url("cpainel/secretaria/salvar_imagem_secretaria"); ?>" method="post" enctype="multipart/form-data" role="form">
            <input type="hidden" name="id_secretaria" value="<?php echo $id_secretaria; ?>"/>
            <div class="form-group">
                <label for="titulo" class="col-sm-2 control-label">Texto</label>
                <div class="col-sm-10">
                    <input name="imagem_secretaria" type="file" class="form-control" id="texto_secretaria" />
                    <span class="text-danger"><?php echo $error ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-8 col-sm-4">
                    <a href="<?php echo base_url("cpainel/secretaria"); ?>" class="btn btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-primary"> Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>