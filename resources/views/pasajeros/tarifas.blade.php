@extends('layouts.app')

@section('title','Tarifas')

@section('content')

  <!--Contenido tarifas-->
  <div class="container-tarifas">
    <div class="row-tarifas">
        <div class="title-tarifas text-center">
            <h1>Tarifas de servicio </h1>

        </div>
        <div class="contenido-tarifas-tradicional page-content blocks-content">
            <h4>TARIFA DE SERVICIO TAXI TRADICIONAL</h4>
            <table class="wp-block-table">
                <thead >
                    <tr>
                        <th >Descripción</th>
                        <th>Valor en pesos</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>Banderazo</td>
                        <td>$3.800</td>
                    </tr>
                    <tr>
                        <td>Carrera minima</td>
                        <td>$5.800</td>
                    </tr>

                    <tr>
                        <td>Valor por cada 78m</td>
                        <td>$120</td>
                    </tr>

                    <tr>
                        <td>Valor de espera por 60 segundos </td>
                        <td>$220</td>
                    </tr>

                    <tr>
                        <td>Valor hora contratada</td>
                        <td>$25.500</td>
                    </tr>

                </tbody>
                
<hr>
            </table>
            <br>
            <br>
            
            <h4>TARIFAS AL AEROPUERTO JOSÉ MARÍA CÓRDOVA</h4>
            <table class="wp-block-table">
                <thead >
                    <tr>
                        <th >Descripcion</th>
                        <th>Valor en pesos</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>Medellin</td>
                        <td>$90.000</td>
                    </tr>
                    <tr>
                        <td>Envigado</td>
                        <td>$90.000</td>
                    </tr>

                    <tr>
                        <td>Itagüí</td>
                        <td>$100.000</td>
                    </tr>

                    <tr>
                        <td> Bello </td>
                        <td> $86.000 </td>
                    </tr>

                    <tr>
                        <td>La estrella</td>
                        <td>$95.000</td>
                    </tr>

                    <tr>
                        <td>Sabaneta</td>
                        <td>$95.000</td>
                    </tr>

                    <tr>
                        <td>Caldas</td>
                        <td>$98.500</td>
                    </tr>

                    <tr>
                        <td>Copacabana</td>
                        <td>$90.000</td>
                    </tr>



                </tbody>
                

            </table><br><br>

