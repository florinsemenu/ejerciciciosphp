<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 7</title>
</head><body>
    <h2>Formularios & inputs</h2>
    Los tipos básicos de input son: 
    text: texto <br>
    password: contraseña <br>
    hidden: texto no visible en pantalla <br>
    radio: opción múltiple<br>
    checkbox: opción única <br>
    select: lista desplegable <br>
    submit: botón de envío <br>

    <h2>Formulario de ejemplo</h2>
    
    <form method="post" action="11action.php">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <label>Contraseña</label><input type="password" value="" name="apellidos"> <br>
        Sexo: <br>
        <input type="radio" name="sexo" value="male" checked> Varón <br>
        <input type="radio" name="sexo" value="female"> Mujer<br>
        Hobbies:   <br>
<!--        OJO: si ponemos el mismo nombre con corchetes recibiremos la opción
        múltiple como un array. -->
        NOTA: bloque como array  (BIEN) <br>
        <input type="checkbox" name="aficion[]" value="deporte"> Hacer deporte <br>
        <input type="checkbox" name="aficion[]" value="musica"> Escuchar música  <br>     
        <input type="checkbox" name="aficion[]" value="musica"> Lectura  <br>      
        <input type="checkbox" name="aficion[]" value="cine"> Ir al cine  <br>
        NOTA: bloque sin array y mismo nombre (MAL) <br>
        <input type="checkbox" name="hobbie" value="musica"> Lectura  <br>      
        <input type="checkbox" name="hobbie" value="cine"> Ir al cine  <br>
        NOTA: bloque sin array y distinto nombre (BIEN)<br>
        <input type="checkbox" name="hobbie1" value="musica"> Lectura  <br>      
        <input type="checkbox" name="hobbie2" value="cine"> Ir al cine  <br>
        
        Elige un color:  <br>
        <select name="color">
         <optgroup label="Grupo de colores">
           <option>rojo</option>
           <option>azul</option>
           <option>verde</option>
           <option>amarillo</option>
           <option selected>blanco</option>
         </optgroup>
       </select>
    <input type="submit" value="enviar">
    </form>
</body></html>