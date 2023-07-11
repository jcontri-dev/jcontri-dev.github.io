
<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <title>title</title>
  <link rel="icon" href="./assets/img/favicon.webp" type="image/x-icon" />
  <link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="description">
  <meta name="keywords" content="keywords">
  <meta name="author" content="author">

  <title>Gusetec</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom CSS -->
  <link href="assets/styles/styles.css" rel="stylesheet">

    
    <?php
        isset($_GET['m'])? $module = $_GET['m'] : $module = 'content';
        try {
            if (!include_once('./components/' . $module . '/index.php')) {
                throw new Exception ('404');
                if (!file_exists($page)) {
                    throw new Exception ('componente não encontrado');
                } else {
                    require_once($page);
                }
            }
        }catch(Exception $e) {
            echo "Erro: " . $e->getMessage();
            echo "<br>Codigo: " . $e->getCode();
        }
    ?>

</head>
