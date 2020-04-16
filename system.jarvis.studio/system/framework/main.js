var term=new Array();

var helpPage=[
	'%n%+rTerminal Help%-r%n',
	'clear .............................. Clear the terminal',
	'exit, stop, shutdown -c, <ESC> ..... Shut down system',
	'cs ................................. Credentials manager',
	'login .............................. Sign in',
	'logo ............................... Show DarkOS logo',
	'id ................................. show terminal id',
	'restart, reboot, shutdown -r ....... Restart system',
	'help ............................... Show this help page'
];

var ANSI_CSI=String.fromCharCode(0x1b)+'[';

function ansiExpression(p) {
	return ANSI_CSI+String(p)+'m';
}

var mainPage=[
	'╔═════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════╗',
	'║ Teslasoft '+ansiExpression(96)+'Dark'+ansiExpression(91)+'OS'+ansiExpression(0)+'                                                                                                                                                                                    ║',
	'║ Version: 1.2                                                                                                                                                                                        ║',
	'║ Developer: Teslasoft                                                                                                                                                                                ║',
	'║ Site: https://jarvis.studio/                                                                                                                                                                        ║',
	'║ Copyrights: (C) 2019 Teslasoft 2003-2005 mass:werk, N. Landsteiner                                                                                                                                  ║',
	'║ CID: NrdstV9xXZNNmYP9jX09nnvkzxnMVQRRsst==                                                                                                                                                          ║',
	'║                                                                                                                                                                                                     ║',
	'║ '+ansiExpression(96)+'Basic commands:'+ansiExpression(0)+'                                                                                                                                                                                     ║',
	'║    '+ansiExpression(96)+'clear .............................. Clear the terminal'+ansiExpression(0)+'                                                                                                                                          ║',
	'║    '+ansiExpression(96)+'exit, stop, shutdown -c, <ESC> ..... Shut down system'+ansiExpression(0)+'                                                                                                                                            ║',
	'║    '+ansiExpression(96)+'cs ................................. Credentials manager'+ansiExpression(0)+'                                                                                                                                         ║',
	'║    '+ansiExpression(96)+'login .............................. Sign in'+ansiExpression(0)+'                                                                                                                                                     ║',
	'║    '+ansiExpression(96)+'logo ............................... Show DarkOS logo'+ansiExpression(0)+'                                                                                                                                            ║',
	'║    '+ansiExpression(96)+'id ................................. show terminal id'+ansiExpression(0)+'                                                                                                                                            ║',
	'║    '+ansiExpression(96)+'restart, reboot, shutdown -r ....... Restart system'+ansiExpression(0)+'                                                                                                                                              ║',
	'║    '+ansiExpression(96)+'help ............................... Show help page'+ansiExpression(0)+'                                                                                                                                              ║',
	'╚═════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════╝'
];

var setup=[
	ansiExpression(94)+ansiExpression(7)+'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(0)+ansiExpression(94)+ansiExpression(7)+'                                                            ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                               DarkOS setup wizard                               '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'   Enter \'yes\' to continue setup and \'no\' to cancel.                             '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'   Do you want continue?                                                         '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                          '+ansiExpression(37)+ansiExpression(7)+'                                                                                 '+ansiExpression(30)+'  '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                            '+ansiExpression(30)+ansiExpression(7)+'                                                                                 '+ansiExpression(94)+ansiExpression(7)+'                                                          ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       ',
	'                                                                                                                                                                                                       '
];

var signature=[
	'-----BEGIN JARVIS CERTIFICATE SIGNATURE-----',
	'AVS2DRRzfw/spacAYIIyPJO4VRI4DEwFsQTWYp504Zjfq5HxsA7/qhLfQU3rIBlg',
	'YqLPEFM3z7e9oaO0sZYYxqdPIThU0tB9FheiY9V9ZxX36oszQf2PCyqk9V9jrCk+',
	'AEjyBELIHECBJxRmir0Z7lfAmQZyXKMSsImuFP1U3KZt3xLUOn4YglqrZbwJe2N8',
	'YLMNPHIzi/UbMBSjfqIJHkyThDXGavMpxfNFUvad1V/2pGcLFnH2d7E01fzbiqcu',
	'8rJRt9kmsg4H2B6iq7+dvWjhzM/k0vIO9VxMBRZZBUuLoJluAkSjDjyJkOCqYqad',
	'fUTTQ/czbxPU0JBp1PlXKmVIhMSbUuJJoVHziQ005Zk6HMwd3+YTD6dSvtOG/3Gi',
	'fm4KDem3BLVOD3Zus44Pey/Kzfhjli61l6woaSg3wFK/sT3NGdl+5XydtxfaHv73',
	'LvgyalitfLIpfomHQjMC1ITFZoYOWXmU4Lu79NLktn9Qy/BuI4HsJF5aLIcA1KdN',
	'b0pQ+Q2yqrMe1NaQlOsTdXzHAGYMghzJizQApN/uLX7P3hCeE7TpvgwSi2Mr7UQW',
	'Ut7D8chbkcCqxGGmKkXZcizLky1oWCa+UBzCCWqqMylo1plVM30O1Cn1C6UViFzC',
	'G73+alQZ6UrQhaX/1r90YONhjf2q3Z2Qhxx0JDF0T/4=',
	'-----END JARVIS CERTIFICATE SIGNATURE-----'
];

