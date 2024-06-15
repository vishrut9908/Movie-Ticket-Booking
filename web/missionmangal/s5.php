<!DOCTYPE html>
<html>
<head>
<title>Cinepolis screen1</title>

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr-custom.js"></script>
</head>
<body>
	<!--<video width="320" height="240" controls>
  		<source src="spiderman.mp4" type="video/mp4">
  		<source src="spiderman.ogg" type="video/ogg">
		Your browser does not support the video tag.
	</video>-->
	<br>
	<br>
	<div class="container">
			<div class="cube">
				<div class="cube__side cube__side--front"></div>
				<div class="cube__side cube__side--back">
					<div class="screen">
						<div class="video">
							<video class="video-player" src="missionmangal.mp4"  poster="missionmangal.jpg">
								<source src="missionmangal.ogg" type='video/ogg; codecs="theora, vorbis"'>
								<source src="missionmangal.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
								<p>Sorry, but your browser does not support this video format.</p>
							</video>
							<button class="action action--play action--shown" aria-label="Play Video"></button>
						</div>
						<div class="intro intro--shown">
							<div class="intro__side">
								<h2 class="intro__title">
									<span class="intro__up">Cinepolis <em>presents</em></span>
									<span class="intro__down">Mission Mangal <span class="intro__partial"><em>by</em> <a href="#">Fox Star Studios</a></span></span>
								</h2>
							</div>
							<div class="intro__side">
								<button class="action action--seats">Select your seats</button>
							</div>
						</div>
					</div>
				</div>
				<div class="cube__side cube__side--left"></div>
				<div class="cube__side cube__side--right"></div>
				<div class="cube__side cube__side--top"></div>
				<div class="rows rows--large">
					<div class="row">
						<div data-seat="A1" class="row__seat"></div>
						<div data-seat="A2" class="row__seat"></div>
						<div data-seat="A3" class="row__seat"></div>
						<div data-seat="A4" class="row__seat"></div>
						<div data-seat="A5" class="row__seat"></div>
						<div data-seat="A6" class="row__seat"></div>
						<div data-seat="A7" class="row__seat"></div>
						<div data-seat="A8" class="row__seat"></div>
						<div data-seat="A9" class="row__seat"></div>
						<div data-seat="A10" class="row__seat"></div>
						<div data-seat="A11" class="row__seat"></div>
						<div data-seat="A12" class="row__seat"></div>
						<div data-seat="A13" class="row__seat"></div>
						<div data-seat="A14" class="row__seat"></div>
						<div data-seat="A15" class="row__seat"></div>
						<div data-seat="A16" class="row__seat"></div>
						<div data-seat="A17" class="row__seat"></div>
						<div data-seat="A18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="B1" class="row__seat"></div>
						<div data-seat="B2" class="row__seat"></div>
						<div data-seat="B3" class="row__seat"></div>
						<div data-seat="B4" class="row__seat"></div>
						<div data-seat="B5" class="row__seat"></div>
						<div data-seat="B6" class="row__seat"></div>
						<div data-seat="B7" class="row__seat"></div>
						<div data-seat="B8" class="row__seat"></div>
						<div data-seat="B9" class="row__seat"></div>
						<div data-seat="B10" class="row__seat"></div>
						<div data-seat="B11" class="row__seat"></div>
						<div data-seat="B12" class="row__seat"></div>
						<div data-seat="B13" class="row__seat"></div>
						<div data-seat="B14" class="row__seat"></div>
						<div data-seat="B15" class="row__seat"></div>
						<div data-seat="B16" class="row__seat"></div>
						<div data-seat="B17" class="row__seat"></div>
						<div data-seat="B18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="C1" class="row__seat"></div>
						<div data-seat="C2" class="row__seat"></div>
						<div data-seat="C3" class="row__seat"></div>
						<div data-seat="C4" class="row__seat"></div>
						<div data-seat="C5" class="row__seat"></div>
						<div data-seat="C6" class="row__seat"></div>
						<div data-seat="C7" class="row__seat"></div>
						<div data-seat="C8" class="row__seat"></div>
						<div data-seat="C9" class="row__seat"></div>
						<div data-seat="C10" class="row__seat"></div>
						<div data-seat="C11" class="row__seat"></div>
						<div data-seat="C12" class="row__seat"></div>
						<div data-seat="C13" class="row__seat"></div>
						<div data-seat="C14" class="row__seat"></div>
						<div data-seat="C15" class="row__seat"></div>
						<div data-seat="C16" class="row__seat"></div>
						<div data-seat="C17" class="row__seat"></div>
						<div data-seat="C18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="D1" class="row__seat"></div>
						<div data-seat="D2" class="row__seat"></div>
						<div data-seat="D3" class="row__seat"></div>
						<div data-seat="D4" class="row__seat"></div>
						<div data-seat="D5" class="row__seat"></div>
						<div data-seat="D6" class="row__seat"></div>
						<div data-seat="D7" class="row__seat"></div>
						<div data-seat="D8" class="row__seat"></div>
						<div data-seat="D9" class="row__seat"></div>
						<div data-seat="D10" class="row__seat"></div>
						<div data-seat="D11" class="row__seat"></div>
						<div data-seat="D12" class="row__seat"></div>
						<div data-seat="D13" class="row__seat"></div>
						<div data-seat="D14" class="row__seat"></div>
						<div data-seat="D15" class="row__seat"></div>
						<div data-seat="D16" class="row__seat"></div>
						<div data-seat="D17" class="row__seat"></div>
						<div data-seat="D18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="E1" class="row__seat"></div>
						<div data-seat="E2" class="row__seat"></div>
						<div data-seat="E3" class="row__seat"></div>
						<div data-seat="E4" class="row__seat"></div>
						<div data-seat="E5" class="row__seat"></div>
						<div data-seat="E6" class="row__seat"></div>
						<div data-seat="E7" class="row__seat"></div>
						<div data-seat="E8" class="row__seat"></div>
						<div data-seat="E9" class="row__seat"></div>
						<div data-seat="E10" class="row__seat"></div>
						<div data-seat="E11" class="row__seat"></div>
						<div data-seat="E12" class="row__seat"></div>
						<div data-seat="E13" class="row__seat"></div>
						<div data-seat="E14" class="row__seat"></div>
						<div data-seat="E15" class="row__seat"></div>
						<div data-seat="E16" class="row__seat"></div>
						<div data-seat="E17" class="row__seat"></div>
						<div data-seat="E18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="F1" class="row__seat"></div>
						<div data-seat="F2" class="row__seat"></div>
						<div data-seat="F3" class="row__seat"></div>
						<div data-seat="F4" class="row__seat"></div>
						<div data-seat="F5" class="row__seat"></div>
						<div data-seat="F6" class="row__seat"></div>
						<div data-seat="F7" class="row__seat"></div>
						<div data-seat="F8" class="row__seat"></div>
						<div data-seat="F9" class="row__seat"></div>
						<div data-seat="F10" class="row__seat"></div>
						<div data-seat="F11" class="row__seat"></div>
						<div data-seat="F12" class="row__seat"></div>
						<div data-seat="F13" class="row__seat"></div>
						<div data-seat="F14" class="row__seat"></div>
						<div data-seat="F15" class="row__seat"></div>
						<div data-seat="F16" class="row__seat"></div>
						<div data-seat="F17" class="row__seat"></div>
						<div data-seat="F18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="G1" class="row__seat"></div>
						<div data-seat="G2" class="row__seat"></div>
						<div data-seat="G3" class="row__seat"></div>
						<div data-seat="G4" class="row__seat"></div>
						<div data-seat="G5" class="row__seat"></div>
						<div data-seat="G6" class="row__seat"></div>
						<div data-seat="G7" class="row__seat"></div>
						<div data-seat="G8" class="row__seat"></div>
						<div data-seat="G9" class="row__seat"></div>
						<div data-seat="G10" class="row__seat"></div>
						<div data-seat="G11" class="row__seat"></div>
						<div data-seat="G12" class="row__seat"></div>
						<div data-seat="G13" class="row__seat"></div>
						<div data-seat="G14" class="row__seat"></div>
						<div data-seat="G15" class="row__seat"></div>
						<div data-seat="G16" class="row__seat"></div>
						<div data-seat="G17" class="row__seat"></div>
						<div data-seat="G18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="H1" class="row__seat"></div>
						<div data-seat="H2" class="row__seat"></div>
						<div data-seat="H3" class="row__seat"></div>
						<div data-seat="H4" class="row__seat"></div>
						<div data-seat="H5" class="row__seat"></div>
						<div data-seat="H6" class="row__seat"></div>
						<div data-seat="H7" class="row__seat"></div>
						<div data-seat="H8" class="row__seat"></div>
						<div data-seat="H9" class="row__seat"></div>
						<div data-seat="H10" class="row__seat"></div>
						<div data-seat="H11" class="row__seat"></div>
						<div data-seat="H12" class="row__seat"></div>
						<div data-seat="H13" class="row__seat"></div>
						<div data-seat="H14" class="row__seat"></div>
						<div data-seat="H15" class="row__seat"></div>
						<div data-seat="H16" class="row__seat"></div>
						<div data-seat="H17" class="row__seat"></div>
						<div data-seat="H18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="I1" class="row__seat"></div>
						<div data-seat="I2" class="row__seat"></div>
						<div data-seat="I3" class="row__seat"></div>
						<div data-seat="I4" class="row__seat"></div>
						<div data-seat="I5" class="row__seat"></div>
						<div data-seat="I6" class="row__seat"></div>
						<div data-seat="I7" class="row__seat"></div>
						<div data-seat="I8" class="row__seat"></div>
						<div data-seat="I9" class="row__seat"></div>
						<div data-seat="I10" class="row__seat"></div>
						<div data-seat="I11" class="row__seat"></div>
						<div data-seat="I12" class="row__seat"></div>
						<div data-seat="I13" class="row__seat"></div>
						<div data-seat="I14" class="row__seat"></div>
						<div data-seat="I15" class="row__seat"></div>
						<div data-seat="I16" class="row__seat"></div>
						<div data-seat="I17" class="row__seat"></div>
						<div data-seat="I18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="J1" class="row__seat"></div>
						<div data-seat="J2" class="row__seat"></div>
						<div data-seat="J3" class="row__seat"></div>
						<div data-seat="J4" class="row__seat"></div>
						<div data-seat="J5" class="row__seat"></div>
						<div data-seat="J6" class="row__seat"></div>
						<div data-seat="J7" class="row__seat"></div>
						<div data-seat="J8" class="row__seat"></div>
						<div data-seat="J9" class="row__seat"></div>
						<div data-seat="J10" class="row__seat"></div>
						<div data-seat="J11" class="row__seat"></div>
						<div data-seat="J12" class="row__seat"></div>
						<div data-seat="J13" class="row__seat"></div>
						<div data-seat="J14" class="row__seat"></div>
						<div data-seat="J15" class="row__seat"></div>
						<div data-seat="J16" class="row__seat"></div>
						<div data-seat="J17" class="row__seat"></div>
						<div data-seat="J18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="K1" class="row__seat"></div>
						<div data-seat="K2" class="row__seat"></div>
						<div data-seat="K3" class="row__seat"></div>
						<div data-seat="K4" class="row__seat"></div>
						<div data-seat="K5" class="row__seat"></div>
						<div data-seat="K6" class="row__seat"></div>
						<div data-seat="K7" class="row__seat"></div>
						<div data-seat="K8" class="row__seat"></div>
						<div data-seat="K9" class="row__seat"></div>
						<div data-seat="K10" class="row__seat"></div>
						<div data-seat="K11" class="row__seat"></div>
						<div data-seat="K12" class="row__seat"></div>
						<div data-seat="K13" class="row__seat"></div>
						<div data-seat="K14" class="row__seat"></div>
						<div data-seat="K15" class="row__seat"></div>
						<div data-seat="K16" class="row__seat"></div>
						<div data-seat="K17" class="row__seat"></div>
						<div data-seat="K18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="L1" class="row__seat"></div>
						<div data-seat="L2" class="row__seat"></div>
						<div data-seat="L3" class="row__seat"></div>
						<div data-seat="L4" class="row__seat"></div>
						<div data-seat="L5" class="row__seat"></div>
						<div data-seat="L6" class="row__seat"></div>
						<div data-seat="L7" class="row__seat"></div>
						<div data-seat="L8" class="row__seat"></div>
						<div data-seat="L9" class="row__seat"></div>
						<div data-seat="L10" class="row__seat"></div>
						<div data-seat="L11" class="row__seat"></div>
						<div data-seat="L12" class="row__seat"></div>
						<div data-seat="L13" class="row__seat"></div>
						<div data-seat="L14" class="row__seat"></div>
						<div data-seat="L15" class="row__seat"></div>
						<div data-seat="L16" class="row__seat"></div>
						<div data-seat="L17" class="row__seat"></div>
						<div data-seat="L18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="M1" class="row__seat"></div>
						<div data-seat="M2" class="row__seat"></div>
						<div data-seat="M3" class="row__seat"></div>
						<div data-seat="M4" class="row__seat"></div>
						<div data-seat="M5" class="row__seat"></div>
						<div data-seat="M6" class="row__seat"></div>
						<div data-seat="M7" class="row__seat"></div>
						<div data-seat="M8" class="row__seat"></div>
						<div data-seat="M9" class="row__seat"></div>
						<div data-seat="M10" class="row__seat"></div>
						<div data-seat="M11" class="row__seat"></div>
						<div data-seat="M12" class="row__seat"></div>
						<div data-seat="M13" class="row__seat"></div>
						<div data-seat="M14" class="row__seat"></div>
						<div data-seat="M15" class="row__seat"></div>
						<div data-seat="M16" class="row__seat"></div>
						<div data-seat="M17" class="row__seat"></div>
						<div data-seat="M18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="N1" class="row__seat"></div>
						<div data-seat="N2" class="row__seat"></div>
						<div data-seat="N3" class="row__seat"></div>
						<div data-seat="N4" class="row__seat"></div>
						<div data-seat="N5" class="row__seat"></div>
						<div data-seat="N6" class="row__seat"></div>
						<div data-seat="N7" class="row__seat"></div>
						<div data-seat="N8" class="row__seat"></div>
						<div data-seat="N9" class="row__seat"></div>
						<div data-seat="N10" class="row__seat"></div>
						<div data-seat="N11" class="row__seat"></div>
						<div data-seat="N12" class="row__seat"></div>
						<div data-seat="N13" class="row__seat"></div>
						<div data-seat="N14" class="row__seat"></div>
						<div data-seat="N15" class="row__seat"></div>
						<div data-seat="N16" class="row__seat"></div>
						<div data-seat="N17" class="row__seat"></div>
						<div data-seat="N18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="O1" class="row__seat"></div>
						<div data-seat="O2" class="row__seat"></div>
						<div data-seat="O3" class="row__seat"></div>
						<div data-seat="O4" class="row__seat"></div>
						<div data-seat="O5" class="row__seat"></div>
						<div data-seat="O6" class="row__seat"></div>
						<div data-seat="O7" class="row__seat"></div>
						<div data-seat="O8" class="row__seat"></div>
						<div data-seat="O9" class="row__seat"></div>
						<div data-seat="O10" class="row__seat"></div>
						<div data-seat="O11" class="row__seat"></div>
						<div data-seat="O12" class="row__seat"></div>
						<div data-seat="O13" class="row__seat"></div>
						<div data-seat="O14" class="row__seat"></div>
						<div data-seat="O15" class="row__seat"></div>
						<div data-seat="O16" class="row__seat"></div>
						<div data-seat="O17" class="row__seat"></div>
						<div data-seat="O18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="P1" class="row__seat"></div>
						<div data-seat="P2" class="row__seat"></div>
						<div data-seat="P3" class="row__seat"></div>
						<div data-seat="P4" class="row__seat"></div>
						<div data-seat="P5" class="row__seat"></div>
						<div data-seat="P6" class="row__seat"></div>
						<div data-seat="P7" class="row__seat"></div>
						<div data-seat="P8" class="row__seat"></div>
						<div data-seat="P9" class="row__seat"></div>
						<div data-seat="P10" class="row__seat"></div>
						<div data-seat="P11" class="row__seat"></div>
						<div data-seat="P12" class="row__seat"></div>
						<div data-seat="P13" class="row__seat"></div>
						<div data-seat="P14" class="row__seat"></div>
						<div data-seat="P15" class="row__seat"></div>
						<div data-seat="P16" class="row__seat"></div>
						<div data-seat="P17" class="row__seat"></div>
						<div data-seat="P18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="Q1" class="row__seat"></div>
						<div data-seat="Q2" class="row__seat"></div>
						<div data-seat="Q3" class="row__seat"></div>
						<div data-seat="Q4" class="row__seat"></div>
						<div data-seat="Q5" class="row__seat"></div>
						<div data-seat="Q6" class="row__seat"></div>
						<div data-seat="Q7" class="row__seat"></div>
						<div data-seat="Q8" class="row__seat"></div>
						<div data-seat="Q9" class="row__seat"></div>
						<div data-seat="Q10" class="row__seat"></div>
						<div data-seat="Q11" class="row__seat"></div>
						<div data-seat="Q12" class="row__seat"></div>
						<div data-seat="Q13" class="row__seat"></div>
						<div data-seat="Q14" class="row__seat"></div>
						<div data-seat="Q15" class="row__seat"></div>
						<div data-seat="Q16" class="row__seat"></div>
						<div data-seat="Q17" class="row__seat"></div>
						<div data-seat="Q18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="R1" class="row__seat"></div>
						<div data-seat="R2" class="row__seat"></div>
						<div data-seat="R3" class="row__seat"></div>
						<div data-seat="R4" class="row__seat"></div>
						<div data-seat="R5" class="row__seat"></div>
						<div data-seat="R6" class="row__seat"></div>
						<div data-seat="R7" class="row__seat"></div>
						<div data-seat="R8" class="row__seat"></div>
						<div data-seat="R9" class="row__seat"></div>
						<div data-seat="R10" class="row__seat"></div>
						<div data-seat="R11" class="row__seat"></div>
						<div data-seat="R12" class="row__seat"></div>
						<div data-seat="R13" class="row__seat"></div>
						<div data-seat="R14" class="row__seat"></div>
						<div data-seat="R15" class="row__seat"></div>
						<div data-seat="R16" class="row__seat"></div>
						<div data-seat="R17" class="row__seat"></div>
						<div data-seat="R18" class="row__seat"></div>
					</div>
				</div>
				<!-- /rows -->
			</div><!-- /cube -->
		</div><!-- /container -->
		<div class="plan">
			<h3 class="plan__title">Seating Plan</h3>
			<div class="rows rows--mini">
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="A1 RS100" onclick="myFunction()"></div>
					<div class="row__seat tooltip" data-tooltip="A2 RS100" onclick="myFunction1()"></div>
					<div class="row__seat tooltip" data-tooltip="A3 RS100" onclick="myFunction2()"></div>
					<div class="row__seat tooltip" data-tooltip="A4 RS100" onclick="myFunction3()"></div>
					<div class="row__seat tooltip" data-tooltip="A5 RS100" onclick="myFunction4()"></div>
					<div class="row__seat tooltip" data-tooltip="A6 RS100" onclick="myFunction5()"></div>
					<div class="row__seat tooltip" data-tooltip="A7 RS100" onclick="myFunction6()"></div>
					<div class="row__seat tooltip" data-tooltip="A8 RS100" onclick="myFunction7()"></div>
					<div class="row__seat tooltip" data-tooltip="A9 RS100" onclick="myFunction8()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="A13 RS100" onclick="myFunction9()"></div>
					<div class="row__seat tooltip" data-tooltip="A14 RS100" onclick="myFunction10()"></div>
					<div class="row__seat tooltip" data-tooltip="A15 RS100" onclick="myFunction11()"></div>
					<div class="row__seat tooltip" data-tooltip="A16 RS100" onclick="myFunction12()"></div>
					<div class="row__seat tooltip" data-tooltip="A17 RS100" onclick="myFunction13()"></div>
					<div class="row__seat tooltip" data-tooltip="A18 RS100" onclick="myFunction14()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="B1 RS100" onclick="myFunction()"></div>
					<div class="row__seat tooltip" data-tooltip="B2 RS100" onclick="myFunction1()"></div>
					<div class="row__seat tooltip" data-tooltip="B3 RS100" onclick="myFunction2()"></div>
					<div class="row__seat tooltip" data-tooltip="B4 RS100" onclick="myFunction3()"></div>
					<div class="row__seat tooltip" data-tooltip="B5 RS100" onclick="myFunction4()"></div>
					<div class="row__seat tooltip" data-tooltip="B6 RS100" onclick="myFunction5()"></div>
					<div class="row__seat tooltip" data-tooltip="B7 RS100" onclick="myFunction6()"></div>
					<div class="row__seat tooltip" data-tooltip="B8 RS100" onclick="myFunction7()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="B11 RS100" onclick="myFunction8()"></div>
					<div class="row__seat tooltip" data-tooltip="B12 RS100" onclick="myFunction9()"></div>
					<div class="row__seat tooltip" data-tooltip="B13 RS100" onclick="myFunction10()"></div>
					<div class="row__seat tooltip" data-tooltip="B14 RS100" onclick="myFunction11()"></div>
					<div class="row__seat tooltip" data-tooltip="B15 RS100" onclick="myFunction12()"></div>
					<div class="row__seat tooltip" data-tooltip="B16 RS100" onclick="myFunction13()"></div>
					<div class="row__seat tooltip" data-tooltip="B17 RS100" onclick="myFunction14()"></div>
					<div class="row__seat tooltip" data-tooltip="B18 RS100" onclick="myFunction15()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="C1 RS100" onclick="myFunction()"></div>
					<div class="row__seat tooltip" data-tooltip="C2 RS100" onclick="myFunction1()"></div>
					<div class="row__seat tooltip" data-tooltip="C3 RS100" onclick="myFunction2()"></div>
					<div class="row__seat tooltip" data-tooltip="C4 RS100" onclick="myFunction3()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="C8 RS100" onclick="myFunction4()"></div>
					<div class="row__seat tooltip" data-tooltip="C9 RS100" onclick="myFunction5()"></div>
					<div class="row__seat tooltip" data-tooltip="C10 RS100" onclick="myFunction6()"></div>
					<div class="row__seat tooltip" data-tooltip="C11 RS100" onclick="myFunction7()"></div>
					<div class="row__seat tooltip" data-tooltip="C12 RS100" onclick="myFunction8()"></div>
					<div class="row__seat tooltip" data-tooltip="C13 RS100" onclick="myFunction9()"></div>
					<div class="row__seat tooltip" data-tooltip="C14 RS100" onclick="myFunction10()"></div>
					<div class="row__seat tooltip" data-tooltip="C15 RS100" onclick="myFunction11()"></div>
					<div class="row__seat tooltip" data-tooltip="C16 RS100" onclick="myFunction12()"></div>
					<div class="row__seat tooltip" data-tooltip="C17 RS100" onclick="myFunction13()"></div>
					<div class="row__seat tooltip" data-tooltip="C18 RS100" onclick="myFunction14()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="D1 RS100" onclick="myFunction()"></div>
					<div class="row__seat tooltip" data-tooltip="D2 RS100" onclick="myFunction1()"></div>
					<div class="row__seat tooltip" data-tooltip="D3 RS100" onclick="myFunction2()"></div>
					<div class="row__seat tooltip" data-tooltip="D4 RS100" onclick="myFunction3()"></div>
					<div class="row__seat tooltip" data-tooltip="D5 RS100" onclick="myFunction4()"></div>
					<div class="row__seat tooltip" data-tooltip="D6 RS100" onclick="myFunction5()"></div>
					<div class="row__seat tooltip" data-tooltip="D7 RS100" onclick="myFunction6()"></div>
					<div class="row__seat tooltip" data-tooltip="D8 RS100" onclick="myFunction7()"></div>
					<div class="row__seat tooltip" data-tooltip="D9 RS100" onclick="myFunction8()"></div>
					<div class="row__seat tooltip" data-tooltip="D10 RS100" onclick="myFunction9()"></div>
					<div class="row__seat tooltip" data-tooltip="D11 RS100" onclick="myFunction10()"></div>
					<div class="row__seat tooltip" data-tooltip="D12 RS100" onclick="myFunction11()"></div>
					<div class="row__seat tooltip" data-tooltip="D13 RS100" onclick="myFunction12()"></div>
					<div class="row__seat tooltip" data-tooltip="D14 RS100" onclick="myFunction13()"></div>
					<div class="row__seat tooltip" data-tooltip="D15 RS100" onclick="myFunction14()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="E1 RS100" onclick="myFunction()"></div>
					<div class="row__seat tooltip" data-tooltip="E2 RS100" onclick="myFunction1()"></div>
					<div class="row__seat tooltip" data-tooltip="E3 RS100" onclick="myFunction2()"></div>
					<div class="row__seat tooltip" data-tooltip="E4 RS100" onclick="myFunction3()"></div>
					<div class="row__seat tooltip" data-tooltip="E5 RS100" onclick="myFunction4()"></div>
					<div class="row__seat tooltip" data-tooltip="E6 RS100" onclick="myFunction5()"></div>
					<div class="row__seat tooltip" data-tooltip="E7 RS100" onclick="myFunction6()"></div>
					<div class="row__seat tooltip" data-tooltip="E8 RS100" onclick="myFunction7()"></div>
					<div class="row__seat tooltip" data-tooltip="E9 RS100" onclick="myFunction8()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="E12 RS100" onclick="myFunction9()"></div>
					<div class="row__seat tooltip" data-tooltip="E13 RS100" onclick="myFunction10()"></div>
					<div class="row__seat tooltip" data-tooltip="E14 RS100" onclick="myFunction11()"></div>
					<div class="row__seat tooltip" data-tooltip="E15 RS100" onclick="myFunction12()"></div>
					<div class="row__seat tooltip" data-tooltip="E16 RS100" onclick="myFunction13()"></div>
					<div class="row__seat tooltip" data-tooltip="E17 RS100" onclick="myFunction14()"></div>
					<div class="row__seat tooltip" data-tooltip="E18 RS100" onclick="myFunction15()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="F1 RS100" onclick="myFunction()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="F3 RS100" onclick="myFunction1()"></div>
					<div class="row__seat tooltip" data-tooltip="F4 RS100" onclick="myFunction2()"></div>
					<div class="row__seat tooltip" data-tooltip="F5 RS100" onclick="myFunction3()"></div>
					<div class="row__seat tooltip" data-tooltip="F6 RS100" onclick="myFunction4()"></div>
					<div class="row__seat tooltip" data-tooltip="F7 RS100" onclick="myFunction5()"></div>
					<div class="row__seat tooltip" data-tooltip="F8 RS100" onclick="myFunction6()"></div>
					<div class="row__seat tooltip" data-tooltip="F9 RS100" onclick="myFunction7()"></div>
					<div class="row__seat tooltip" data-tooltip="F10 RS100" onclick="myFunction8()"></div>
					<div class="row__seat tooltip" data-tooltip="F11 RS100" onclick="myFunction9()"></div>
					<div class="row__seat tooltip" data-tooltip="F12 RS100" onclick="myFunction10()"></div>
					<div class="row__seat tooltip" data-tooltip="F13 RS100" onclick="myFunction11()"></div>
					<div class="row__seat tooltip" data-tooltip="F14 RS100" onclick="myFunction12()"></div>
					<div class="row__seat tooltip" data-tooltip="F15 RS100" onclick="myFunction13()"></div>
					<div class="row__seat tooltip" data-tooltip="F16 RS100" onclick="myFunction14()"></div>
					<div class="row__seat tooltip" data-tooltip="F17 RS100" onclick="myFunction15()"></div>
					<div class="row__seat tooltip" data-tooltip="F18 RS100" onclick="myFunction16()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="G1 RS160" onclick="myFunction20()"></div>
					<div class="row__seat tooltip" data-tooltip="G2 RS160" onclick="myFunction21()"></div>
					<div class="row__seat tooltip" data-tooltip="G3 RS160" onclick="myFunction22()"></div>
					<div class="row__seat tooltip" data-tooltip="G4 RS160" onclick="myFunction23()"></div>
					<div class="row__seat tooltip" data-tooltip="G5 RS160" onclick="myFunction24()"></div>
					<div class="row__seat tooltip" data-tooltip="G6 RS160" onclick="myFunction25()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="G9 RS160" onclick="myFunction26()"></div>
					<div class="row__seat tooltip" data-tooltip="G10 RS160" onclick="myFunction27()"></div>
					<div class="row__seat tooltip" data-tooltip="G11 RS160" onclick="myFunction28()"></div>
					<div class="row__seat tooltip" data-tooltip="G12 RS160" onclick="myFunction29()"></div>
					<div class="row__seat tooltip" data-tooltip="G13 RS160" onclick="myFunction30()"></div>
					<div class="row__seat tooltip" data-tooltip="G14 RS160" onclick="myFunction31()"></div>
					<div class="row__seat tooltip" data-tooltip="G15 RS160" onclick="myFunction32()"></div>
					<div class="row__seat tooltip" data-tooltip="G16 RS160" onclick="myFunction33()"></div>
					<div class="row__seat tooltip" data-tooltip="G17 RS160" onclick="myFunction34()"></div>
					<div class="row__seat tooltip" data-tooltip="G18 RS160" onclick="myFunction35()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="H1 RS160" onclick="myFunction20()"></div>
					<div class="row__seat tooltip" data-tooltip="H2 RS160" onclick="myFunction21()"></div>
					<div class="row__seat tooltip" data-tooltip="H3 RS160" onclick="myFunction22()"></div>
					<div class="row__seat tooltip" data-tooltip="H4 RS160" onclick="myFunction23()"></div>
					<div class="row__seat tooltip" data-tooltip="H5 RS160" onclick="myFunction24()"></div>
					<div class="row__seat tooltip" data-tooltip="H6 RS160" onclick="myFunction25()"></div>
					<div class="row__seat tooltip" data-tooltip="H7 RS160" onclick="myFunction26()"></div>
					<div class="row__seat tooltip" data-tooltip="H8 RS160" onclick="myFunction27()"></div>
					<div class="row__seat tooltip" data-tooltip="H9 RS160" onclick="myFunction28()"></div>
					<div class="row__seat tooltip" data-tooltip="H10 RS160" onclick="myFunction29()"></div>
					<div class="row__seat tooltip" data-tooltip="H11 RS160" onclick="myFunction30()"></div>
					<div class="row__seat tooltip" data-tooltip="H12 RS160" onclick="myFunction31()"></div>
					<div class="row__seat tooltip" data-tooltip="H13 RS160" onclick="myFunction32()"></div>
					<div class="row__seat tooltip" data-tooltip="H14 RS160" onclick="myFunction33()"></div>
					<div class="row__seat tooltip" data-tooltip="H15 RS160" onclick="myFunction34()"></div>
					<div class="row__seat tooltip" data-tooltip="H16 RS160" onclick="myFunction35()"></div>
					<div class="row__seat tooltip" data-tooltip="H17 RS160" onclick="myFunction36()"></div>
					<div class="row__seat tooltip" data-tooltip="H18 RS160" onclick="myFunction37()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="I1 RS160" onclick="myFunction20()"></div>
					<div class="row__seat tooltip" data-tooltip="I2 RS160" onclick="myFunction21()"></div>
					<div class="row__seat tooltip" data-tooltip="I3 RS160" onclick="myFunction22()"></div>
					<div class="row__seat tooltip" data-tooltip="I4 RS160" onclick="myFunction23()"></div>
					<div class="row__seat tooltip" data-tooltip="I5 RS160" onclick="myFunction24()"></div>
					<div class="row__seat tooltip" data-tooltip="I6 RS160" onclick="myFunction25()"></div>
					<div class="row__seat tooltip" data-tooltip="I7 RS160" onclick="myFunction26()"></div>
					<div class="row__seat tooltip" data-tooltip="I8 RS160" onclick="myFunction27()"></div>
					<div class="row__seat tooltip" data-tooltip="I9 RS160" onclick="myFunction28()"></div>
					<div class="row__seat tooltip" data-tooltip="I10 RS160" onclick="myFunction29()"></div>
					<div class="row__seat tooltip" data-tooltip="I11 RS160" onclick="myFunction30()"></div>
					<div class="row__seat tooltip" data-tooltip="I12 RS160" onclick="myFunction31()"></div>
					<div class="row__seat tooltip" data-tooltip="I13 RS160" onclick="myFunction32()"></div>
					<div class="row__seat tooltip" data-tooltip="I14 RS160" onclick="myFunction33()"></div>
					<div class="row__seat tooltip" data-tooltip="I15 RS160" onclick="myFunction34()"></div>
					<div class="row__seat tooltip" data-tooltip="I16 RS160" onclick="myFunction35()"></div>
					<div class="row__seat tooltip" data-tooltip="I17 RS160" onclick="myFunction36()"></div>
					<div class="row__seat tooltip" data-tooltip="I18 RS160" onclick="myFunction37()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="J1 RS160" onclick="myFunction20()"></div>
					<div class="row__seat tooltip" data-tooltip="J2 RS160" onclick="myFunction21()"></div>
					<div class="row__seat tooltip" data-tooltip="J3 RS160" onclick="myFunction22()"></div>
					<div class="row__seat tooltip" data-tooltip="J4 RS160" onclick="myFunction23()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="J8 RS160" onclick="myFunction24()"></div>
					<div class="row__seat tooltip" data-tooltip="J9 RS160" onclick="myFunction25()"></div>
					<div class="row__seat tooltip" data-tooltip="J10 RS160" onclick="myFunction26()"></div>
					<div class="row__seat tooltip" data-tooltip="J11 RS160" onclick="myFunction27()"></div>
					<div class="row__seat tooltip" data-tooltip="J12 RS160" onclick="myFunction28()"></div>
					<div class="row__seat tooltip" data-tooltip="J13 RS160" onclick="myFunction29()"></div>
					<div class="row__seat tooltip" data-tooltip="J14 RS160" onclick="myFunction30()"></div>
					<div class="row__seat tooltip" data-tooltip="J15 RS160" onclick="myFunction31()"></div>
					<div class="row__seat tooltip" data-tooltip="J16 RS160" onclick="myFunction32()"></div>
					<div class="row__seat tooltip" data-tooltip="J17 RS160" onclick="myFunction33()"></div>
					<div class="row__seat tooltip" data-tooltip="J18 RS160" onclick="myFunction34()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="K1 RS160" onclick="myFunction20()"></div>
					<div class="row__seat tooltip" data-tooltip="K2 RS160" onclick="myFunction21()"></div>
					<div class="row__seat tooltip" data-tooltip="K3 RS160" onclick="myFunction22()"></div>
					<div class="row__seat tooltip" data-tooltip="K4 RS160" onclick="myFunction23()"></div>
					<div class="row__seat tooltip" data-tooltip="K5 RS160" onclick="myFunction24()"></div>
					<div class="row__seat tooltip" data-tooltip="K6 RS160" onclick="myFunction25()"></div>
					<div class="row__seat tooltip" data-tooltip="K7 RS160" onclick="myFunction26()"></div>
					<div class="row__seat tooltip" data-tooltip="K8 RS160" onclick="myFunction27()"></div>
					<div class="row__seat tooltip" data-tooltip="K9 RS160" onclick="myFunction28()"></div>
					<div class="row__seat tooltip" data-tooltip="K10 RS160" onclick="myFunction29()"></div>
					<div class="row__seat tooltip" data-tooltip="K11 RS160" onclick="myFunction30()"></div>
					<div class="row__seat tooltip" data-tooltip="K12 RS160" onclick="myFunction31()"></div>
					<div class="row__seat tooltip" data-tooltip="K13 RS160" onclick="myFunction32()"></div>
					<div class="row__seat tooltip" data-tooltip="K14 RS160" onclick="myFunction33()"></div>
					<div class="row__seat tooltip" data-tooltip="K15 RS160" onclick="myFunction34()"></div>
					<div class="row__seat tooltip" data-tooltip="K16 RS160" onclick="myFunction35()"></div>
					<div class="row__seat tooltip" data-tooltip="K17 RS160" onclick="myFunction36()"></div>
					<div class="row__seat tooltip" data-tooltip="K18 RS160" onclick="myFunction37()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="L1 RS160" onclick="myFunction20()"></div>
					<div class="row__seat tooltip" data-tooltip="L2 RS160" onclick="myFunction21()"></div>
					<div class="row__seat tooltip" data-tooltip="L3 RS160" onclick="myFunction22()"></div>
					<div class="row__seat tooltip" data-tooltip="L4 RS160" onclick="myFunction23()"></div>
					<div class="row__seat tooltip" data-tooltip="L5 RS160" onclick="myFunction24()"></div>
					<div class="row__seat tooltip" data-tooltip="L6 RS160" onclick="myFunction25()"></div>
					<div class="row__seat tooltip" data-tooltip="L7 RS160" onclick="myFunction26()"></div>
					<div class="row__seat tooltip" data-tooltip="L8 RS160" onclick="myFunction27()"></div>
					<div class="row__seat tooltip" data-tooltip="L9 RS160" onclick="myFunction28()"></div>
					<div class="row__seat tooltip" data-tooltip="L10 RS160" onclick="myFunction29()"></div>
					<div class="row__seat tooltip" data-tooltip="L11 RS160" onclick="myFunction30()"></div>
					<div class="row__seat tooltip" data-tooltip="L12 RS160" onclick="myFunction31()"></div>
					<div class="row__seat tooltip" data-tooltip="L13 RS160" onclick="myFunction32()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="L17 RS160" onclick="myFunction33()"></div>
					<div class="row__seat tooltip" data-tooltip="L18 RS160" onclick="myFunction34()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="M1 RS200" onclick="myFunction40()"></div>
					<div class="row__seat tooltip" data-tooltip="M2 RS200" onclick="myFunction41()"></div>
					<div class="row__seat tooltip" data-tooltip="M3 RS200" onclick="myFunction42()"></div>
					<div class="row__seat tooltip" data-tooltip="M4 RS200" onclick="myFunction43()"></div>
					<div class="row__seat tooltip" data-tooltip="M5 RS200" onclick="myFunction44()"></div>
					<div class="row__seat tooltip" data-tooltip="M6 RS200" onclick="myFunction45()"></div>
					<div class="row__seat tooltip" data-tooltip="M7 RS200" onclick="myFunction46()"></div>
					<div class="row__seat tooltip" data-tooltip="M8 RS200" onclick="myFunction47()"></div>
					<div class="row__seat tooltip" data-tooltip="M9 RS200" onclick="myFunction48()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="M14 RS200" onclick="myFunction49()"></div>
					<div class="row__seat tooltip" data-tooltip="M15 RS200" onclick="myFunction50()"></div>
					<div class="row__seat tooltip" data-tooltip="M16 RS200" onclick="myFunction51()"></div>
					<div class="row__seat tooltip" data-tooltip="M17 RS200" onclick="myFunction52()"></div>
					<div class="row__seat tooltip" data-tooltip="M18 RS200" onclick="myFunction53()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="N1 RS200" onclick="myFunction40()"></div>
					<div class="row__seat tooltip" data-tooltip="N2 RS200" onclick="myFunction41()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="N5 RS200" onclick="myFunction42()"></div>
					<div class="row__seat tooltip" data-tooltip="N6 RS200" onclick="myFunction43()"></div>
					<div class="row__seat tooltip" data-tooltip="N7 RS200" onclick="myFunction44()"></div>
					<div class="row__seat tooltip" data-tooltip="N8 RS200" onclick="myFunction45()"></div>
					<div class="row__seat tooltip" data-tooltip="N9 RS200" onclick="myFunction46()"></div>
					<div class="row__seat tooltip" data-tooltip="N10 RS200" onclick="myFunction47()"></div>
					<div class="row__seat tooltip" data-tooltip="N11 RS200" onclick="myFunction48()"></div>
					<div class="row__seat tooltip" data-tooltip="N12 RS200" onclick="myFunction49()"></div>
					<div class="row__seat tooltip" data-tooltip="N13 RS200" onclick="myFunction50()"></div>
					<div class="row__seat tooltip" data-tooltip="N14 RS200" onclick="myFunction51()"></div>
					<div class="row__seat tooltip" data-tooltip="N15 RS200" onclick="myFunction52()"></div>
					<div class="row__seat tooltip" data-tooltip="N16 RS200" onclick="myFunction53()"></div>
					<div class="row__seat tooltip" data-tooltip="N17 RS200" onclick="myFunction54()"></div>
					<div class="row__seat tooltip" data-tooltip="N18 RS200" onclick="myFunction55()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="O1 RS200" onclick="myFunction40()"></div>
					<div class="row__seat tooltip" data-tooltip="O2 RS200" onclick="myFunction41()"></div>
					<div class="row__seat tooltip" data-tooltip="O3 RS200" onclick="myFunction42()"></div>
					<div class="row__seat tooltip" data-tooltip="O4 RS200" onclick="myFunction43()"></div>
					<div class="row__seat tooltip" data-tooltip="O5 RS200" onclick="myFunction44()"></div>
					<div class="row__seat tooltip" data-tooltip="O6 RS200" onclick="myFunction45()"></div>
					<div class="row__seat tooltip" data-tooltip="O7 RS200" onclick="myFunction46()"></div>
					<div class="row__seat tooltip" data-tooltip="O8 RS200" onclick="myFunction47()"></div>
					<div class="row__seat tooltip" data-tooltip="O9 RS200" onclick="myFunction48()"></div>
					<div class="row__seat tooltip" data-tooltip="O10 RS200" onclick="myFunction49()"></div>
					<div class="row__seat tooltip" data-tooltip="O11 RS200" onclick="myFunction50()"></div>
					<div class="row__seat tooltip" data-tooltip="O12 RS200" onclick="myFunction51()"></div>
					<div class="row__seat tooltip" data-tooltip="O13 RS200" onclick="myFunction52()"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="O16 RS200" onclick="myFunction53()"></div>
					<div class="row__seat tooltip" data-tooltip="O17 RS200" onclick="myFunction54()"></div>
					<div class="row__seat tooltip" data-tooltip="O18 RS200" onclick="myFunction55()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="P1 RS200" onclick="myFunction40()"></div>
					<div class="row__seat tooltip" data-tooltip="P2 RS200" onclick="myFunction41()"></div>
					<div class="row__seat tooltip" data-tooltip="P3 RS200" onclick="myFunction42()"></div>
					<div class="row__seat tooltip" data-tooltip="P4 RS200" onclick="myFunction43()"></div>
					<div class="row__seat tooltip" data-tooltip="P5 RS200" onclick="myFunction44()"></div>
					<div class="row__seat tooltip" data-tooltip="P6 RS200" onclick="myFunction45()"></div>
					<div class="row__seat tooltip" data-tooltip="P7 RS200" onclick="myFunction46()"></div>
					<div class="row__seat tooltip" data-tooltip="P8 RS200" onclick="myFunction47()"></div>
					<div class="row__seat tooltip" data-tooltip="P9 RS200" onclick="myFunction48()"></div>
					<div class="row__seat tooltip" data-tooltip="P10 RS200" onclick="myFunction49()"></div>
					<div class="row__seat tooltip" data-tooltip="P11 RS200" onclick="myFunction50()"></div>
					<div class="row__seat tooltip" data-tooltip="P12 RS200" onclick="myFunction51()"></div>
					<div class="row__seat tooltip" data-tooltip="P13 RS200" onclick="myFunction52()"></div>
					<div class="row__seat tooltip" data-tooltip="P14 RS200" onclick="myFunction53()"></div>
					<div class="row__seat tooltip" data-tooltip="P15 RS200" onclick="myFunction54()"></div>
					<div class="row__seat tooltip" data-tooltip="P16 RS200" onclick="myFunction55()"></div>
					<div class="row__seat tooltip" data-tooltip="P17 RS200" onclick="myFunction56()"></div>
					<div class="row__seat tooltip" data-tooltip="P18 RS200" onclick="myFunction57()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="Q1 RS200" onclick="myFunction40()"></div>
					<div class="row__seat tooltip" data-tooltip="Q2 RS200" onclick="myFunction41()"></div>
					<div class="row__seat tooltip" data-tooltip="Q3 RS200" onclick="myFunction42()"></div>
					<div class="row__seat tooltip" data-tooltip="Q4 RS200" onclick="myFunction43()"></div>
					<div class="row__seat tooltip" data-tooltip="Q5 RS200" onclick="myFunction44()"></div>
					<div class="row__seat tooltip" data-tooltip="Q6 RS200" onclick="myFunction45()"></div>
					<div class="row__seat tooltip" data-tooltip="Q7 RS200" onclick="myFunction46()"></div>
					<div class="row__seat tooltip" data-tooltip="Q8 RS200" onclick="myFunction47()"></div>
					<div class="row__seat tooltip" data-tooltip="Q9 RS200" onclick="myFunction48()"></div>
					<div class="row__seat tooltip" data-tooltip="Q10 RS200" onclick="myFunction49()"></div>
					<div class="row__seat tooltip" data-tooltip="Q11 RS200" onclick="myFunction50()"></div>
					<div class="row__seat tooltip" data-tooltip="Q12 RS200" onclick="myFunction51()"></div>
					<div class="row__seat tooltip" data-tooltip="Q13 RS200" onclick="myFunction52()"></div>
					<div class="row__seat tooltip" data-tooltip="Q14 RS200" onclick="myFunction53()"></div>
					<div class="row__seat tooltip" data-tooltip="Q15 RS200" onclick="myFunction54()"></div>
					<div class="row__seat tooltip" data-tooltip="Q16 RS200" onclick="myFunction55()"></div>
					<div class="row__seat tooltip" data-tooltip="Q17 RS200" onclick="myFunction56()"></div>
					<div class="row__seat tooltip" data-tooltip="Q18 RS200" onclick="myFunction57()"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="R1 RS200" onclick="myFunction40()"></div>
					<div class="row__seat tooltip" data-tooltip="R2 RS200" onclick="myFunction41()"></div>
					<div class="row__seat tooltip" data-tooltip="R3 RS200" onclick="myFunction42()"></div>
					<div class="row__seat tooltip" data-tooltip="R4 RS200" onclick="myFunction43()"></div>
					<div class="row__seat tooltip" data-tooltip="R5 RS200" onclick="myFunction44()"></div>
					<div class="row__seat tooltip" data-tooltip="R6 RS200" onclick="myFunction45()"></div>
					<div class="row__seat tooltip" data-tooltip="R7 RS200" onclick="myFunction46()"></div>
					<div class="row__seat tooltip" data-tooltip="R8 RS200" onclick="myFunction47()"></div>
					<div class="row__seat tooltip" data-tooltip="R9 RS200" onclick="myFunction48()"></div>
					<div class="row__seat tooltip" data-tooltip="R10 RS200" onclick="myFunction49()"></div>
					<div class="row__seat tooltip" data-tooltip="R11 RS200" onclick="myFunction50()"></div>
					<div class="row__seat tooltip" data-tooltip="R12 RS200" onclick="myFunction51()"></div>
					<div class="row__seat tooltip" data-tooltip="R13 RS200" onclick="myFunction52()"></div>
					<div class="row__seat tooltip" data-tooltip="R14 RS200" onclick="myFunction53()"></div>
					<div class="row__seat tooltip" data-tooltip="R15 RS200" onclick="myFunction54()"></div>
					<div class="row__seat tooltip" data-tooltip="R16 RS200" onclick="myFunction55()"></div>
					<div class="row__seat tooltip" data-tooltip="R17 RS200" onclick="myFunction56()"></div>
					<div class="row__seat tooltip" data-tooltip="R18 RS200" onclick="myFunction57()"></div>
				</div>
			</div>
			<!-- /rows -->
			<ul class="legend">
				<li class="legend__item legend__item--free">Free</li>
				<li class="legend__item legend__item--reserved">Reserved</li>
				<li class="legend__item legend__item--selected">Selected</li>
			</ul>
			<form action="movie-payment5.php" method="POST">
			100: <input type="checkbox" id="myCheck" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck1" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck2" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck3" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck4" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck5" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck6" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck7" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck8" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck9" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck10" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck11" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck12" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck13" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck14" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck15" name="checkbutton" style="display:none;" >
			<input type="checkbox" id="myCheck16" name="checkbutton" style="display:none;" >
			160: <input type="checkbox" id="myCheck20" name="checkbutton1" style="display:none;">
			<input type="checkbox" id="myCheck21" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck22" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck23" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck24" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck25" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck26" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck27" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck28" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck29" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck30" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck31" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck32" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck33" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck34" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck35" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck36" name="checkbutton1" style="display:none;" >
			<input type="checkbox" id="myCheck37" name="checkbutton1" style="display:none;" >
			
			200: <input type="checkbox" id="myCheck40" name="checkbutton2" style="display:none;">
			<input type="checkbox" id="myCheck41" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck42" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck43" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck44" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck45" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck46" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck47" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck48" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck49" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck50" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck51" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck52" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck53" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck54" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck55" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck56" name="checkbutton2" style="display:none;" >
			<input type="checkbox" id="myCheck57" name="checkbutton2" style="display:none;" >
			<!--<p id="demo" style="display: none;" name='P1'>100</p>
			<p id="demo1" style="display: none;" name='P1'>160</p>
			<p id="demo2" style="display: none;" name='P1'>200</p>-->
