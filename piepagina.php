<!-- *********************************************************FIN CONTENEDOR -->
</div>

<script src="js/prefixfree-1.0.7.js"></script>

<script src="js/menu.js"></script>
<script>
 function abrirPagina(evt, NombrePagina) {
    var i, tabcontent, tablinks;
    
    tabcontent = document.getElementsByClassName("tabcontent");
  
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }


    document.getElementById(NombrePagina).style.display = "block";


    evt.currentTarget.NombrePagina += " active";
return false;
}


</script>

</body>
</html>