<!--
/*
//            __...._
//         .'`     .-`.
//        /       //``\\____
//       /  .-. .'\\_.'/    `'.
//       | /   \  /'-'`        \
//       | \   / |             ;)
//       \  '-'  |            .' 
//        '-.,_  |      __..-'
//  _'=,_______'-,\__.-'
//  .=[_______.-'(___(   _
//  -"`         /  __|__/ )_
//             /   .--.     )
//            /   /   -\-.-'
//          / \  |    ~;
//          ;-'  _|     |
//     ___.|   `       |
//     `'---'`---------'
//#########################################################################
//          _                        _    _                               //
//         | |                      | |  | |                              //
//         | | ___  ___ _   ___  __ | |__| | ___ _ __ _ __ ___ _ __ __ _  //
//     _   | |/ _ \/ __| | | \ \/ / |  __  |/ _ \ '__| '__/ _ \ '__/ _` | //
//    | |__| |  __/\__ \ |_| |>  <  | |  | |  __/ |  | | |  __/ | | (_| | //
//     \____/ \___||___/\__,_/_/\_\ |_|  |_|\___|_|  |_|  \___|_|  \__,_| //
//##########################################################################
//                   Email: jessus.herrera@hotmail.com                    //
//                  Blog: www.jesuxherrera.wordpress.com                  //
//##########################################################################*/
-->
<?php include'functions.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="style.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  
    <div class="contenedor">

         <h1>Estados y Municipios de México</h1>
         <select id="estados">
            <option></option>
         	<?php __ListarEstados(); ?>
         </select>
         <p></p>
         <select id="municipios">
         </select>
         <p></p>
         <div class="footer">Ejemplo Hecho por <a href="mailto:jessus.herrera@hotmail.com">Jesus Herrera</a> para <a href="http://pilaresdelcodigo.wordpress.com/">Pilares Del Codigo</a> </div>
    	

    </div>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$( "#estados" ).change(function() {
    var municipio = $("select#estados option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

        	type: 'POST',
        	url: 'municipios.php',
        	data: datastring,
        	   success: function(data){
        	   	 $('#municipios').html('');
        	   	 $('#municipios').html(data);
        	   }
        });
});
</script>
</body>
</html>