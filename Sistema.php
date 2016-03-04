<!doctype html>

<html>
<meta charset="utf-8"/>
<head>
<style>
	body {background-image: url("http://i.imgur.com/D50gfXA.jpg"), url("http://i.imgur.com/BR3YP3s.jpg"), url("http://i.imgur.com/xsRfFOx.jpg"); background-position: left top, right top, center top; background-repeat: no-repeat, no-repeat, repeat; background-attachment: fixed;}
</style>
</head>
<html>
<body>

<CENTER><H1>Creador de Ficha</H1><br><form action="Sistema.php" method="get"><INPUT NAME="Enviar" TYPE="submit" VALUE="Calcular"> Corte:<select name="corte">
					<option value=""></option>
					<option value="c1">EN DESARROLLO</option>
					<option value="c2">2</option>
					<option value="c3">3</option>
					<option value="c4">4</option>
					<option value="c5">5</option>
					<option value="c6">6</option>
				</select>  <INPUT NAME="reset" TYPE="submit" VALUE="Reset"> <a href="http://ciudadela.260mb.net/sistema/grimorio/">Grimorio</a> <a href="http://ciudadela.260mb.net/sistema/bestiario.php">Bestiario</a><br><br><br>
	<table>
		<tr>
		<td valign="top">
			<table>
				<tr><td align="center"><h2>ATRIBUTOS</h2></td></tr>
				<tr><td><INPUT TYPE="number" NAME="fisico" min="4" max="10" style="width: 40px;" value=4> Físico</td></tr>
				<td><INPUT TYPE="number" NAME="destreza" min="4" max="10" style="width: 40px;" value=4> Destreza</td></tr>
				<td><INPUT TYPE="number" NAME="inteligencia" min="4" max="10" style="width: 40px;" value=4> Inteligencia</td></tr>
				<td><INPUT TYPE="number" NAME="percepcion" min="4" max="10" style="width: 40px;" value=4> Percepción</td></tr>
			</table>14 Puntos por gastar			
			</td>
			<td valign="top">
			<table>
				<tr><td colspan="4" align="center"><h2>HABILIDADES</h2></td></tr>
				<tr align="center"><td><b>Físico</b></td><td><b>Destreza</b></td><td><b>Inteligencia</b></td><td><b>Percepción</b></td></tr>
				<tr><td valign="top">
					<INPUT TYPE="number" NAME="harmascc" min="0" max="10" style="width: 40px;" value="0"> Armas CC <br>
					<INPUT TYPE="number" NAME="hatletismo" min="0" max="10" style="width: 40px;" value="0"> Atletismo<br>
					<INPUT TYPE="number" NAME="fhab1lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="fhab1" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="fhab2lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="fhab2" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="fhab3lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="fhab3" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="fhab4lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="fhab4" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="fhab5lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="fhab5" style="width: 135px;" value=""></td>
				<td valign="top">
					<INPUT TYPE="number" NAME="harmasdis" min="0" max="10" style="width: 40px;" value="0"> Armas a distancia<br>
					<INPUT TYPE="number" NAME="harmasccsu" min="0" max="10" style="width: 40px;" value="0"> Armas CC sutil<br>
					<INPUT TYPE="number" NAME="hcabalgar" min="0" max="10" style="width: 40px;" value="0"> Cabalgar<br>
					<INPUT TYPE="number" NAME="hescalar" min="0" max="10" style="width: 40px;" value="0"> Escalar<br>
					<INPUT TYPE="number" NAME="hdefensafis" min="0" max="10" style="width: 40px;" value="0"> Defensa física<br>
					<INPUT TYPE="number" NAME="hnadar" min="0" max="10" style="width: 40px;" value="0"> Nadar<br>
					<INPUT TYPE="number" NAME="hrobar" min="0" max="10" style="width: 40px;" value="0"> Robar bolsillos<br>
					<INPUT TYPE="number" NAME="hsigilo" min="0" max="10" style="width: 40px;" value="0"> Sigilo<br>
					<INPUT TYPE="number" NAME="htrampa" min="0" max="10" style="width: 40px;" value="0"> Trampas/Cerraduras<br>
					<INPUT TYPE="number" NAME="dhab1lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="dhab1" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="dhab2lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="dhab2" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="dhab3lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="dhab3" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="dhab4lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="dhab4" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="dhab5lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="dhab5" style="width: 135px;" value=""></td>
				<td valign="top">
					<INPUT TYPE="number" NAME="hcallejeo" min="0" max="10" style="width: 40px;" value="0"> Callejeo<br>
					<INPUT TYPE="number" NAME="hcomercio" min="0" max="10" style="width: 40px;" value="0"> Comercio<br>
					<INPUT TYPE="number" NAME="hfauna" min="0" max="10" style="width: 40px;" value="0"> Fauna<br>
					<INPUT TYPE="number" NAME="hleyes" min="0" max="10" style="width: 40px;" value="0"> Leyes<br>
					<INPUT TYPE="number" NAME="hnavegar" min="0" max="10" style="width: 40px;" value="0"> Navegar<br>
					<INPUT TYPE="number" NAME="hocultismo" min="0" max="10" style="width: 40px;" value="0"> Detección mágica<br>
					<INPUT TYPE="number" NAME="hreligion" min="0" max="10" style="width: 40px;" value="0"> Religión<br>
					<INPUT TYPE="number" NAME="hsanacion" min="0" max="10" style="width: 40px;" value="0"> Sanación/Hierbas<br>
					<INPUT TYPE="number" NAME="hsupervivencia" min="0" max="10" style="width: 40px;" value="0"> Supervivencia/Cazar<br>
					<INPUT TYPE="number" NAME="htradicion" min="0" max="10" style="width: 40px;" value="0"> Tradición/Historia<br>
					<INPUT TYPE="number" NAME="ihab1lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="ihab1" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="ihab2lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="ihab2" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="ihab3lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="ihab3" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="ihab4lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="ihab4" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="ihab5lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="ihab5" style="width: 135px;" value="">				</td>
				<td valign="top">
					<INPUT TYPE="number" NAME="hadvertir" min="0" max="10" style="width: 40px;" value="0"> Advertir/Notar<br>
					<INPUT TYPE="number" NAME="hbailar" min="0" max="10" style="width: 40px;" value="0"> Bailar<br>
					<INPUT TYPE="number" NAME="hbuscar" min="0" max="10" style="width: 40px;" value="0"> Buscar<br>
					<INPUT TYPE="number" NAME="hdisfraz" min="0" max="10" style="width: 40px;" value="0"> Disfraz<br>
					<INPUT TYPE="number" NAME="hetiqueta" min="0" max="10" style="width: 40px;" value="0"> Etiqueta<br>
					<INPUT TYPE="number" NAME="hmusica" min="0" max="10" style="width: 40px;" value="0"> Música<br>
					<INPUT TYPE="number" NAME="hrastrear" min="0" max="10" style="width: 40px;" value="0"> Rastrear<br>
					<INPUT TYPE="number" NAME="hreflejos" min="0" max="10" style="width: 40px;" value="0"> Reflejos<br>
					<INPUT TYPE="number" NAME="hrumores" min="0" max="10" style="width: 40px;" value="0"> Rumores<br>
					<INPUT TYPE="number" NAME="phab1lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="phab1" style="width: 140px;" value=""><br>
					<INPUT TYPE="number" NAME="phab2lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="phab2" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="phab3lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="phab3" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="phab4lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="phab4" style="width: 135px;" value=""><br>
					<INPUT TYPE="number" NAME="phab5lvl" min="0" max="10" style="width: 40px;" value="0"> <INPUT TYPE="text" NAME="phab5" style="width: 135px;" value=""></td>
				</tr>
			</table>
		</td>
		</tr>
	</table>
	</form>
	<table>
		<tr><td colspan="2" align="center"><h2>VALORES DE COMBATE</h2></td></tr>
		<tr><td>16</td><td><b>Puntos de vida:</b></td><td>Físico * 4</td></tr>
		<tr><td>12</td><td><b>Mana:</b></td><td>Inteligencia * 3</td></tr>
		<tr><td>4</td><td><b>Iniciativa:</b></td><td>Percepción + Reflejos + 1d10</td></tr>
		<tr><td>4</td><td><b>Ataque Cuerpo a Cuerpo:</b></td><td>Físico + Armas Cuerpo a Cuerpo + 1d10</td></tr>
		<tr><td>4</td><td><b>Ataque Cuerpo a Cuerpo Sutil:</b></td><td>Destreza + Armas Sutil + 1d10</td></tr>
		<tr><td>4</td><td><b>Ataque a Distancia:</b></td><td>Destreza + Armas Distancia + 1d10</td></tr>
		<tr><td>2</td><td><b>Defensa:</b></td><td>Destreza + Defens Física - 2 + 1d10</td></tr>
	</table>

