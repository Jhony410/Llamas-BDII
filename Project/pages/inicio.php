<?php
include('../include/header.php');
?>


<?php
include('../conection.php');
$conexion = conection();

$sql = "SELECT * FROM product";
$query = mysqli_query($conexion, $sql);
?>
<div class="">

    <div class="d-flex justify-content-center w-100 mb-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Agregar nuevo producto</button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../controller/register_product.php" id="form_product" enctype="multipart/form-data"
                        method="POST">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="recipient-name" name="name_product">
                        </div>
                        <div class="mb-0">
                            <label for="message-text" class="col-form-label">Descripcion:</label>
                            <textarea class="form-control" id="message-text" name="description_product"></textarea>
                        </div>
                        <div class="mb-0">
                            <label for="recipient-precio" class="col-form-label">Precio:</label>
                            <input type="text" class="form-control" id="recipient-precio" name="price_product">
                        </div>
                        <div class="mb-0">
                            <label for="rec ipient-cantidad" class="col-form-label">Cantidad:</label>
                            <input type="text" class="form-control" id="recipient-cantidad" name="stock_product">
                        </div>
                        <div class="mb-0">
                            <label for="recipient-categoria" class="col-form-label">Cantegoria:</label>
                            <input type="text" class="form-control" id="recipient-categoria" name="category_product">
                        </div>
                        <div class="mb-0">
                            <label for="recipient-file" class="col-form-label">Imagen:</label>
                            <input type="file" class="form-control" id="recipient-file" name="img_product">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" name="btnregister">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">

        <?php
        while ($datos = $query->fetch_object()) {
            ?>

            <div class="col">
                <div class="card w-100 m-auto" style="max-width: 17rem;">
                    <img src="<?= $datos->img_product ?>" class="card-img-top" alt="Imagen de un producto">
                    <div class="card-body p-1">
                        <h5 class="card-title fs-6"><?= $datos->name_product ?> 😍</h5>
                        <div class="d-flex justify-content-between">
                            <span class="fs-7"><?= $datos->description_product ?></span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="fs-7"><?= $datos->price_product ?></span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="fs-7"><?= $datos->stock_product ?></span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="fs-7"><?= $datos->category_product ?></span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="fs-7"><?= $datos->fecha_product ?> </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-start border p-1 mt-2">

                            <button type="button" class="btn btn-warning btn-sm w-100 me-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2<?= $datos->id_product ?>"
                                data-bs-whatever="@mdo">Editar</button>
                            <a type="button" class="btn btn-danger btn-sm w-100" name="btnEliminar"
                                href="../controller/eliminar_product.php?id_pr=<?= $datos->id_product ?>&img_pr=<?= urlencode($datos->img_product) ?>">Eliminar</a>


                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="exampleModal2<?= $datos->id_product ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar producto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../controller/editar_product.php" enctype="multipart/form-data" method="POST"
                                id="product_form_editar">

                                <input type="hidden" class="form-control" id="recipient-id" name="id_product"
                                    value="<?= $datos->id_product ?>">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name-editar" name="name_product"
                                        value="<?= $datos->name_product ?>">
                                </div>
                                <div class="mb-0">
                                    <label for="message-text" class="col-form-label">Descripcion:</label>
                                    <textarea class="form-control" id="message-text-editar"
                                        name="description_product"><?= $datos->description_product ?></textarea>
                                </div>
                                <div class="mb-0">
                                    <label for="recipient-precio" class="col-form-label">Precio:</label>
                                    <input type="text" class="form-control" id="recipient-precio-editar"
                                        name="price_product" value="<?= $datos->price_product ?>">
                                </div>
                                <div class="mb-0">
                                    <label for="recipient-cantidad" class="col-form-label">Cantidad:</label>
                                    <input type="text" class="form-control" id="recipient-cantidad-editar"
                                        name="stock_product" value="<?= $datos->stock_product ?>">
                                </div>
                                <div class="mb-0">
                                    <label for="recipient-categoria" class="col-form-label">Cantegoria:</label>
                                    <input type="text" class="form-control" id="recipient-categoria-editar"
                                        name="category_product" value="<?= $datos->category_product ?>">
                                </div>
                                <div class="mb-0">
                                    <label for="recipient-file" class="col-form-label">Imagen:</label>
                                    <input type="file" class="form-control" id="recipient-file-editar" name="img_product"
                                        value="<?= $datos->img_product ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="btnEditar">Editar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>

    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

    document.getElementById('form_product').addEventListener('submit', function (e) {

        const name = document.getElementById('recipient-name').value.trim();
        const description = document.getElementById('message-text').value.trim();
        const price = document.getElementById('recipient-precio').value.trim();
        const quantity = document.getElementById('recipient-cantidad').value.trim();
        const category = document.getElementById('recipient-categoria').value.trim();
        const image = document.getElementById('recipient-file').value;

        const soloValidos = /^[a-zA-Z0-9\s.,áéíóúÁÉÍÓÚüÜñÑ()-]+$/;
        const sinInyeccionSQL = /^[^'"=;<>`%]+$/;

        function mostrarError(titulo, mensaje) {
            e.preventDefault();
            swal(titulo, mensaje, "error");
        }

        if (name === "" || !soloValidos.test(name) || !sinInyeccionSQL.test(name)) {
            return mostrarError("Nombre inválido", "El campo 'Name' está vacío o contiene caracteres no permitidos.");
        }

        if (description === "" || !soloValidos.test(description) || !sinInyeccionSQL.test(description)) {
            return mostrarError("Descripción inválida", "El campo 'Descripcion' está vacío o contiene caracteres no permitidos.");
        }

        if (price === "" || isNaN(price) || Number(price) <= 0 || !sinInyeccionSQL.test(price)) {
            return mostrarError("Precio inválido", "El precio debe ser un número positivo válido sin caracteres especiales.");
        }

        if (quantity === "" || isNaN(quantity) || Number(quantity) < 0 || !sinInyeccionSQL.test(quantity)) {
            return mostrarError("Cantidad inválida", "La cantidad debe ser un número no negativo sin caracteres especiales.");
        }

        if (category === "" || !soloValidos.test(category) || !sinInyeccionSQL.test(category)) {
            return mostrarError("Categoría inválida", "El campo 'Categoria' está vacío o contiene caracteres no permitidos.");
        }

        if (!image) {
            return mostrarError("Imagen requerida", "Debes subir una imagen del producto.");
        }
    });

    document.getElementById('product_form_editar').addEventListener('submit', function (e) {

        const name = document.getElementById('recipient-name-editar').value.trim();
        const description = document.getElementById('message-text-editar').value.trim();
        const price = document.getElementById('recipient-precio-editar').value.trim();
        const quantity = document.getElementById('recipient-cantidad-editar').value.trim();
        const category = document.getElementById('recipient-categoria-editar').value.trim();
        const image = document.getElementById('recipient-file-editar').value;

        const soloValidos = /^[a-zA-Z0-9\s.,áéíóúÁÉÍÓÚüÜñÑ()-]+$/;
        const sinInyeccionSQL = /^[^'"=;<>`%]+$/;

        function mostrarError(titulo, mensaje) {
            e.preventDefault();
            swal(titulo, mensaje, "error");
        }

        if (name === "" || !soloValidos.test(name) || !sinInyeccionSQL.test(name)) {
            return mostrarError("Nombre inválido", "El campo 'Name' está vacío o contiene caracteres no permitidos.");
        }

        if (description === "" || !soloValidos.test(description) || !sinInyeccionSQL.test(description)) {
            return mostrarError("Descripción inválida", "El campo 'Descripcion' está vacío o contiene caracteres no permitidos.");
        }

        if (price === "" || isNaN(price) || Number(price) <= 0 || !sinInyeccionSQL.test(price)) {
            return mostrarError("Precio inválido", "El precio debe ser un número positivo válido sin caracteres especiales.");
        }

        if (quantity === "" || isNaN(quantity) || Number(quantity) < 0 || !sinInyeccionSQL.test(quantity)) {
            return mostrarError("Cantidad inválida", "La cantidad debe ser un número no negativo sin caracteres especiales.");
        }

        if (category === "" || !soloValidos.test(category) || !sinInyeccionSQL.test(category)) {
            return mostrarError("Categoría inválida", "El campo 'Categoria' está vacío o contiene caracteres no permitidos.");
        }

        if (image && !/(\.jpg|\.jpeg|\.png|\.gif)$/i.test(image)) {
            return mostrarError("Imagen inválida", "Solo se permiten imágenes con extensiones .jpg, .jpeg, .png o .gif.");
        }
    });

</script>


<script>
    <?php if (isset($_GET['register']) && $_GET['register'] === 'yes'): ?>

        swal(':D', "Login valido", 'success').then(() => {
            window.history.replaceState({}, document.title, window.location.pathname);
        });

    <?php endif; ?>
    <?php if (isset($_GET['producto']) && $_GET['producto'] === 'editado'): ?>

        swal(':D', "Producto editado", 'success').then(() => {
            window.history.replaceState({}, document.title, window.location.pathname);
        });

    <?php endif; ?>
    <?php if (isset($_GET['producto']) && $_GET['producto'] === 'eliminado'): ?>

        swal(':(', "Producto eliminado", 'warning').then(() => {
            window.history.replaceState({}, document.title, window.location.pathname);
        });

    <?php endif; ?>
    <?php if (isset($_GET['producto']) && $_GET['producto'] === 'registrado'): ?>

        swal(':D', "Producto registrado", 'success').then(() => {
            window.history.replaceState({}, document.title, window.location.pathname);
        });

    <?php endif; ?>

</script>
<?php
include('../include/footer.php');
?>