<hr>
            
            <h4>TARIFAS TAXI VIAJE OCASIONAL MUNICIPIOS DE ANTIOQUIA</h4>
            <table class="viaje-ocasional  wp-block-table">
                <thead>
                    <tr>
                        <th>Municipio</th>
                        <th>Valor en pesos</th>
                        <th>Kilometraje</th>
                        <th>Tiempo</th>
                        <th>Via</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>Abejorral</td>
                        <td>$330.000</td>
                        <td>91,9 Km</td>
                        <td>2H 24 minutos </td>
                        <td>Por la ceja oriente</td>
                    </tr>

                    <tr>
                        <td>Abriaqui</td>
                        <td>$524.200</td>
                        <td>136 Km</td>
                        <td>3H 35 minutos </td>
                        <td>Occidente</td>
                    </tr>
                    

                    <tr>
                        <td>Alejandria</td>
                        <td>$181.350</td>
                        <td>79,7 Km</td>
                        <td>2H 32 minutos</td>
                        <td>Barbosa - Concepción</td>
                    </tr>

                    <tr>
                        <td>Amagá</td>
                        <td>$98.800</td>
                        <td>38,9 Km</td>
                        <td>53 minutos</td>
                        <td>Amagá - Caldas</td>
                    </tr>

                    <tr>
                        <td>Amalfi</td>
                        <td>$286.000</td>
                        <td>144 Km</td>
                        <td>2H 54 minutos </td>
                        <td>Barbosa - Pto.Berrio</td>
                    </tr>

                    <tr>
                        <td>Andes</td>
                        <td>$400.000</td>
                        <td>124 Km</td>
                        <td>3H 15 minutos</td>
                        <td>Carretera 60</td>
                    </tr>

                    <tr>
                        <td>Angelópolis</td>
                        <td>$103.000</td>
                        <td>38,1 Km</td>
                        <td>1 Hora</td>
                        <td>Angelópolis - Caldas</td>
                    </tr>


                    <tr>
                        <td>Angostura</td>
                        <td>$339.000</td>
                        <td>124 Km</td>
                        <td>2H 48 minutos</td>
                        <td>Angostura - Carolina</td>
                    </tr>

                    <tr>
                        <td>Anorí</td>
                        <td>$400.000</td>
                        <td>176 Km </td>
                        <td>3H 55 minutos</td>
                        <td>Barbosa - Pto.Berrio</td>
                    </tr>

                    <tr>
                        <td>Anzá</td>
                        <td>$286.800</td>
                        <td>81,6 Km</td>
                        <td>1H 44 minutos </td>
                        <td>Via Occidente y Bolombolo</td>
                    </tr>

                    <tr>
                        <td>Apartadó</td>
                        <td>$1.000.000</td>
                        <td>311 Km </td>
                        <td>6H 24 minutos</td>
                        <td>Occidente</td>
                    </tr>

                    <tr>
                        <td>Arboletes</td>
                        <td>$1.100.000</td>
                        <td>456 Km</td>
                        <td>8H 45 minutos</td>
                        <td>Occidente</td>
                    </tr>

                    <tr>
                        <td>Argelia</td>
                        <td>$600.000</td>
                        <td>144 Km </td>
                        <td>3H 43 minutos</td>
                        <td>Via las palmas</td>
                    </tr>

                    <tr>
                        <td>Armenia mantequilla</td>
                        <td>$180.000</td>
                        <td>50,5 Km </td>
                        <td>1H 42 minutos</td>
                        <td>San antonio de prado - Heliconia</td>
                    </tr>

                    <tr>
                        <td>Barbosa</td>
                        <td>Taximetro</td>
                        <td>42,7 Km</td>
                        <td>44 minutos</td>
                        <td>Autopista Norte</td>
                    </tr>

                    <tr>
                        <td>Bello</td>
                        <td>Taximetro</td>
                        <td>11,5 Km </td>
                        <td>23 minutos</td>
                        <td>Autopista Norte</td>
                    </tr>

                    <tr>
                        <td>Belmira</td>
                        <td>$180.000</td>
                        <td>59,7 Km</td>
                        <td>1H 28 minutos</td>
                        <td>Medellin - San Pedro</td>
                    </tr>

                    <tr>
                        <td>Betania</td>
                        <td>$350.000</td>
                        <td>116 Km</td>
                        <td>2H 3 minutos</td>
                        <td>Carretera 60</td>
                    </tr>

                    <tr>
                        <td>Betulía</td>
                        <td>$350.000</td>
                        <td>119 Km</td>
                        <td>2H 59 minutos</td>
                        <td>Concordia - Betulia</td>
                    </tr>

                    <tr>
                        <td>Bolombolo</td>
                        <td>$207.500</td>
                        <td>63,1 Km</td>
                        <td>1H 25 minutos</td>
                        <td>Carretera 60</td>
                    </tr>

                    <tr>
                        <td>Briceño</td>
                        <td>$450.000</td>
                        <td>177 Km</td>
                        <td>4H 32 minutos</td>
                        <td>Carretera 25</td>
                    </tr>

                    <tr>
                        <td>Buriticá</td>
                        <td>$370.000</td>
                        <td>91,9 Km</td>
                        <td>2H 28 minutos</td>
                        <td>Occidente</td>
                    </tr>

                    <tr>
                        <td>Cáceres</td>
                        <td>$440.000</td>
                        <td>231 Km</td>
                        <td>5H 6 minutos</td>
                        <td>Carretera 25</td>
                    </tr>

                    <tr>
                        <td>Caicedo</td>
                        <td>$360.000</td>
                        <td>89,2 Km</td>
                        <td>2H 44 minutos</td>
                        <td>Via a Caicedo</td>
                    </tr>
                    
                    
                    <tr> 
                        <td>Caldas</td>	
                        <td>Por taxímetro</td>	
                        <td>23,3 Km	27 minutos</td>	
                        <td>Autopista Sur</td>
                    </tr>

                    <tr>
                        <td>Campamento	</td>
                        <td>$460.000</td>
                        <td>142 km</td>
                        <td>3H 7 minutos</td>
                        <td>Carretera 25</td>
                    </tr>
                    <tr>
                        <td>Cañasgordas</td>
                        <td>$370.000</td>
                        <td>113 Km</td>
                        <td>2H 34 minutos</td>
                        <td>Occidente</td>
                    </tr>

                    <tr>
                        <td>Caracolí</td>
                        <td>$430.000</td>
                        <td>139 Km</td>
                        <td>2H 59 minutos</td>
                        <td>Barbosa – Pto. Berrio</td>
                    </tr>

<tr>
    <td>Caramanta</td>
    <td>$500.000</td>
    <td>118 Km	</td>
    <td>2H 57 minutos</td>
    <td>Carretera 25</td>
</tr>
<tr>
    <td>Carepa</td>
    <td>$900.000</td>
    <td>296 Km</td>
    <td>6H 1 minutos</td>
    <td>Occidente</td>
</tr>

<tr>
    <td>Carmen de Viboral</td>
    <td>$140.000</td>
    <td>46,6 Km</td>
    <td>1H 3 minutos</td>
    <td>Tunel Occidente</td>
</tr>

<tr>
    <td>Carolina del Príncipe</td>
    <td>$330.000</td>
    <td>101 Km</td>
    <td>2H 8 minutos</td>
    <td>Barbosa – Gomez Plata</td>
