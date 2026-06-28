<html> 
<head> 
    <title>Formulario Alta Ciudad</title> 
</head> 
<body> 
<FORM  action="guardar.php" method="POST" name="FormAlta"> 
    <TABLE width="225"> 
        <TR>  
            <TD> Ciudad:</TD> 
            <TD> <input type="TEXT"  name="ciudad"></TD>
        </TR> 
        <TR>  
            <TD> Pais:</TD> 
            <TD> <input type="TEXT"  name="pais"></TD> 
        </TR> 
        <TR>  
            <TD> Habitantes: </TD> 
            <TD> <input type="NUMBER"  name="habitantes"></TD> 
        </TR> 
        <TR>  
            <TD> Superficie: </TD> 
            <TD> <INPUT TYPE="TEXT"  name="superficie" ></TD> 
        </TR> 
        <TR>
            <TD> Tiene metro </TD>
            <TD> <select name="metro">
                <option value="1">Sí</option>
                <option value="0">No</option>
</select></TD>
        </TR>
        <TR>  
            <TD colspan="2" align="center"> <INPUT TYPE="SUBMIT"  name="Submit" value="Agregar"> 
            <p><a href="index.php">Volver al menu del ABM</a></p>  
            </TD> 
        </TR> 
    </TABLE> 
    
</FORM> 
</body> 
</html>