<table>
<tr>
<td valign="top">
<table>
<tr><td colspan="2" align="center"><h2>ARMA - RANGOS</h2></td></tr>
<tr><td><b>Distancia</b></td><td><b>Dificultad</b></td></tr>
<tr><td>Bocajarro</td><td>10</td></tr>
<tr><td>Corta</td><td>15</td></tr>
<tr><td>Media</td><td>20</td></tr>
<tr><td>Larga</td><td>25</td></tr>
</table>
</td>
<td valign="top">
<table>
<tr><td colspan="3" align="center"><h2>ARMADURAS</h2></td></tr>
<tr><td><b>Armadura</b></td><td><b>Absorción</b></td><td><b>Estorbo</b></td></tr>
<td>Cuero</td><td>2</td><td>1</td></tr>
<td>Malla</td><td>4</td><td>2</td></tr>
<td>Placas</td><td>6</td><td>3</td></tr>
</table>
</td><td valign="top">
<table>
<tr><td colspan="4" align="center"><h2>ESCUDOS</h2></td></tr>
<tr><td><b>Escudo</b></td><td><b>Defensa CC</b></td><td><b>Defensa Dist.</b></td><td><b>Estorbo</b></td></tr>
<td>Pequeño</td><td>+1</td><td>+2</td><td>0</td></tr>
<td>Mediano</td><td>+2</td><td>+4</td><td>1</td></tr>
<td>Grande</td><td>+3</td><td>+6</td><td>2</td></tr>
</table>
</td></tr>
</table>


<table>
<tr>
<td valign="top">
<table>
<tr><td colspan="2" align="center"><h2>PRUEBAS DE HABILIDAD</h2></td></tr>
<tr><td><b>Dificultad</b></td><td><b>Tirada mínima</b></td></tr>
<td>Fácil</td><td>10</td></tr>
<td>Normal</td><td>15</td></tr>
<td>Moderada</td><td>18</td></tr>
<td>Difícil</td><td>20</td></tr>
<td>Muy difícil</td><td>25</td></tr>
<td>Casi imposible</td><td>30</td></tr>
</table>
</td><td valign="top">
<table>
<tr><td colspan="2" align="center"><h2>PRUEBAS DE ATRIBUTO</h2></td></tr>
<tr><td><b>Dificultad</b></td><td><b>Tirada mínima</b></td></tr>
<td>Fácil</td><td>9</td></tr>
<td>Normal</td><td>12</td></tr>
<td>Difícil</td><td>15</td></tr>
<td>Muy difícil</td><td>18</td></tr>
<td>Casi imposible</td><td>21</td></tr>
</table>
</td></tr>
</table>
</body>
</noscript>

</html>