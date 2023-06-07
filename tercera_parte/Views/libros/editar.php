<?php encabezado() ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row p-5">
                <form action="<?php echo base_url() ?>libros/modificar" method="post" id="frmLibros" class="row" autocomplete="off" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="titulo">Articulo</label>
                            <input type="hidden" name="id" value="<?php echo $data['libro']['id']; ?>">
                            <input id="titulo" class="form-control" type="text" name="titulo" value="<?php echo $data['libro']['titulo']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="autor">Marca</label>
                            <select id="autor" class="form-control" name="autor">
                                <?php foreach ($data['autores'] as $autor) { ?>
                                    <option <?php if ($autor['id'] == $data['libro']['id_autor']) {
                                                echo 'selected';
                                            } ?> value="<?php echo $autor['id']; ?>"><?php echo $autor['autor']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                   
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="materia">Color</label>
                            <select id="materia" class="form-control" name="materia">
                                <?php foreach ($data['materias'] as $materia) { ?>
                                    <option <?php if ($materia['id'] == $data['libro']['id_materia']) {
                                                echo 'selected';
                                            } ?> value="<?php echo $materia['id']; ?>"><?php echo $materia['materia']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input id="cantidad" class="form-control" type="text" name="cantidad" value="<?php echo $data['libro']['cantidad'] ?>">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Numero_serie">Númeroo de serie</label>
                            <input id="Numero_serie" class="form-control" type="text" name="Numero_serie" value="<?php echo $data['libro']['Numero_serie'] ?>">
                        </div>
                    </div>
                    
                   
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" rows="2"><?php echo $data['libro']['descripcion']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="imagen">Foto</label>
                            <input id="fototemp" type="hidden" name="foto" value="<?php echo $data['libro']['imagen']; ?>">
                            <input id="imagen" class="form-control" type="file" name="imagen">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="<?php echo base_url() . "Assets/images/libros/" . $data['libro']['imagen']; ?>" width="250">
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Modificar</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>libros">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php pie() ?>