var logo=[
	' ',
	'      %c(#00ffff) ###########          %c(#0066ff)          ######          %c(#0000ff)    #############       %c(#660099)     #####       #####    %c(#b20021)         #######          %c(#cc0000)        ########   '+ansiExpression(0)+' ',
	'      %c(#00ffff) ###############      %c(#0066ff)       ############       %c(#0000ff)    ################    %c(#660099)     #####     #####      %c(#b20021)      #############       %c(#cc0000)    ############   '+ansiExpression(0)+' ',
	'      %c(#00ffff) #####     ######     %c(#0066ff)     ######    ######     %c(#0000ff)    #####       #####   %c(#660099)     #####   #####        %c(#b20021)    ######     ######     %c(#cc0000)  #######          '+ansiExpression(0)+' ',
	'      %c(#00ffff) #####       #####    %c(#0066ff)    #####        #####    %c(#0000ff)    #####       #####   %c(#660099)     ###########          %c(#b20021)   #####         #####    %c(#cc0000)  ######           '+ansiExpression(0)+' ',
	'      %c(#00ffff) #####       #####    %c(#0066ff)   ####################   %c(#0000ff)    ################    %c(#660099)     #########            %c(#b20021)   #####         #####    %c(#cc0000)    #######        '+ansiExpression(0)+' ',
	'      %c(#00ffff) #####       #####    %c(#0066ff)   ####################   %c(#0000ff)    ##############      %c(#660099)     #########            %c(#b20021)   #####         #####    %c(#cc0000)       #######     '+ansiExpression(0)+' ',
	'      %c(#00ffff) #####       #####    %c(#0066ff)   #####          #####   %c(#0000ff)    ############        %c(#660099)     ###########          %c(#b20021)   #####         #####    %c(#cc0000)          ######   '+ansiExpression(0)+' ',
	'      %c(#00ffff) #####     ######     %c(#0066ff)   #####          #####   %c(#0000ff)    #####    #####      %c(#660099)     #####   #####        %c(#b20021)    ######     ######     %c(#cc0000)         #######   '+ansiExpression(0)+' %c(#006600) #   #   ###   ###  ',
	'      %c(#00ffff) ###############      %c(#0066ff)   #####          #####   %c(#0000ff)    #####      #####    %c(#660099)     #####     #####      %c(#b20021)      ##############      %c(#cc0000)  ############     '+ansiExpression(0)+' %c(#006600)  # #      #    #   ',
	'      %c(#00ffff) ###########          %c(#0066ff)   #####          #####   %c(#0000ff)    #####        #####  %c(#660099)     #####       #####    %c(#b20021)         #######          %c(#cc0000)  ########         '+ansiExpression(0)+' %c(#006600)   #       # # ###  ',
	' '
];

var needSetup = 0;
	
var xx = (window.innerWidth/8);
var yy = (window.innerHeight/16);
var lx = xx.toFixed(0);
var ly = yy.toFixed(0);

function listNetsacpeColors() {
	var t=new Array();
	for (var k in TermGlobals.nsColors) t.push(k);
	t.sort();
	var s='\n';
	var l=0;
	for (var i=0; i<t.length; i++) {
		var c=t[i];
		if (l+c.length>lx-2) {
			s+='\n';
			l=0;
		}

		else if (l>0) {
			s+=' ';
			l++;
		}

		s+= '%c(@'+c+')'+c;
		l+=c.length;
	}
	return s+'%c0\n ';
}

function listWebColors() {
	var t=new Array();
	for (var k=1; k<TermGlobals.webColorCodes.length; k++) {
		t.push(TermGlobals.webColorCodes[k]);
	}

	var s='\n';
	var l=0;
	for (var i=0; i<t.length; i++) {
		var c=t[i];
		if (l+c.length>lx-2) {
			s+='\n';
			l=0;
		}

		else if (l>0) {
			s+=' ';
			l++;
		}

		s+= '%c(#'+c+')'+c;
		l+=c.length;
	}
	return s+'%c0\n ';
}