</tr>

<tr>
    <td>Caucasia</td>
    <td>$509.000</td>
    <td>309 Km</td>
    <td>7H 8 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Chigorodó</td>
    <td>$970.000</td>
    <td>285 Km</td>
    <td>5H 50 minutos</td>
    <td>Occidente</td>
</tr>

<tr>
    <td>Cisneros</td>
    <td>$180.000</td>
    <td>84,8 Km</td>
    <td>1H 51 minutos</td>
    <td>Barbosa – Pto. Berrio</td>
</tr>

<tr>
    <td>Ciudad Bolívar</td>
    <td>$357.800</td>
    <td>105 Km</td>
    <td>2H 18 minutos</td>
    <td>Carretera 60</td>
</tr>

<tr>
    <td>Cocorná</td>
    <td>$220.000</td>
    <td>80,8 Km	</td>
    <td>1H 32 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Concepción</td>
    <td>$138.000</td>
    <td>62,9 Km</td>
    <td>1H 52 minutos</td>
    <td>Barbosa – concepción</td>
</tr>

<tr>
    <td>Concordia</td>
    <td>$204.000</td>
    <td>93,5 Km	</td>
    <td>2H 12 minutos</td>
    <td>Carretera 60</td>
</tr>

<tr>
    <td>Copacabana</td>
    <td>Por taxímetro</td>
    <td>17,7 Km</td>
    <td>27 minutos</td>
    <td>Autopista Norte</td>
</tr>

<tr>

    <td>Dabeiba	</td>
    <td>$500.000</td>
    <td>175 km	</td>
    <td>3H 52 minutos</td>
    <td>Carretera 62</td>
</tr>

<tr>
    <td>Donmatías</td>
    <td>$140.000</td>
    <td>51,3 Km</td>
    <td>1H 10 minutos</td>
    <td>Carretera 25</td>
</tr>


<tr>
    <td>Doradal</td>
    <td>$414.500</td>
    <td>171 km</td>
    <td>3H 11 minutos</td>
    <td>Autopista Medellín – Bogotá</td>
</tr>

<tr>
    <td>Doradal</td>
    <td>$414.500</td>
    <td>171 km</td>
    <td>3H 11 minutos</td>
    <td>Autopista Medellín – Bogotá</td>
</tr>

<tr>
    <td>Ebéjico	</td>
    <td>$200.000</td>
    <td>44,2 Km</td>
    <td>1H 15 minutos</td>
    <td>Medellín – ebejico</td>
</tr>

<tr>
    <td>El Bagre</td>
    <td>$1.210.500</td>
    <td>207 Km</td>
    <td>4H 48 minutos</td>
    <td>Yolombó – Yalí</td>
</tr>

<tr>
    <td>El Biscocho	</td>
    <td>$350.400</td>
    <td>105 Km</td>
    <td>2H 20 minutos</td>
    <td>Autopista Medellín – Bogotá</td>
</tr>

<tr>
    <td>El Peñol</td>
    <td>$170.000</td>
    <td>66,6 Km</td>
    <td>1H 21 minutos</td>
    <td>Marinilla – El peñol</td>
</tr>

<tr>
    <td>El Retiro</td>
    <td>$ 90.000</td>
    <td>32,4 Km</td>
    <td>46 minutos</td>
    <td>Palmas</td>
</tr>

<tr>
    <td>El Retiro</td>
    <td>$ 90.000</td>
    <td>32,4 Km</td>
    <td>46 minutos</td>
    <td>Palmas</td>

</tr>

<tr>
    <td>El Santuario</td>
    <td>$140.000</td>
    <td>60,2 Km	</td>
    <td>1H 7 minutos</td>
    <td>Autopista Medellín – Bogotá</td>
</tr>

<tr>
    <td>El Santuario</td>
    <td>$140.000</td>
    <td>60,2 Km</td>
    <td>1H 7 minutos</td>
    <td>Autopista Medellín – Bogotá</td>
</tr>


<tr>
    <td>Entrerríos</td>
    <td>$140.000</td>
    <td>55,1 Km</td>
    <td>1H 25 minutos</td>
    <td>Medellín – San Pedro</td>
</tr>

<tr>
    <td>Envigado</td>
    <td>Por taxímetro</td>
    <td>10,9 km</td>
    <td>23 minutos</td>
    <td>Autopista Sur</td>
</tr>

<tr>
    <td>Fredonia</td>
    <td>$180.000</td>
    <td>55,6 Km</td>
    <td>1H 24 minutos</td>
    <td>Fredonia – Medellín</td>
</tr>

<tr>
    <td>Frontino</td>
    <td>$560.000</td>
    <td>142 Km</td>
    <td>3H 15 minutos</td>
    <td>Occidente</td>
</tr>

<tr>
    <td>Giraldo</td>
    <td>Sin información</td>
    <td>103 Km</td>
    <td>2 h y 44 min</td>
    <td>Occidente</td>
