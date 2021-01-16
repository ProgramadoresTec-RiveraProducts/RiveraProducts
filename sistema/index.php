<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="#" />      
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="styles.css">    
    <title>ENTRADA DE LIMÓN</title>    

  </head>
  <body>       
  
  <div class="jumbotron jumbotron-fluid">
  <div class="container ">
    <h1 class="display-8">ENTRADA DE LIMÓN</h1>    
  </div>
</div>
    <div class="container">        
        <div class="row">
            <div class="col-lg-8">                
                <button id="btnNuevo" class="btn btn-info" data-toggle="tooltip" title="Nuevo Producto"><svg class="bi bi-plus-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/></svg></button>               
                <!--Modal-->
                <div class="modal fade" id="modalAltaEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-light">
                                <h5 class="modal-title" id="exampleModalLabel">Alta / Edición</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <input id="id" type="hidden"> <!-- ID que vamos a recibir de firebase -->
                                    <div class="form-group">                                    
                                    <label>Código</label>
                                    <input id="codigo" type="text" class="form-control" required>
                                    </div>    
                                    <div class="form-group">
                                    <label>Descripción</label>
                                    <input id="descripcion" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Cantidad</label>
                                    <input id="cantidad" type="number" class="form-control" required>
                                    </div>                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" tabindex="2">Cancelar</button>
                                    <button type="submit" value="btnGuardar" class="btn btn-primary" translate="1">Guardar</button>
                                </div>
                            </form>
                    </div>
                </div>
                </div>
                <table id="tablaProductos" class="table table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                        <tr>
                            <th>ID</th>                        
                            <th>ID PRODUCTOR</th>
                            <th>FECHA RECEPCION</th>
                            <th>PRODUCTOR</th>                                                          
                            <th>PLACAS</th>
                            <th>LOCALIDAD</th>
                            <th>KG RECIBIDOS</th>                                                          
                            <th>NO. REJAS</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>   
                </table>
            </div>
           <div id="contenido"><button id="btncerrarS" onclick="cerrarsesion()">cerrar sesion</button></div>
        </div>
    </div>     
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.14.2/dist/sweetalert2.all.min.js"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-database.js"></script>

    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

     <script type="text/javascript" src="app.js"></script>
     <script type="text/javascript" src="js/functions.js"></script>
  </body>
</html>