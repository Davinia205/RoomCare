
    <?php
    require '../vendor/autoload.php';

    use Clases\Usuario;

    $usu = new Usuario();
    $stmt = $usu -> recuperarUsuarios();
    echo "<p><b><a href='../views/dashboard_view.php' class='link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover'>Volver </a></center></b></p>";

    include("../views/datos_usuario_view.php");
  

  while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo "<tr>";
    echo "<td>{$filas->usuario}</td>";
    echo "<td>{$filas->password}</td>";
    echo "<td>{$filas->nombre}</td>";
    echo "<td>{$filas->apellidos}</td>";
    echo "<td>{$filas->tipo}</td>";
    echo "<td>{$filas->cargo}</td>";

    echo "<td>";
}    
echo "</td>";
echo "</tr>";
?>


  
</table>

</body>
</html>