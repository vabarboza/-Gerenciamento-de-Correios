<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
    $(document).ready(function() {
        new WOW().init();
    });
</script>
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>
<script>
    $(document).ready(function() {
        $('.collapsible').collapsible();
    })
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
            direction: 'up',
            hoverEnabled: false
        });
    });
</script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-analytics.js"></script>

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyC67GDEUpCoab9ak8y5TuCF3BGZfcpFE8U",
        authDomain: "bellinati-perez.firebaseapp.com",
        databaseURL: "https://bellinati-perez.firebaseio.com",
        projectId: "bellinati-perez",
        storageBucket: "bellinati-perez.appspot.com",
        messagingSenderId: "1007336762207",
        appId: "1:1007336762207:web:8adbd5f42664b36537e4ea",
        measurementId: "G-VX4SJ2SLRP"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>
</body>

</html>