</tr>

<tr>
    <td>Girardota</td>
    <td>Por taxímetro</td>
    <td>26,3 Km</td>
    <td>30 minutos</td>
    <td>Autopista Norte</td>
</tr>

<tr>
    <td>Gómez Plata	</td>
    <td>$330.000</td>
    <td>88,7 Km</td>
    <td>1H 50 minutos</td>
    <td>Barbosa – Gomez Plata</td>
</tr>

<tr>
    <td>Granada</td>
    <td>$220.000</td>
    <td>73 Km</td>
    <td>1H 24 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Guadalupe</td>
    <td>$350.000</td>
    <td>121 Km</td>
    <td>2H 35 minutos</td>
    <td>Barbosa – Gomez Plata</td>
</tr>

<tr>
    <td>Guarne</td>
    <td>$ 90.000</td>
    <td>32,3 Km	</td>
    <td>36 minutos</td>
    <td>Medellín – Bogota</td>
</tr>


<tr>
    <td>Guatapé</td>
    <td>$210.000</td>
    <td>81,7 Km	</td>
    <td>1H 47 minutos</td>
    <td>Marinilla – El peñol</td>
</tr>

<tr>
    <td>Heliconia</td>
    <td>$150.000</td>
    <td>41,5 Km</td>
    <td>1H 27 minutos</td>
    <td>San antonio de prado</td>
</tr>

<tr>
    <td>Hispania</td>
    <td>$300.000</td>
    <td>97,4 Km</td>
    <td>2H 6 minutos</td>
    <td>Carretera 60</td>
</tr>

<tr>
    <td>Hoyorico</td>
    <td>$214.900</td>
    <td>70,2 Km</td>
    <td>1H 3 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Itagüí	</td>
    <td>Por taxímetro</td>
    <td>12,9 Km</td>
    <td>23 minutos</td>
    <td>Autopista Sur</td>
</tr>


<tr>
    <td>Ituango</td>
    <td>$700.000</td>
    <td>195 Km</td>
    <td>4H 16 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Jardín</td>
    <td>$507.000	</td>
    <td>139 Km</td>
    <td>3H 35 minutos</td>
    <td>Carretera 60</td>
</tr>

<tr>
    <td>Jericó</td>
    <td>$230.000</td>
    <td>113 Km</td>
    <td>2H 46 minutos</td>
    <td>Via Jericó</td>
</tr>

<tr>
    <td>La Ceja	</td>
    <td>$120.000</td>
    <td>42,8 Km</td>
    <td>58 minutos</td>
    <td>Via las palmas</td>
</tr>

<tr>
    <td>La Estrella	</td>
    <td>Por taxímetro</td>
    <td>15, 3 Km</td>
    <td>18 minutos</td>
    <td>Autopista Sur</td>
</tr>

<tr>
    <td>La fe</td>
    <td>$ 96.400</td>
    <td>29,4 km	</td>
    <td>40 minutos</td>
    <td>Via Palmas</td>
</tr>

<tr>
    <td>La Pintada</td>
    <td>$212.000</td>
    <td>78,8 Km</td>
    <td>1H 55 minutos</td>
    <td>Carretera 25</td>
</tr>
<tr>
    <td>La Unión</td>
    <td>$130.000</td>
    <td>57,1 Km	</td>
    <td>1h 22 minutos</td>
    <td>Via las palmas</td>
</tr>

<tr>
    <td>Llano Grande</td>
    <td>$110.000</td>
    <td>30 Km</td>
    <td>45 minutos</td>
    <td>Tunel Oriente</td>
</tr>

<tr>
    <td>Liborina</td>
    <td>$300.000</td>
    <td>78,9 km</td>
    <td>1H 56 minutos</td>
    <td>Carretera 62</td>
</tr>

<tr>
    <td>Maceo</td>
    <td>$450.000</td>
    <td>132 Km</td>
    <td>2H 46 minutos</td>
    <td>Barbosa – Pto. Berrio</td>
</tr>
<tr>
    <td>Marinilla</td>
    <td>$100.000</td>
    <td>48,2 km</td>
    <td>52 minutos</td>
    <td>Oriente</td>
</tr>

<tr>
    <td>Montebello</td>
    <td>$175.000</td>
    <td>52,7 Km	</td>
    <td>1H 20 minutos</td>
    <td>Santa Barbara – Caldas</td>
</tr>

<tr>
    <td>Mutatá</td>
    <td>$800.000</td>
    <td>227 Km</td>
    <td>4H 51 minutos</td>
    <td>Carretera 62</td>
</tr>

<tr>
    <td>Mutatá</td>
    <td>$800.000</td>
    <td>227 Km</td>
    <td>4H 51 minutos</td>
    <td>Carretera 62</td>
</tr>

