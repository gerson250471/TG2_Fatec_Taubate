<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEMA MOTOFRETE</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Ordem de Serviço</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">SISTEMA MOTOFRETE </a></h3>
                    <div class="box">
                        <form action="Aceite.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="OrdemServico" name="text" class="input is-large" placeholder="Informe Servico" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="Inicio" class="input is-large"  placeholder="Ponto de Partida">
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="Termino" class="input is-large"  placeholder="Ponto de Chegada">
                                </div>
                            </div>
							
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Solicitar Serviço</button>
							
                        </form>
					</div>
						
					<div id="map">
					
						<button onclick="findMe()">Mostrar Localização</button>
						
						<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
						<script>
							function findMe(){
								var output = document.getElementById('map');

								// Verifica suporte do navegador
								if (navigator.geolocation) {
									output.innerHTML = "<p>Navegador não suporta Geolocalização</p>";
								}else{
									output.innerHTML = "<p>Navegador suporta Geolocalização</p>";
								}

								//Obtem latitude e longitude
								function localizacion(posicion){

									var latitude = posicion.coords.latitude;
									var longitude = posicion.coords.longitude;

									var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center="+latitude+","+longitude+"&size=500x300&markers=color:red%7C"+latitude+","+longitude+"&key=AIzaSyBFLar0KAnYiqKMUTbWzgMvX_BQww2nDCc";

									output.innerHTML ="<img src='"+imgURL+"'>";

								}

								function error(){
									output.innerHTML = "<p>Não foi permitido obter sua localização</p>";

								}

								navigator.geolocation.getCurrentPosition(localizacion,error);
							}
						</script>
					</div>		
</body>

</html>