<div class="container">
    <h1>Meus Anúncios - Editar Anúncio</h1>

    <form method="POST" enctype="multipart/form-data">
        <div>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" class="form-control">
                <?php
                foreach ($cats as $cat):
                    ?>
                    <option value="<?php echo $cat['id']; ?>" <?php echo ($info['id_categoria'] == $cat['id']) ? 'selected="selected"' : ''; ?>><?php echo utf8_encode($cat['nome']); ?></option>
                    <?php
                endforeach;
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" value="<?php echo $info['titulo']; ?>" id="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" value="<?php echo $info['valor']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" name="descricao"><?php echo $info['descricao']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado de Conservação:</label>
            <select name="estado" id="estado" class="form-control">
                <option value="1" <?php echo ($info['estado'] == '1') ? 'selected="selected"' : ''; ?>>Ruim</option>
                <option value="2" <?php echo ($info['estado'] == '2') ? 'selected="selected"' : ''; ?>>Bom</option>
                <option value="3" <?php echo ($info['estado'] == '3') ? 'selected="selected"' : ''; ?>>Ótimo</option>
            </select>
        </div>
        <div class="form-group">

            <label for="add_foto">Fotos do anúncio:</label>
            <input type="file" name="fotos[]" multiple class="form-control-file"/>
        </div>

        <div class="card" style="height: 350px">
            <div class="card-header">
                Fotos do Anúncio
            </div>
            <div class="card-body">
                
                 <?php foreach ($info['fotos'] as $ft): ?>
                        <div class="foto_item">
                            <img src="<?php echo BASE_URL;?>assets/images/anuncios/<?php echo $ft['url']; ?>" class="foto_item img" border="0" />
                            <a href="excluir-foto.php?id=<?php echo $ft['id']; ?>" class="btn btn-primary">Excluir Imagem</a>
                        </div>
                        
                <?php endforeach; ?>
                
            </div>
        </div><br>
        
        <div class="form-group">
            <input type="submit" value="Salvar" class="btn btn-dark">
        </div>

    </form>
</div>    