<tr>
    <td>Nariño</td>
    <td>$500.000</td>
    <td>145 Km</td>
    <td>3H 38 minutos</td>
    <td>Carretera 56</td>
</tr>
<tr>
    <td>Nechí</td>
    <td>$1.000.000</td>
    <td>368 Km</td>
    <td>8h 19 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Necoclí</td>
    <td>$1.400.000</td>
    <td>380 Km</td>
    <td>7H 33 minutos</td>
    <td>Carretera 62</td>
</tr>
<tr>
    <td>Olaya</td>
    <td>$240.000</td>
    <td>71,2 km</td>
    <td>1h 45 minutos</td>
    <td>Carretera 62</td>
</tr>
<tr>
    <td>Peque</td>
    <td>$580.000</td>
    <td>200 Km</td>
    <td>5H 28 minutos</td>
    <td>Occidente</td>
</tr>
<tr>
    <td>Pueblorrico</td>
    <td>$229.000</td>
    <td>115 Km</td>
    <td>3H 1 minuto</td>
    <td>Carretera 60</td>
</tr>

<tr>
    <td>Puerto Berrío</td>
    <td>$610.000</td>
    <td>183 Km</td>
    <td>3H 44 minutos</td>
    <td>Barbosa – Pto. Berrio</td>
</tr>
<tr>
    <td>Puerto Nare</td>
    <td>$500.000</td>
    <td>226 Km</td>
    <td>4H 47 minutos</td>
    <td>Autop. Medellín Bogota</td>
</tr>
<tr>
    <td>Puerto Triunfo</td>
    <td>$450.000</td>
    <td>185 Km </td>
    <td>3H 17 minutos</td>
    <td>Medellín – Bogota</td>
</tr>
<tr>
    <td>Remedios</td>
    <td>$500.000</td>
    <td>189 Km</td>
    <td>3H 41 minutos</td>
    <td>yolombo, yalí</td>
</tr>
<tr>
    <td>Rionegro</td>
    <td>$120.000</td>
    <td>33,4 Km</td>
    <td>43 minutos	</td>
    <td>Tunel Oriente</td>
</tr>

<tr>
    <td>Rionegro</td>
    <td>$120.000</td>
    <td>33,4 Km</td>
    <td>43 minutos</td>
    <td>Tunel Oriente</td>
</tr>

<tr>
    <td>Sabanalarga</td>
    <td>$450.000</td>
    <td>114 Km</td>
    <td>3H 27 minutos</td>
    <td>Carretera 62</td>
</tr>

<tr>
    <td>Sabaneta</td>
    <td>Por taxímetro</td>
    <td>14,5 Km	</td>
    <td>27 minutos</td>
    <td>Autopista Sur</td>
</tr>
<tr>
    <td>Salgar</td>
    <td>$300.000</td>
    <td>94,5 Km</td>
    <td>2H 5 minutos</td>
    <td>Carretera 60</td>
</tr>
<tr>
    <td>San Andrés de Cuerquia</td>
    <td>$350.000</td>
    <td>137 Km</td>
    <td>2H 51 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>San Carlos</td>
    <td>$400.000</td>
    <td>114 Km</td>
    <td>3H</td>
    <td>San Carlos – Granada</td>
</tr>
<tr>
    <td>San Felix</td>
    <td>$ 74.000</td>
    <td>17,8 km</td>
    <td>33 minutos</td>
    <td>Medellín – San Pedro</td>
</tr>
<tr>
    <td>San Francisco</td>
    <td>$300.000</td>
    <td>106 Km</td>
    <td>2H 2 minutos</td>
    <td>Medellín – Bogota</td>
</tr>

<tr>
    <td>San Jerónimo</td>
    <td>$175.000</td>
    <td>38,2 Km</td>
    <td>52 minutos</td>
    <td>Occidente</td>
</tr>

<tr>
    <td>San José de la Montaña</td>
    <td>$270.000</td>
    <td>142 Km</td>
    <td>3H 11 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>San Luis</td>
    <td>$300.000</td>
    <td>133 Km</td>
    <td>2H 29 minutos</td>
    <td>Medellín – Bogota</td>
</tr>
<tr>
    <td>San Pablo (porce)</td>
    <td>$267.000</td>
    <td>78,5 Km	</td>
    <td>1H 56 minutos</td>
    <td>Barbosa -Pto Berrio</td>
</tr>
<tr>
    <td>San Pedro de los Milagros</td>
    <td>$105.000</td>
    <td>38 Km</td>
    <td>1H 3 minutos</td>
    <td>Medellín – San Pedro</td>
</tr>
<tr>
    <td>San Pedro de Urabá</td>
    <td>$1.100.000</td>
    <td>388 Km</td>
    <td>8H 5 minutos</td>
    <td>Carretera 62</td>
</tr>
<tr>
    <td>San Rafael</td>
    <td>$300.000</td>
    <td>108 km</td>
    <td>2H 2 minutos</td>
    <td>Guatape San Rafael</td>
