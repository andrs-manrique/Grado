﻿<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php");?>			
<?php include("../3modelo/autenticacion.php");?>
		

<div class="container" align="center">
    <div class="margin-top">
        <div class="row">	
            <br><br>			     	 

            <table cellpadding="0" cellspacing="0" border="2" class="table  table-bordered" id="example">
             
                 
                 <h1> <font color='white'>    <strong>Tabla ASPIRANTES </strong>
                 </h1>  </font>
                
                <thead>
                    <tr>
                        <th>Identificacion</th>
                        <th>Genero</th>
                        <th>Nombre</th>                                 
                        <th>Apellido</th> 
                        <th>Contacto</th>                                 
                        <th>Rol</th>   

                        <th>Ver Información</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    //include("../3modelo/conexion.php");

                    mysql_select_db('db_ideaa', mysql_connect('localhost', 'root', '')) or die(mysql_error());

                    $user_query = mysql_query("select * from t_usuario where rol_user=3 ORDER BY dni_user ASC ") or
                            die(mysql_error());
                    //  $arch =" <a href='Archivos/{$row['archivo_aspi']}' >Ver Documento</a> ";

                    while ($row = mysql_fetch_array($user_query)) {
                        $id = $row['dni_user'];
                        ?>
                        <tr class="del<?php echo $id ?>">
                            <td><?php echo "<b>   <font color='white'> ".$row['dni_user']."</font></b>"; ?></td> 
                            <td><?php echo $row['sex_user']; ?></td> 

                            <td><?php echo $row['nom_user']; ?></td> 
                            <td><?php echo $row['apell_user']; ?></td> 
                            <td><?php echo $row['tel_user']; ?></td> 
                            <td><?php echo $row['rol_user']; ?></td>


                            <td><?php echo"<a href='info_col.php?id=$id'>Ver Más</a>"; ?></td>
    <?php //   <td> <?php echo "<a href='../Archivos/{$row['archivo_aspi']}' >Ver Documento</a> " </td>   ?>
                            <td width="100">

                                <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                   href="#delete_user<?php echo $id; ?>" data-toggle="modal"  
                                   class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
    <?php echo"<a href='editarDatos.php?dni=$id'>   <img src='../img/update.png' border='0' alt='Link to this page' width= 25px></a>"; // include('modal_delete_Colabor.php');  ?>

                                <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                   href="#edit<?php echo $id; ?>" data-toggle="modal" 
                                   class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
    <?php echo"<a href='updateEstado.php?dni=$id'>   <img src='../img/bloqueado.png' border='0' alt='Link to this page' width= 25px></a>"; //include('modal_edit_Colabor.php');  ?>
                            
                            
                              <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                   href="#edit<?php echo $id; ?>" data-toggle="modal" 
                                   class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
    <?php echo"<a href='Delete.php?dni=$id'>   <img src='../img/Delete_Icon.png' border='0' alt='Link to this page' width= 28px></a>"; //include('modal_edit_Colabor.php');  ?>
                            
                            </td>



    <?php //include('toolttip_edit_delete.php');  ?>
                            <!-- Modal edit user -->

                        </tr>
<?php } ?>

                </tbody>
            </table>

            <script type="text/javascript">

            </script>


        </div>		
    </div>
</div>
</div>
<?php include('footer.php') ?>