function termOpen(n) {
	if (!term[n]) {
		//var y=(n==1)? 70: 280;
		term[n]=new Terminal
		(
			{
				x: -2,
				y: -2,
				rows: ly,
				mapANSI: true,
				bgColor:'#000000',
				frameColor:'#000000',
				frameWidth:0,
				ANSItrueBlack: true,
				cols: lx,
				ps: 'root@jarvis-0c27 #',
				greeting: mainPage,
				id: n,
				termDiv: 'termDiv'+n,
				crsrBlinkMode: true,
				handler: termHandler,
				exitHandler: termExitHandler,
				ctrlHandler: ctrlHandler
			}
		);

		if (term[n]) {
            term[n].open();
		}
	}

	else if (term[n].closed) {
		term[n].open();
	}
	
	else {
		term[n].focus();
	}
}

function ctrlHandler() {
	if (this.inputChar == termKey.ETX) {
		// exit on ^C (^C == ASCII 0x03 == <ETX>)
		this.close();
	}
}

var stopped = ['Clearing /root/temp ...',
	'/root/temp deleted',
	ansiExpression(91)+'System stopped. Press F5 to restart'+ansiExpression(0)
];

function termHandler() {
    this.newLine();

	var args = this.lineBuffer.split(' ');
	var cmd = args[0];

    if (cmd!=='') {
        if (cmd == 'login') {
            var user = args[1];
            if (!user) {
                this.type('usage: login <username>');
                this.newLine();	
            }

            else {
                this.env.user = user;
                this.lock = false;
                this.rawMode = false;
                return;
            }
        }

		/*if (cmd=='switch') {
			var other=(this.id==1)? 2:1;
			termOpen(other);
		}*/

		else if (cmd=='clear') {
			this.clear();
		}

		else if (cmd=='exit') {
			this.clear();
			this.write(stopped);
			this.lock = true;
			this.rawMode = true;
			return;
			//this.close();
		}

		else if (cmd=='stop') {
			this.clear();
			this.write(stopped);
			this.lock = true;
			this.rawMode = true;
			return;
			//this.close();
		}

		else if (cmd=='shutdown') {
			var shua = args[1];
			if (!shua) {
				this.write('Needs 1 argument');
				this.newLine();
			}

			else {
				if (shua == '-c') {
					this.clear();
					this.write(stopped);
					this.lock = true;
					this.rawMode = true;
					return;
					//this.close();
				}

				else if (shua == '-r') {
					this.write('Rebooting...');
					this.close();
					this.open(1);
					this.clear();
					this.write(mainPage);
				}

				else {
					this.write('Invalid syntax');
					this.newLine();
				}
            }
        }

        else if (cmd=='help') {
			this.write(helpPage);
		}
		
		else if (cmd=='id') {
			this.write('terminal id: '+this.id);
		}

		else if (cmd=='nscolors') {
			this.write(listNetsacpeColors());
		}

		else if (cmd=='webcolors') {
			this.write(listWebColors());
		}

		else if (cmd=='logo') {
			this.write(logo);
		}

		else if (cmd=='cs') {
			var csa = args[1];
			if (!csa) {
				this.write('Needs 1 argument');
				this.newLine();
			}
			else {
				if (csa == '--signature') {
					var sign = args[2];
					if (!sign) {
						this.write('Please enter path');
						this.newLine();
					}
					
					else {
						if (sign == 'main') {
							this.write(signature);
						}
						
						else {
							this.write('Invalid path');
						    this.newLine();
						}
					}
				}
			}
		}

		else if (cmd=='reboot') {
			this.write('Rebooting...');
			this.close();
			this.open(1);
			this.clear();
			this.write(mainPage);
		}

		else if (cmd=='matrix') {
            window.location.assign('https://system.jarvis.studio/matrix.html');
		}

		else if (cmd=='site') {
            this.write('Opening ...');
            window.location.assign('https://jarvis.studio');
		}

		else if (cmd=='restart') {
			this.write('Rebooting...');
			this.close();
			this.open(1);
			this.clear();
			this.write(mainPage);
		}

		else if (cmd=='setup') {
			this.clear();
			needSetup = true;
			this.write(setup);
		}

		else {
			this.type('Command \'' + cmd + '\' not found');
			this.newLine();
		}
	}
	this.prompt();
}

function termExitHandler() {
	var other=(this.id==1)? 2:1;

	if ((term[other]) && (term[other].closed==false)) {
        term[other].focus();
	}
}