</tr>

<tr>
    <td>San Roque</td>
    <td>$350.000</td>
    <td>106 Km</td>
    <td>2H 22 minutos</td>
    <td>Barbosa -Pto Berrio</td>
</tr>

<tr>
    <td>San Vicente</td>
    <td>$130.000</td>
    <td>51,4 Km</td>
    <td>1H 4 minutos</td>
    <td>Tunel Oriente</td>
</tr>

<tr>
    <td>Santa Bárbara</td>
    <td>$130.000</td>
    <td>52,4 km</td>
    <td>1H 14 minutos</td>
    <td>Carretera 25</td>
</tr>
<tr>
    <td>Santa Fe de Antioquia</td>
    <td>$200.000</td>
    <td>56,7 Km</td>
    <td>1H 18 minutos</td>
    <td>Occidente</td>
</tr>
<tr>
    <td>Santa Rosa de Osos</td>
    <td>$190.000</td>
    <td>78,1 Km	</td>
    <td>1H 42 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Santo Domingo</td>
    <td>$250.000</td>
    <td>70,3 Km	</td>
    <td>1H 27 minutos</td>
    <td>Barbosa – Santo Domingo</td>
</tr>

<tr>
    <td>Santo Domingo</td>
    <td>$250.000</td>
    <td>70,3 Km	</td>
    <td>1H 27 minutos</td>
    <td>Barbosa – Santo Domingo</td>
</tr>

<tr>
    <td>Santuario</td>
    <td>$174.200</td>
    <td>58,2 Km</td>
    <td>1H 11 minutos</td>
    <td>Tunen oriente</td>
</tr>
<tr>
    <td>Segovia</td>
    <td>$600.000</td>
    <td>198 Km</td>
    <td>4H 3 minutos</td>
    <td>Yolombo, yalí</td>
</tr>

<tr>
    <td>Sonsón</td>
    <td>$220.000</td>
    <td>111 Km</td>
    <td>2H 40 minutos</td>
    <td>Carretera 56</td>
</tr>

<tr>
    <td>Sopetrán</td>
    <td>$170.000</td>
    <td>49 Km</td>
    <td>1H 10 minutos</td>
    <td>Occidente</td>
</tr>

<tr>
    <td>Támesis</td>
    <td>$280.000</td>
    <td>111 Km</td>
    <td>2H 42 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Tarazá</td>
    <td>$445.000</td>
    <td>223 km</td>
    <td>4H 51 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Tarso</td>
    <td>$240.000</td>
    <td>101 Km</td>
    <td>2H 21 minutos</td>
    <td>Carretera 60</td>
</tr>

<tr>
    <td>Titiribí</td>
    <td>$130.000</td>
    <td>57,3 Km</td>
    <td>1H 20 minutos</td>
    <td>Amagá – Caldas</td>
</tr>

<tr>
    <td>Toledo</td>
    <td>$500.000</td>
    <td>174 km</td>
    <td>3H 51 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Turbo</td>
    <td>$1.100.000</td>
    <td>340 Km</td>
    <td>6H 52 minutos</td>
    <td>Carretera 62</td>
</tr>

<tr>
    <td>Uramita</td>
    <td>$450.000</td>
    <td>140 Km</td>
    <td>3H 4minutos</td>
    <td>Carretera 62</td>
</tr>
<tr>
    <td>Urrao</td>
    <td>$440.000</td>
    <td>159 km</td>
    <td>3H 57 minutos</td>
    <td>Urrao – Betulia</td>
</tr>

<tr>
    <td>Valdivia</td>
    <td>$350.000</td>
    <td>181 Km</td>
    <td>4H 10 minutos</td>
    <td>Carretera 25</td>
