

    <!--  Scripts-->
    <script type="text/javascript" src="{{ url('assets/js/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/date_picker/picker.date.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery.timeago.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/date_picker/picker.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/init.js') }}"></script>
    <script type="text/javascript" src="//cdn.socket.io/socket.io-1.3.5.js"></script>
    <script>
      var socket = io.connect('http://10.151.63.8:9090/');
      socket.on('ada_pertanyaan', function (msg) {
        console.log(msg);
     
        var notif = document.getElementById('notifications');
     
        // notif.innerHTML = msg.split("{")[2] + 'baru saja mendaftar';
        // notif.style.visibility = "visible";
        // notif.style.background-color = "#F44336";
        notif.style.cssText = 'visibility: visible; background-color: #F44336;';
        // notif.appendChild(div);
      });
    </script>