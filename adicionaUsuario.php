<?php include("cabecalho.php"); ?>
<?php

    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');

    $userNome = $_POST['userNome'];

    $usuarioDAO = new UsuarioDAO($conecta);
    ?>
    <div class="install">
    <script>
    var t = ["felipe@localhost:~/htdocs/echat$ sudo apt-get install E<br>",
"Reading package lists... Done<br>",
"Building dependency tree       <br>",
"Reading state information... Done<br>",
"gpick is already the newest version.<br>",
"0 upgraded, 0 newly installed, 0 to remove and 36 not upgraded.<br>",
"package 'vlc-nox'<br>",
"felipe@localhost:~/htdocs/echat$ sudo apt-get install gpick && atom<br>",
"Reading package lists... Done<br>",
"Building dependency tree       <br>",
"Reading state information... Done<br>",
"gpick is already the newest version.<br>",
"0 upgraded, 0 newly installed, 0 to remove and 36 not upgraded.<br>",
"No command 'atom' found, did you mean:<br>",
"Command 'atop' from package 'atop' (universe)<br>",
"atom: command not found<br>",
"Reading package lists... Done<br>",
"Reading package lists... Done<br>",
"Building dependency tree      <<br>",
"Reading state information... Done<br>",
"The following extra packages will be installed:<br>",
"esound-common libaacs0 libaudiofile1 libbluray1 libesd0 libpostproc52<br>",
"libsvga1 libvdpau1<br>",
"Suggested packages:<br>",
"libbluray-bdj pulseaudio-esound-compat nvidia-vdpau-driver vdpau-driver<br>",
"mplayer-doc netselect fping<br>",
"The following NEW packages will be installed:<br>",
"esound-common libaacs0 libaudiofile1 libbluray1 libesd0 libpostproc52<br>",
"libsvga1 libvdpau1 mplayer<br>",
"0 upgraded, 9 newly installed, 0 to remove and 36 not upgraded.<br>",
"Need to get 2.926 kB of archives.<br>",
"After this operation, 6.819 kB of additional disk space will be used.<br>",
"Building dependency tree       <br>",
"Reading state information... Done<br>",
"The following extra packages will be installed:<br>",
"abiword-common abiword-plugin-grammar abiword-plugin-mathview libabiword-3.0<br>",
"libchamplain-0.12-0 libchamplain-gtk-0.12-0 libgdome2-0<br>",
"libgdome2-cpp-smart0c2a libgoffice-0.10-10 libgoffice-0.10-10-common<br>",
"libgsf-1-114 libgsf-1-common libgtkmathview0c2a liblink-grammar4 libots0<br>",
"libtidy-0.99-0 libwv-1.2-4 link-grammar-dictionaries-en<br>",
"The following NEW packages will be installed:<br>",
"abiword abiword-common abiword-plugin-grammar abiword-plugin-mathview<br>",
"libabiword-3.0 libchamplain-0.12-0 libchamplain-gtk-0.12-0 libgdome2-0<br>",
"libgdome2-cpp-smart0c2a libgoffice-0.10-10 libgoffice-0.10-10-common<br>",
"libgsf-1-114 libgsf-1-common libgtkmathview0c2a liblink-grammar4 libots0<br>",
"libtidy-0.99-0 libwv-1.2-4 link-grammar-dictionaries-en<br>",
"0 upgraded, 19 newly installed, 0 to remove and 36 not upgraded.<br>",
"Need to get 8.522 kB of archives.<br>",
"After this operation, 42,7 MB of additional disk space will be used.<br>",
"Do you want to continue? [Y/n]><br>",]
    var pos = 0;
    var callback = function() {
      $('div.install').append('<p>' + t[pos] + '</p>');
      pos++;
      if (pos < t.length) {
        setTimeout(callback, Math.floor((Math.random() * 50) + 30));
      }
    }

    setTimeout(callback, 1000);

  </script>
    </div>
        <?php
    if ($userNome != null) {

        if ($usuarioDAO->adicionaUsuario($userNome)) {
          logarUsuario($userNome);
          header('refresh: 3;  url=index.php');
        } else {
          header('refresh: 3;  url=index.php');
        }
    } else {
      header('refresh: 3;  url=index.php');
    }

    