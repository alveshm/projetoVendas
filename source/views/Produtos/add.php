<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Impostos - Adicionar</title>

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
              <h6 class="m-0 font-weight-bold text-primary">Produtos</h6>
            </div>
            <div class="card-body">
            <form method="POST" action="<?= $url ?>produtos/add">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nome" placeholder="Nome">
              </div>
              <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea type="text" class="form-control" name="descricao" id="descricao" aria-describedby="descricao" placeholder="Descrição"></textarea>
              </div>
              <div class="form-group">
                <div class="input-group mb-3">
                    <select class="custom-select" id="tipo-produto" name="tipo_produto_id">
                      <option selected>-- SELECIONE --</option>
                      <?php foreach ($aTipoProdutos as $key => $oTipoProduto) : ?>
                        <option value="<?= $oTipoProduto->id ?>"><?= $oTipoProduto->nome ?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" name="valor" id="valor" placeholder="Valor">
              </div>
              <button type="submit" class="btn btn-primary">Salvar</button>
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

</body>

</html>
