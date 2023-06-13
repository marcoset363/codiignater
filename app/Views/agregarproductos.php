<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("ag.css")?>">
</head>
<body>
    <div class="agregarcontainer">
        <div class="agregarrow">
            <div class="agregarcol">
                <div class="agregarcard">
                    <div class="agregarcardheader">
                        <h5>Agregar Producto
                        <a href="<?php base_url('store')?>">Atras</a>
                        </h5>
                    </div>
                    <div class="cardbodyagregar">
                        <form action="<?php echo base_url("/formproduct");?>" method="POST" enctype="multipart/form-data">
                        <div class="rowagregar">
                        <div class="nombreagregar">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" required placeholder ="Nombre producto">
                        </div>
                        <div class="descripcionagregar">
                            <label>Descripcion</label>
                            <textarea type="text" name="descripcion" class="form-control" required placeholder ="Descripcion producto"></textarea>
                            
                        </div>
                        <div class="imgagregar">
                            <label>Imagen</label>
                            <input type="file" name="imagen" class="form-control" required>
                        </div>
                        <div class="precioagregar">
                            <label>Precio</label>
                            <input type="text" name="precio" class="form-control" required placeholder ="Precio producto">
                        </div>
                        <div class="botonagregar">
                            <hr>
                            <button type="submit" class="btn btn-primary px-4 float-end">Save</button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html