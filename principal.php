<div class= "container text-center" style="height: 430px;">
<!-- Filosofia FeedBack Sevice -->
<div class="row">
    <div id="colum1" class="col-md-6 col-xs-12 col-lg-6">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis quis eros sed imperdiet. Nulla eget dignissim neque. Mauris vitae lectus non lectus posuere tristique. Nunc vehicula, magna ut dignissim condimentum, lectus metus aliquet est, quis volutpat lectus ligula sit amet risus. Phasellus ut tellus euismod, mattis lorem tristique, eleifend massa. Donec arcu diam, porta at orci feugiat, mollis pharetra velit. Aliquam faucibus purus eu turpis aliquam elementum. Nunc eu ullamcorper leo. Proin consequat enim nec aliquam elementum. Donec venenatis id tellus quis viverra.</p>
            </div>
        <div id="botonRegistro" class="col-md-12 col-xs-12 col-lg-12">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Registrate!
            </button>
        </div>
        </div>
    </div>

    <!-- Login -->
    <div id="colum2" class="col-md-6 col-xs-12 col-lg-6">
        <form role="form" action="login.php" method="POST" id="formularioLogin">
            <div class="form-group">
                <input type="text" class="form-control" id="alias" placeholder="Introduzca su Alias" name="alias">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
            </div>
            <div class="checkbox">
                <label>
                    <input  id="condiciones" type="checkbox" style="text-align: left;"> Acepto las condiciones de uso.
                </label>
            </div>
            <div id="avisoLogin"></div>
            <button type="button" id="botonLogin" class="btn btn-default">Entrar</button>
        </form>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Únete a FeedBack Service.</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="registro.php" method="POST" id="formulario">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        <input type="text" class="form-control" id="aliasRegistro" placeholder="Alias" name="aliasRegistro">
                        <div id="avisoAlias">

                            <input type="password" class="form-control"  id="passRegistro" placeholder="Contraseña" name="passRegistro"><br/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">
                            <input type="text" class="form-control" id="profesion" placeholder="Profesion" name="profesion">
                            <label>Sexo:</label>
                            <div class="radio" class="sexo">
                                <label>
                                    <input type="radio" name="sexo" id="mujer" value="mujer">
                                    Mujer
                                </label>
                            </div>
                            <div class="radio"  class="sexo">
                                <label>
                                    <input type="radio" name="sexo" id="hombre" value="hombre">
                                    Hombre
                                </label>
                            </div>
                            <input type="text" class="form-control" id="fechaNac" placeholder="Fecha de nacimiento" name="fechaNac">
                            <input type="hidden" class="form-control" id="fechaNacBuena" name="fechaNacBuena">
                            <select class="form-control" id="provincia" name="provincia">
                                <option selected="" value="null">Seleccione una provincia</option>
                                <option value="A Coruña">A Coruña</option>
                                <option value="Álava">Álava</option>
                                <option value="Albacete">Albacete</option>
                                <option value="Alicante">Alicante</option>
                                <option value="Almería">Almería</option>
                                <option value="Asturias">Asturias</option>
                                <option value="Ávila">Ávila</option>
                                <option value="Badajoz">Badajoz</option>
                                <option value="Baleares">Baleares (Illes)</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Burgos">Burgos</option>
                                <option value="Cáceres">Cáceres</option>
                                <option value="Cádiz">Cádiz</option>
                                <option value="Cantabria">Cantabria</option>
                                <option value="Castellón">Castellón</option>
                                <option value="Ceuta">Ceuta</option>
                                <option value="Ciudad Real">Ciudad Real</option>
                                <option value="Córdoba">Córdoba</option>
                                <option value="Cuenca">Cuenca</option>
                                <option value="Girona">Girona</option>
                                <option value="Granada">Granada</option>
                                <option value="Guadalajara">Guadalajara</option>
                                <option value="Guipúzcoa">Guipúzcoa</option>
                                <option value="Huelva">Huelva</option>
                                <option value="Huesca">Huesca</option>
                                <option value="Jaén">Jaén</option>
                                <option value="La Rioja">La Rioja</option>
                                <option value="Las Palmas">Las Palmas</option>
                                <option value="León">León</option>
                                <option value="Lleida">Lleida</option>
                                <option value="Lugo">Lugo</option>
                                <option value="Madrid">Madrid</option>
                                <option value="Málaga">Málaga</option>
                                <option value="Melilla">Melilla</option>
                                <option value="Murcia">Murcia</option>
                                <option value="Navarra">Navarra</option>
                                <option value="Ourense">Ourense</option>
                                <option value="Palencia">Palencia</option>
                                <option value="Pontevedra">Pontevedra</option>
                                <option value="Salamanca">Salamanca</option>
                                <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                                <option value="Segovia">Segovia</option>
                                <option value="Sevilla">Sevilla</option>
                                <option value="Soria">Soria</option>
                                <option value="Tarragona">Tarragona</option>
                                <option value="Teruel">Teruel</option>
                                <option value="Toledo">Toledo</option>
                                <option value="Valencia">Valencia</option>
                                <option value="Valladolid">Valladolid</option>
                                <option value="Vizcaya">Vizcaya</option>
                                <option value="Zamora">Zamora</option>
                                <option value="Zaragoza">Zaragoza</option>
                            </select>
                        </div>
                        <div class="checkbox" class="terminos">
                            <label>
                                <input type="checkbox" id="terminos" name="terminos">
                                Acepto los <a target="_blank" href="http://www.sitelicon.com/politicaprivacidad.html">Términos y condiciones.</a>
                            </label>
                        </div>
                        <div id="ultimo"></div>
                        <button type="button" class="btn btn-default" id="boton">Registrame!</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