<script>
	function myFunction() {
  var x = document.getElementById("myCheck");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction1() {
  var x = document.getElementById("myCheck1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction2() {
  var x = document.getElementById("myCheck2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction3() {
  var x = document.getElementById("myCheck3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction4() {
  var x = document.getElementById("myCheck4");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction5() {
  var x = document.getElementById("myCheck5");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction6() {
  var x = document.getElementById("myCheck6");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction7() {
  var x = document.getElementById("myCheck7");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction8() {
  var x = document.getElementById("myCheck8");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction9() {
  var x = document.getElementById("myCheck9");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction10() {
  var x = document.getElementById("myCheck10");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction11() {
  var x = document.getElementById("myCheck11");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction12() {
  var x = document.getElementById("myCheck12");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction13() {
  var x = document.getElementById("myCheck13");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction14() {
  var x = document.getElementById("myCheck14");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction15() {
  var x = document.getElementById("myCheck15");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction16() {
  var x = document.getElementById("myCheck16");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction17() {
  var x = document.getElementById("myCheck17");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction20() {
  var x = document.getElementById("myCheck20");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction21() {
  var x = document.getElementById("myCheck21");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction22() {
  var x = document.getElementById("myCheck22");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction23() {
  var x = document.getElementById("myCheck23");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction24() {
  var x = document.getElementById("myCheck24");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction25() {
  var x = document.getElementById("myCheck25");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction26() {
  var x = document.getElementById("myCheck26");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction27() {
  var x = document.getElementById("myCheck27");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction28() {
  var x = document.getElementById("myCheck28");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction29() {
  var x = document.getElementById("myCheck29");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction30() {
  var x = document.getElementById("myCheck30");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction31() {
  var x = document.getElementById("myCheck31");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction32() {
  var x = document.getElementById("myCheck32");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction33() {
  var x = document.getElementById("myCheck33");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction34() {
  var x = document.getElementById("myCheck34");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction35() {
  var x = document.getElementById("myCheck35");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction36() {
  var x = document.getElementById("myCheck36");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction37() {
  var x = document.getElementById("myCheck37");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction40() {
  var x = document.getElementById("myCheck40");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction41() {
  var x = document.getElementById("myCheck41");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction42() {
  var x = document.getElementById("myCheck42");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction43() {
  var x = document.getElementById("myCheck43");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction44() {
  var x = document.getElementById("myCheck44");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction45() {
  var x = document.getElementById("myCheck45");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction46() {
  var x = document.getElementById("myCheck46");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction47() {
  var x = document.getElementById("myCheck47");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction48() {
  var x = document.getElementById("myCheck48");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction49() {
  var x = document.getElementById("myCheck49");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction50() {
  var x = document.getElementById("myCheck50");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction51() {
  var x = document.getElementById("myCheck51");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction52() {
  var x = document.getElementById("myCheck52");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction53() {
  var x = document.getElementById("myCheck53");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction54() {
  var x = document.getElementById("myCheck54");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction55() {
  var x = document.getElementById("myCheck55");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction56() {
  var x = document.getElementById("myCheck56");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
<script>
	function myFunction57() {
  var x = document.getElementById("myCheck57");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>

			<input type="Submit" class="action action--buy" value="Buy tickets">
		</div><!-- /plan -->
	</form>
		<button class="action action--lookaround action--disabled" arial-label="Unlook View"></button>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
</body>
</html>
