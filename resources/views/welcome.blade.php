
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>PRUEBA DE IDENTIFICACIÓN FACIAL</h1>
        <p>Reconocimiento Facial con Javascript y Face API (Tensorflow)</p>
        <div>
            <p>Fuente Youtube: </p><a href="//www.google.com/search?q=laravel+verificacion+facial&rlz=1C1PRFI_enPE1063PE1063&oq=laravel+verificacion+facial&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQIRigATIHCAIQIRigATIHCAMQIRigATIHCAQQIRifBdIBCDczNzdqMGo0qAIAsAIB&sourceid=chrome&ie=UTF-8#fpstate=ive&ip=1&vld=cid:1c42198e,vid:QbQuNyEgMvY,st:0"> Garaje de Ideas. 21/04/2023</a>
            <p>API: </p><p>https://github.com/justadudewhohacks/face-api.js/blob/master/dist/face-api.min.js</p>
        </div>
        <div id="container">
            <!--img src="./public/images/antes.jpg" id="image"-->
            <img src="{{URL::asset('images/antes.jpg')}}">
            <canvas id="canvas" width="135" height="168"></canvas>
        </div>
        <!-- Ver ubicacion de imagen y canvas en minuto 9:15-->

        <!--script src="./resources/js/script.js" type="module"></script-->
        <script src="{{URL::asset('js/api-face.min.js')}}" type="module"></script>
        <script src="{{URL::asset('js/script.js')}}" type="module"></script>
    </body>

