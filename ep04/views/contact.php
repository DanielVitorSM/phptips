<form action="<?php $url;?>" method="POST">
    <select name="method">
        <option value="POST">POST</option>
        <option value="PUT">PUT</option>
        <option value="PATCH">PATCH</option>
        <option value="DELETE">DELETE</option>
    </select>
    <input type="text" name="first_name" value="Daniel">
    <input type="text" name="last_name" value="Moreira">
    <input type="text" name="email" value="contato.danielsmoreira@gmail.com">
    <button type="submit">Enviar</button>
</form>