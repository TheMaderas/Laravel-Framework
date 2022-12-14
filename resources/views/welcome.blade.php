<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <style>
        hr{
            position: relative;
            height: 1px;
            background: white;
        }
        label{
            font-size:1.569vh;
        }

        ::placeholder {
            font-size:1.5vh;
        }
    </style>
    <body>
        <div class="container" style="margin-top: 10vh; background-color: #3E4C59; border: 2px solid gray; border-radius: 5px;">
            <h2 style="color: white; font-size: 5vh;">Formulário</h2>
            <hr style="color: white;"><br>
            <form class="form-horizontal" action="/enviar" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="cdproduto" style="color: white;">Código do Produto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cdproduto" placeholder="Insira o Código do Produto" name="cdproduto" style="font-size: 1.5vh;">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="nproduto" style="color: white;">Nome do Produto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nproduto" placeholder="Insira o Nome do Produto" name="nproduto" style="font-size: 1.5vh;">
                    </div>
                </div>

                <div class="container mt-3">
                <label class="control-label col-sm-2" for="ncategoria" style="color: white;">Categoria:</label>
                    <select class="form-select mt-3" style="width: 15%; font-size: 1.5vh;" id="ncategoria" name="ncategoria">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="punitario" style="color: white;">Preço Unitário:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="punitario" placeholder="Insira o Preço Unitário" name="punitario" style="font-size: 1.5vh;">
                    </div>
                </div>

                <div class="form-group" style="margin: auto; width: 65%">
                    <label for="exampleFormControlTextarea1" style="color: white;">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="..." style="width: 127%; font-size: 1.5vh" id="cdescricao" name="cdescricao"></textarea>
                </div>

                <br><br>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-block" style="font-size: 1.7vh;">Submeter</button>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </body>
</html>
