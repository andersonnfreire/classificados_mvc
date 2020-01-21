<div class="container">
    <h1>Meus Anúncios</h1>
    <a href="<?php echo BASE_URL;?>anuncio/adicionarAnuncio" class="btn btn-info">Adicionar Anúncio</a>

    <table class="table table-striped">
        <thead>

            <tr>
                <th>Foto</th>
                <th>Titulo</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php

        foreach ($anuncios as $anuncio):
            ?>
            <tr>
                <td>
                    <?php if (!empty($anuncio['url'])): ?>
                    <img src="<?php echo BASE_URL;?>assets/images/anuncios/<?php echo $anuncio['url']; ?>" 
                             border="0" height="75"/>
                         <?php else: ?>
                        <img src="<?php echo BASE_URL;?>assets/images/default.jpg" height="75" border="0"/>
                    <?php endif; ?>
                </td>
                <td><?php echo $anuncio['titulo']; ?></td>
                <td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
                <td>
                    <a href="editar-anuncio.php?id=<?php echo $anuncio['id']; ?>"><i class="material-icons">
                            edit
                        </i></a>
                    <a href="excluir-anuncio.php?id=<?php echo $anuncio['id']; ?>"><i class="material-icons">
                            delete
                        </i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

