<?php include ("../templates/cabecera.php");?>
<?php include ("../secciones/alumnos.php");?>

<div class="row">
    <div class="col-5">
        <form action="" method="post">
          <div class="card">
            <div class="card-header">
              Asistente 
            </div>
            <div class="card-body">
             <div class="mb-3">
               <label for="id" class="form-label">Id</label>
               <input type="text"
                 class="form-control" name="id" id="id" placeholder="Id">         
             </div>
             <div class="mb-3">
              <!-- Esta lista se llena con los datos del curso -->
               <label for="" class="form-label">Temas de la reunión</label>
               <select multiple class="form-control" name="cursos[]" id="listaCursos">      
                     <option value="">Seleccione una opcion</option> 
                     <?php foreach($cursos as $curso){ ?>
                     <option value="<?php echo $curso['id'];?>"> <?php echo $curso['nombre_curso'];?></option> 
                    <?php };?>
                </select> 
             </div>
             <!-- <div class="mb-3">
               <label for="nombre" class="form-label">Fecha</label>
               <input type="date"
                 class="form-control" name="fecha" id="fecha">         
             </div> -->
             <div class="mb-3">
               <label for="nombre" class="form-label">Nombres y Apellidos</label>
               <input type="text"
                 class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno">         
             </div>
             <div class="mb-3">
               <label for="apellidos" class="form-label">Apellidos</label>
               <input type="text"
                 class="form-control" name="apellidos" id="apellidos" placeholder="Apellido del alumno">         
             </div>
             <div class="btn-group" role="group" aria-label="">
                <button type="submit"  name="accion" value="agregar" class="btn btn-success">Agregar</button>
                <button type="submit"  name="accion" value="editar" class="btn btn-warning">Editar</button>
                <button type="submit"  name="accion" value="borrar" class="btn btn-danger">Borrar</button>
            </div>
            </div>            
          </div>
        </form>  
    </div>
    <div class="col-7">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                     
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($alumnos as $alumno):?>
                    <tr>
                        <td><?php echo $alumno['id']; ?></td>

                        <td>
                          <?php echo $alumno['nombre']; ?> <?php echo $alumno['apellidos'];?> <br/>
                         
                          <?php foreach($alumno["cursos"] as $curso){?>
                            <a href ="#"> <?php echo $curso['nombre_curso']; ?> </a> <br/>
                          <?php }; ?>
                        </td>
                    
                        <td>Seleccionar</td>
                    </tr>

                    <?php endforeach; ?>
                
                </tbody>
            </table>
        </div>
        

    </div>
<?php include ("../templates/pie.php");?>