</tr>

      <tr>
    <td>Valparaíso</td>
    <td>$227.000</td>
    <td>101 Km</td>
    <td>2H 23 minutos</td>
    <td>Carretera 25</td>
      </tr>
      <tr>
    <td>Vegachí</td>
    <td>$480.000</td>
    <td>145 Km</td>
    <td>2H 45 minutos</td>
    <td>yolombo, yalí</td>
      </tr>
      <tr>
    <td>Venecia</td>
    <td>$180.000</td>
    <td>58,6 Km</td>
    <td>1H 32 minutos</td>
    <td>Fredonia – Camilo C</td>
      </tr>
      <tr>
    <td>Versalles</td>
    <td>$106.000/td>
    <td>41 Km</td>
    <td>55 minutos</td>
    <td>Santa Barbara – Caldas</td>
      </tr>

      <tr>
    <td>Yalí</td>
    <td>$ 400.000</td>
    <td>129 Km</td>
    <td>2H 26 minutos</td>
    <td>yolombo, yalí</td>
      </tr>

      <tr>
    <td>Yarumal</td>
    <td>$ 300.000</td>
    <td>122 Km</td>
    <td>2H 30 minutos</td>
    <td>yolombo,Barbosa</td>
      </tr>

      <tr>
    <td>Yolombó</td>
    <td>$ 290.000</td>
    <td>99 Km</td>
    <td>1H 54 minutos</td>
    <td>yolombo,Barbosa</td>
      </tr>

      <tr>
          <td>Yondó</td>
          <td>$ 700.000</td>
          <td>280 Km</td>
          <td>6H 15 minutos</td>
          <td>Barbosa -Pto. Berrio</td>
      </tr>

      <tr>      
          <td>Zaragoza</td>
          <td>$ 900.000</td>
          <td>252 Km</td>
          <td>6H 27 minutos</td>
          <td>Zaragoza -Remedios</td>
      </tr>

                </tbody>
                

            
            </table><br><br>
            
            <h4>TARIFAS TAXI VIAJE OCASIONAL A CIUDADES PRINCIPALES</h4>
            <table  class="ciudades-principales wp-block-table">
                <thead>
                    <tr>
                        <th>Municipio</th>
                        <th>Valor en pesos</th>
                        <th>Kilometraje</th>
                        <th>Tiempo</th>
                        <th>Via</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>Anserma</td>
                        <td>$449.300</td>
                        <td>183 Km</td>
                        <td>4H 29 minutos</td>
                        <td>Carretera 25</td>
                    </tr>

                    <tr>
                        <td>Armenia - Quindio</td>
                        <td>$773.500</td>
                        <td>257 Km</td>
                        <td>6H 3 minutos</td>
                        <td>Carretera 25</td>
                    </tr>

                    <tr>
                        <td>Barbosa - Santander</td>
                        <td>$1.142.250</td>
                        <td>443 Km</td>
                        <td>8H 51 minutos</td>
                        <td>Barbosa - Pto.Berrio</td>
                    </tr>

                    <tr>
                        <td>Barranquilla</td>
                        <td>$954.900</td>
                        <td>776 Km</td>
                        <td>14H 55 minutos</td>
                        <td>Carretera 25</td>
                    </tr>

                    <tr>
                        <td>BodotáDC</td>
                        <td>$978.900</td>
                        <td>416 Km </td>
                        <td>8H 2 minutos</td>
                        <td>Autopista Medellin - Bogotá</td>
                    </tr>

                    <tr>
                        <td>Bucaramanga</td>
                        <td>$1.516.000</td>
                        <td>510 Km</td>
                        <td>9H 33 minutos</td>
                        <td>Occidente</td>
                    </tr>

                    <tr>
                        <td>Buenaventura</td>
                        <td>$1.289.900</td>
                        <td>468 Km</td>
                        <td>9H 20 minutos</td>
                        <td>Carretera 25</td>
                    </tr>

                    <tr>
    <td>Buga – Valle</td>
    <td>$813.800</td>
    <td>356 km</td>
    <td>7H 19 minutos</td>
    <td>Occidente</td>
</tr>

<tr>
    <td>Caicedonia – Valle del Cauca</td>
    <td>$734.100</td>
    <td>294 Km</td>
    <td>6H 46 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Cali –Valle del Cauca</td>
    <td>$1.134.700</td>
    <td>422 Km</td>
    <td>8H 24 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Careté -Cordoba</td>
    <td>$1.003.000</td>
    <td>430 km</td>
    <td>8H 46 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Cartagena</td>
    <td>$1.399.700</td>
    <td>643 km</td>
    <td>13H 6 minutos</td>
    <td>Carretera 25</td>
</tr>
<tr>
    <td>Cartago– Valle del Cauca</td>
    <td>$657.000</td>
    <td>243 km</td>
    <td>5H 41 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Cerritos– Risaralda	</td>
    <td>$522.900</td>
    <td>233 Km</td>
    <td>5H 28 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Chiquinquirá– Boyacá</td>
    <td>$1.284.100</td>
    <td>400 km</td>
    <td>8H 48 minutos</td>
    <td>Barbosa – Pto. Berrio</td>
</tr>

<tr>
    <td>Coveñas– Sucre</td>
    <td>$1.361.500</td>
    <td>502 Km</td>
    <td>10H 6 minutos</td>
    <td>Carretera 25</td>
</tr>


<tr>
    <td>Cucuta</td>
    <td>$1.241.900</td>
    <td>582 Km</td>
    <td>12H 22 minutos</td>
    <td>Barbosa – Pto. Berrio</td>
</tr>

