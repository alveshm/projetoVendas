<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Venda - Adicionar</title>

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

        <?= require __DIR__ . '/../menu.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Venda</h6>
              <div>
                <button type="button" class="btn btn-danger button-remove">-</button>
                <button type="button" class="btn btn-success button-add">+</button>
              </div>
            </div>
            <div class="card-body">
            <form method="POST" action="<?= $url ?>/vendas/add" id="form-vendas">
              <div class="input-copy row hidden">
                  <div class="form-group col-md-6">
                    <div class="input-group mb-3">
                        <select class="custom-select" id="produto" name="itens[__COUNT__][produto]" disabled>
                          <option selected>-- SELECIONE --</option>
                          <?php foreach ($aProdutos as $key => $oProduto) : ?>
                            <option value="<?= $oProduto->id ?>"><?= $oProduto->nome ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="itens[__COUNT__][quantidade]" id="quantidade" aria-describedby="quantidade" placeholder="Quantidade" disabled>
                  </div>
              </div>
              
              <button type="submit" class="btn btn-primary" id="button-salvar">Salvar</button>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/datatables-demo.js"></script>
  <script src="/js/ManageVendas.js"></script>

</body>

</html>
