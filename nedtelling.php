<!doctype html>
	<html>
		<head>
			<title>JUL</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nedtelling.css">
			<meta charset= "UTF-8">
			<link rel="shortcut icon" href="logoer/favicon.ico">
		</head>
		
		<body>
			<?php
			$tid = strtotime('2019-12-24') - time();
			$dag = floor($tid / 86400+1);
			echo "<div id='dager'>$dag dager til jul</div>";
			?>
			
			<div class="kalender">
				<TABLE BORDER=3 CELLSPACING=3 CELLPADDING=3>
					<TR>
						<TD COLSPAN="7" ALIGN=center><B>Desember 2019</B></TD>
					</TR>

					<TR>
						<TD COLSPAN="7" ALIGN=center><I>Nok et år finner sin slutt</I></TD>
					</TR>

					<TR>
						<TD ALIGN=center>Man</TD>
						<TD ALIGN=center>Tir</TD>
						<TD ALIGN=center>Ons</TD>
						<TD ALIGN=center>Tor</TD>
						<TD ALIGN=center>Fre</TD>
						<TD ALIGN=center>Lør</TD>
						<TD ALIGN=center>Søn</TD>
					</TR>

					<TR>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center>1</TD>
					</TR>

					<TR>
						<TD ALIGN=center>2</TD>
						<TD ALIGN=center>3</TD>
						<TD ALIGN=center>4</TD>
						<TD ALIGN=center>5</TD>
						<TD ALIGN=center>6</TD>
						<TD ALIGN=center>7</TD>
						<TD ALIGN=center>8</TD>
					</TR>

					<TR>
						<TD ALIGN=center>9</TD>
						<TD ALIGN=center>10</TD>
						<TD ALIGN=center>11</TD>
						<TD ALIGN=center>12</TD>
						<TD ALIGN=center>13</TD>
						<TD ALIGN=center>14</TD>
						<TD ALIGN=center>15</TD>
					</TR>

					<TR>
						<TD ALIGN=center>16</TD>
						<TD ALIGN=center>17</TD>
						<TD ALIGN=center>18</TD>
						<TD ALIGN=center>19</TD>
						<TD ALIGN=center>20</TD>
						<TD ALIGN=center>21</TD>
						<TD ALIGN=center>22</TD>
						</TR>

					<TR>
						<TD ALIGN=center>23</TD>
						<TD ALIGN=center>24</TD>
						<TD ALIGN=center>25</TD>
						<TD ALIGN=center>26</TD>
						<TD ALIGN=center>27</TD>
						<TD ALIGN=center>28</TD>
						<TD ALIGN=center>29</TD>
					</TR>

					<TR>
						<TD ALIGN=center>30</TD>
						<TD ALIGN=center>31</TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
						<TD ALIGN=center></TD>
					</TR>

				</TABLE>
			</div>

			<div class="sidenav">
				<div class="boks">
					<a href=index1.html>
						<div class="tilpasser">
						Tilbake til hovedsiden
						</div>
					</a>
					
					<a href=Jul.html>
						<div class="tilpasser">
						Julesiden
						</div>
					</a>
					<a href=nedtelling.php>
						<div class="tilpasser1">
						Nedtelling til julaften
						</div>
					</a>
					<a href=juletest.php>
						<div class="tilpasser">
						Juletest
						</div>
					</a>
					<a href=ønskeliste.php>
						<div class="tilpasser">
						Ønskeliste
						</div>
					</a>
					<a href=julekalender.html>
						<div class="tilpasser">
						Julekalender
						</div>
					</a>
					<a href=prosjektbeskrivelse.html>
						<div class="tilpasser">
						Prosjekt- beskrivelse
						</div>
					</a>
					
					
				</div>
			</div>
		</body>
	</html>