<tr>
    <td>Girardot– Cundinamarca</td>
    <td>$1.053.000</td>
    <td>414 km</td>
    <td>6H 44 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Guaduas- Cundinamarca</td>
    <td>$648.900</td>
    <td>294 Km</td>
    <td>5H 3 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Honda</td>
    <td>$552.600</td>
    <td>278 Km</td>
    <td>4H 48 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Ibagué -Tolima</td>
    <td>$519.000</td>
    <td>416 Km</td>
    <td>7H 22 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Ipiales– Nariño	</td>
    <td>$1.924.400</td>
    <td>888 Km</td>
    <td>17H 36 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Ladorada – Caldas</td>
    <td>$502.400</td>
    <td>242 km</td>
    <td>4H 14 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Manizales- Caldas</td>
    <td>$524.600</td>
    <td>195 km</td>
    <td>4H 27 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Melgar –Tolima</td>
    <td>$1.134.600</td>
    <td>436 Km</td>
    <td>6H 25 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Montería- Córdoba</td>
    <td>$966.900</td>
    <td>451 km</td>
    <td>9H 20 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Neiva –Huila</td>
    <td>$1.391.600</td>
    <td>578 km</td>
    <td>9H 1 minuto</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Pamplona– Norte de Santander</td>
    <td>$924.400</td>
    <td>506 km</td>
    <td>10H 27 minutos</td>
    <td>Barbosa – Pto. Berrio</td>
</tr>

<tr>
    <td>Pasto -Nariño</td>
    <td>$1.618.500</td>
    <td>801 Km</td>
    <td>15H 30 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Pereira– Risaralda</td>
    <td>$575.500</td>
    <td>212 Km</td>
    <td>4H 52 minutos</td>
    <tdCarretera 25></td>
</tr>

<tr>
    <td>PlanetaRica – Córdoba</td>
    <td>$815.500</td>
    <td>360 Km</td>
    <td>7H 56 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Puerto Nare</td>
    <td>$574.700</td>
    <td>256 Km</td>
    <td>4H 47 minutos</td>
    <td>Autopista Medellín – Bogotá</td>
</tr>

<tr>
    <td>Puerto Salgar – Cundinamarca</td>
    <td>$714.500</td>
    <td>239 Km</td>
    <td>3H 57 minutos</td>
    <td>3H 57 minutos</td>
</tr>

<tr>
    <td>Quibdó –Chocó</td>
    <td>$1.404.900</td>
    <td>230 Km</td>
    <td>6H 18 minutos</td>
    <td>Quibdó – C Bolivar</td>
</tr>

<tr>
    <td>Riohacha– Guajira</td>
    <td>$ 1.924.400</td>
    <td>892 Km</td>
    <td>15H 3 minutos</td>
    <td>Carretera 45</td>
</tr>

<tr>

    <td>Riosucio- Caldas</td>
    <td>$411.500</td>
    <td>152 km</td>
    <td>3H 21 minutos</td>
    <td>Carretera 25</td>
</tr>


<tr>
    <td>Rumichaca- Nariño</td>
    <td>$2.110.600</td>
    <td>766 Km</td>
    <td>16H 37 minutos</td>
    <td>Carretera 62</td>
</tr>

<tr>
    <td>Santa Marta – Magdalena</td>
    <td>$1.622.200</td>
    <td>836 Km</td>
    <td>13H 20 minutos</td>
    <td>Carretera 45</td>
</tr>

<tr>
    <td>Santa Rosa de Cabal	</td>
    <td>$532.000</td>
    <td>199 Km</td>
    <td>4H 25 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Sincelejo – Sucre</td>
    <td>$1.106.100</td>
    <td>477 km</td>
    <td>9H 50 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Supía – Caldas</td>
    <td>$350.400</td>
    <td>140 Km</td>
    <td>3H 10 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Tolú – Sucre</td>
    <td>$1.143.500</td>
    <td>511 Km</td>
    <td>10H 21 minutos</td>
    <td>Carretera 25</td>
</tr>

<tr>
    <td>Tunja – Boyacá</td>
    <td>$987.000</td>
    <td>421 Km</td>
    <td>9H 4 minutos</td>
    <td>Barbosa – Pto. Berrio</td>
</tr>

<tr>
    <td>Valledupar – César</td>
    <td>$2.024.500</td>
    <td>747 km</td>
    <td>11H 54 minutos</td>
    <td>Carretera 45</td>
</tr>

<tr>
    <td>Villa de Leiva – Boyacá</td>
    <td>$1.455.300</td>
    <td>403 Km</td>
    <td>9H 6 minutos</td>
    <td>Barbosa – Pto. Berrio</td>
</tr>

<tr>
    <td>Villavicencio – Meta</td>
    <td>$1.394.000</td>
    <td>534 Km</td>
    <td>10H 34 minutos</td>
    <td>Medellín – Bogotá</td>
</tr>

<tr>
    <td>Virginia – Risaralda</td>
    <td>$542.400</td>
    <td>216 km</td>
    <td>4H 53 minutos</td>
    <td>Carretera 25</td>
</tr>


       </tbody>


            </table>

            <br>
        </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
  <!--fin contenido tarifas-->
   @endsection
    
 