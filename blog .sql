-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 12 Dec 2013 la 19:05
-- Versiune server: 5.1.69
-- Versiune PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Bază de date: `blog`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `content` longtext NOT NULL,
  `showpost` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Salvarea datelor din tabel `posts`
--

INSERT INTO `posts` (`pid`, `title`, `content`, `showpost`) VALUES
(44, 'Test', 'Introduceti textul aici...', 1),
(47, 'Test2', 'DupÄƒ o perioadÄƒ Beta publicÄƒ scurtÄƒ, producÄƒtorul Avast! a anunÅ£at lansarea celei de-a opta versiuni a aplicaÅ£iilor sale de securitate Avast! Free Antivirus, Avast! Pro Antivirus, Avast! Internet Security ÅŸi Avast! Premier.\r\n \r\nNoile produse Avast folosesc o interfaÅ£Äƒ nouÄƒ, care foloseÅŸte stilul grafic Modern UI ÅŸi sunt optimizate pentru interacÅ£iunile tactile. Dincolo de cosmetizarea graficÄƒ, Avast! 8.0 aduce un modul care verificÄƒ existenÅ£a unor eventuale actualizÄƒri pentru produsele software instalate pe calculator, scutind astfel utilizatorul sÄƒ mai apeleze la produse separate precum Secunia Personal Software Inspector ÅŸi oferindu-i o protecÅ£ie suplimentarÄƒ Ã®mpotriva breÅŸelor de securitate descoperite Ã®n aplicaÅ£ii populare precum plugin-urile Flash sau Adobe Reader.\r\n \r\nMotorul de scanare a primit o serie de actualizÄƒri, printre care ÅŸi rutine de detecÅ£ie euristicÄƒ avansatÄƒ care permite identificarea unor versiuni noi de fiÅŸiere malware pe baza semnÄƒturilor sau comportamentului familiei din care fac parte. MaÅŸina virtualÄƒ Ã®n care sunt rulate fiÅŸierele suspecte a fost ÅŸi el Ã®mbunÄƒtÄƒÅ£it, Avast afirmÃ¢nd cÄƒ utilizatorul va putea lua decizii mai bune pe baza informaÅ£iilor oferite de executarea codului Ã®n acest mediu protejat.\r\n \r\nPrintre noutÄƒÅ£i se mai gÄƒsesc Browser Cleaner, un modul de control de la distanÅ£Äƒ numit AccessAnywhere care aduce multe Ã®mbunÄƒtÄƒÅ£iri modulului actuale de control de la distanÅ£Äƒ, ÅŸi Data Shredder, care va permite ÅŸtergerea mai sigurÄƒ a unor discuri sau directoare importante. Aceste module nu sunt disponibile Ã®n totalitate Ã®n cadrul versiunii gratuite, cei care doresc mai mult trebuind sÄƒ opteze, ca de obicei, pentru versiunile comerciale superioare.', 1),
(50, 'Internet', '[b]World Wide Web[/b] (www, w3, web) - este o retea mondiala asemuita cu o panza de paianjen care se bazeaza pe un sistem de documente si informatii de tip hipertext legate intre ele. Hipertextele pot fi accesate de Internet si ele pot fi regasite cu ajutorul unui identificator univoc numit URL. Un hipertext poate contine imagini, sunete, legaturi catre alte hipertexturi chiar... Informatiile din fisierele de tip hipertext pot fi vizualizate cu niste programe speciale de navigare numite browsere care descarca paginile web de pe un server web si le afiseaza pe un terminal "client" la utilizator. Cele mai cunoscute browsere sunt: Internet Explorer, Mozzila, Google Chrome, Safari, Opera...\r\n\r\n[b]Posta electronica[/b] (e-mail: Electronic Mail) - este unul dintre cele mai utilizate servicii Internet si consta in transferul de mesaje intre diferiti utilizatori. Posta electronica desemneaza sisteme pentru transmiterea dau primirea de mesaje prin intermediul unei retele. Uneori pentru e-mail se mai intrebuinteaza si denumirea mail sau se mai scrie si email (forma incorecta).\r\n\r\n[b]Chat-ul [/b]- permite comunicarea in timp real intre doi sau mai multi utilizatori din reteaua Internet atat prin voce cat si prin imagini video. Chat-ul poate fi realizat prin intermediul unui browser ori cu ajutorul unor programe dedicate cum ar fi Yahoo! Messenger, Skype etc.\r\n\r\nNewsgroup (grupuri de stiri) - permite utilizatorilor la stiri grupate pe subiecte de interes prin intermediul retelelor de stiri.\r\n\r\n[b]Telnet[/b] (Terminal Emulation Program) - permite conectarea in reteaua Internet la un calculator aflat la distanta. Calculatorul care se conecteaza la serverul Telnet se numeste terminal. Utilizatorul terminalului poate utiliza resursele calculatorului la care se conecteaza insa acest lucru este posibil doar daca utilizatorul este inregistrat ca utilizator autorizat si figureaza in lista de conturi a serverului Telnet.\r\n\r\nTelnet este un protocol de retea care se foloseste in Internet si in retelele locale de calculatoare la comunicarea textuala, bidirectionala si interactiva bazata pe realizarea unei conexiuni virtuale cu statia de lucru destinata.\r\n\r\n[b]FTP[/b] (File Transfer Protocol) - este un protocol (set de reguli) utilizat pentru accesul la fisierele aflate pe serverele dintr-o retea. Serverele FTP permit sa se faca o conectare la ele de oriunde din Internet si ca fisierele pe care le gazduiesc sa fie transferate (incarcate sau descarcate). ', 1),
(51, 'IP-ul', 'Fiecarui calculator din Internet is se atribuie o adresa IP fie permanenta (IP fix) fie doar pe perioada folosirii retelei. Astfel se pot evita problemele legate de conflictele ce pot aparea la transferul de date. Adresa IP identifica reteaua si statia de lucru din cadrul unei retele.\r\n\r\nAdresa IP este reprezentata in forma zecimala, separand prin puncte echivalentii zecimali ai celor 4 octeti (xxx.xxx.xxx.xxx).\r\n\r\nIP (Inernet Protocol) reprezinta un protocol care asigura un serviciu de transmitere a datelor fara o conexiune permanenta. Acesta identifica fiecare interfata logica a echipamentelor conectate printr-un numar numit adresa IP. Versiunea de standard folosita pana de curand in majoritatea cazurilor este IPv4 insa, internetul este intr-un proces de continua evolutie si s-a trecut la urmatoarea versiune de IP numita IPv6.\r\n\r\nIn IPv4 adresa IP este reprezentata pe 32 de biti (de exemplu 192.168.1.101). Alocarea adreselor IP nu este arbitrara, ea fiind facutad e organizatii insarcinate cu distribuirea de spatii de adrese (de exemplu pentru spatiul de adrese atribuit Europei este RIPE).\r\n\r\nLa inceputul erei Internetului, adresele IPv4 se imparteau in 5 clase de adrese in functie de configuratia binara a primului octet al clasei, clasele fiind notate cu litere de la A-E.', 1),
(52, 'DNS', 'DNS-ul este un sistem de baze de date ce administreaza numele de gazda si adresele IP asociate. Prin utilizarea DNS se pot folosi nume simple (de exemplu, www.infoliceu.ro) pentru a gasi o gazda, in loc sa se foloseasca adresele IP. Serverele DNS pot lucra impreuna pentru a mapa toate numele din domeniu la adresele lor IP lucru ce face posibila comunicarea pe Internet.\r\n\r\nCea mai cunoscuta aplicatie a DNS-ului este gestionarea domeniilor pe Internet. Datele DNS sunt structurate ierarhic pe domenii. Servereleau pot stii o parte din aceste date care apartin unui subdomeniu. Subdomeniul de care raspunde un server DNS se numeste zona. Serverul DNS care detine toate informatiile referitoare la zona este considerat autoritate pentru zona respectiv si poate raspunde la interogarile despre gazde din zona lui.\r\n\r\nCaracteristicile sistemului de nume (DNS) sunt:\r\n\r\n- foloseste o structura ierarhizata\r\n\r\n- deleaga autoritatea pentru nume\r\n\r\n- baza de date cu numele si adresele IP este distribuita.\r\n\r\nFiecare implementare TCP/IP contine o rutina software (name resolver) specializata in interogarea DNS in vederea translatarii nume/IP si invers.\r\n\r\nExista doua tipuri de rezolutie de nume:\r\n\r\n- rezolutie recursiva: name resolverul cere serverului de nume sa faca translatarea\r\n\r\n- rezolutie interetiva: name reselverul cere serverului de nume sa ii furnizeze adresa IP a unui server care poate face translatarea.\r\n\r\nDomenii parcate - prin parcarea unui domeniu pe un cont de hosting se obtine suprapunerea domeniului peste domeniul principal al hostingului. Astfel cele doua (sau mai multe domenii - daca au fost parcate mai multe domenii) vor afisa acelasi continut. Un site dintr-un domeniu parcat este o pagina web neconstruita, care apartine unei companii de inregistrare sau unui detinator de nume de domeniu.\r\n\r\nUtilizatorii sunt directionati spre site-uri din domenii parcate cand introduc in bara de adrese a browser-ului o adresa URL a unei pagini web neconstruite.\r\n\r\nDomenii addon - nume de domeniu care face referire catre un subdirector aflat in contul de hosting pentru un alt domeniu. Domeniile addon trebuie sa fie nume de domenii inregistrate pe care sa le detineti si pe care trebuie sa le configurati sa faca referire catre serverul pe care este situat site-ul dumneavoastra.\r\n\r\nPresupunem ca detineti doua domenii xxx.com si yyy.com si ca aveti hosting care accepta domenii addon pentru xxx.com. Atunci puteti gazdui cel de-al doilea domeniu yyy.com in contului lui xxx.com in contul de hosting pe care il aveti pentru xxx.com.\r\n\r\nIn momentul in care terminati de setat domeniul addon pentru yyy.com in contul xxx.com se creaza in contul de hosting al lui xxx.com un director yy.com in care se incarca fisierele site-ului yyy.com.\r\n\r\nCand un vizitator viziteaza www.yyy.com va vedea continutul folderului yyy creat in contul de hosting pentru xxx.com, adica, va vedea continutul www.xxx.com/yyy.com fara sa-si dea seama ca se afla pe alt domeniu.\r\n\r\n \r\n\r\nForma generala a unei adrese de navigare este:\r\n\r\nhttp://www.site.domeniu\r\n\r\nunde:\r\n\r\nsite: numele fisierului de unde se incepe navigarea\r\n\r\ndomeniu: categoria din care face parte site-ul respectiv.\r\n\r\n \r\n\r\nExemple de domenii simbolice primare:\r\n\r\n.com - comercial\r\n\r\n.edu - educational\r\n\r\n.gov - guvernamental\r\n\r\n.int - international\r\n\r\n.mil - militar\r\n\r\n.net - intretinere retea\r\n\r\n.org - organizatie\r\n\r\nExemple de domenii de interes general:\r\n\r\n.info\r\n\r\n.biz\r\n\r\n.mobi\r\n\r\nExemple de domenii corespunzatoare statelor lumii:\r\n\r\n.fr - Franta\r\n\r\n.bg - Bulgaria\r\n\r\n.it - Italia\r\n\r\n.de - Germania\r\n\r\n.uk - Marea Britanie\r\n\r\n.ro - Romania\r\n\r\n.ar - Argentina\r\n\r\n.be - Belgia\r\n\r\n.us - Statele Unite', 1),
(53, 'Internet 2', '[b]URL[/b] (Uniform Resource Locator = localizator uniform de resurse = adresa uniforma pentru localizarea resurselor) - secventa de caractere standardizata folosita pentru denumirea, localizarea si identificarea unor resurse de pe Internet, inclusiv documente text, imagini, clipuri video, expuneri de diapozitive...\r\n\r\nURL-ul este un caz particular al unei specificatii mai ample numite URI (Identificator uniform de resurse).\r\n\r\n[b]Sintaxa unui URL este:[/b]\r\n\r\n \r\n\r\nprotocol://nume_DNS/nume_local\r\nunde:\r\n\r\nprotocol: reprezinta protocolul folosit (de obicei http);\r\n\r\nnume_DNS: numele domeniului pe care se afla resursa;\r\n\r\nnume_local: este format din calea si numele resursei de pe discul local; aceasta parte poate sa lipseasca.\r\n\r\n \r\n\r\n[b]HTTP (Hypertext Transfer Protocol)[/b] este cea mai des utilizata metoda pentru accesarea informatiilor pastrate pe serverele WWW pe Internet. Acest protocol este un protocol de tip text si reprezinta protocolul implicit al WWW.\r\n\r\n \r\n\r\n[b]HTTPS (Secure HyperText Transfer Protocol = HyperText Transfer Protocol/Secure) [/b]reprezinta protocolul HTTP incapsulat intr-un flux SSL/TLS cu scopul de a oferi o identificare criptata si sigura la server. Conexiunile HTTPS sunt folosite de oicei pentru efectuarea de conexiuni securizate cum ar fi efectuarea platilor online, folosirea casutelor de e-mail etc.\r\n\r\n \r\n\r\n[b]Portal[/b] - este un site web ce ofera internautilor o gama larga de resurse si servicii. Cu ajutorul acestuia se pot gasi informatii mai usor ele fiind grupate pe categorii cum ar fi: contatii la Bursa, stiri interne, stiri externe, sport, sociale, vreme, gestionarea mesajelor din casuta e-mail, horoscop etc. Un exemplu de portal este Yahoo.\r\n\r\n \r\n\r\n[b]Motoare de cautare[/b] - program cu ajutorul caruia se cauta informatii pe Internet. Acesta acceseaza Internetul in mod automat si frecvent si stocheaza informatii despre site-uri cum ar fi: titlul, cuvinte cheie, o parte din continut... intr-o baza de date. Daca un utilizatori apeleaza la un motor de cautare pentru a gasi o informatie, motorul de cautare va cauta in baza de date si in functie de anumite criterii de prioritate va crea si afisa o lista de rezultate.\r\n\r\nCele mai cunoscute motoare de cautare: Google, Yahoo! , Baidu, Bing, Ask, Aol, Excite, Lycos, Altavista etc.\r\n\r\n\r\n[color=#ff0000][b]Google[/b][/color]\r\n\r\n- cel mai cunoscut motor de cautare\r\n\r\n- se bazeaza pe cautarea cuvintelor cheie, clasate in functie de numar si de site-urile de origine, insa, Google nu merge pe principiul ca site-urile respectie sa plateasca pentru a fi afisate in capul listei. Sistemul Page Rank (PR) reprezinta populariatea site-urilor, fiecare site fiind contat cu o valoare de la 1-10.\r\n\r\n- publicitatea se limiteaza la cateva link-uri hypertext discrete care apar pe ecran doar in raport cu informatiile cautate\r\n\r\n- permite utilizarea in mai multe limbi\r\n\r\n- ofere o gramada de servicii inafar de serviciile de cautare a informatiilor in functie de preferinte (cautare simpla sau cautare avansata).', 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`uid`, `user`, `password`, `admin`) VALUES
(1, 'Tavi', 'test', 1),
(2, 'admin', 'test', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
