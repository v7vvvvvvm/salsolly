<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>احبج سلسولي</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #0d0d0d;
            overflow: hidden;
            font-family: 'Arial', sans-serif;
            position: relative;
            perspective: 1000px;
        }
        .container {
            position: absolute;
            text-align: center;
            color: #bb86fc;
            font-size: 4rem;
            font-weight: bold;
            text-shadow: 3px 3px 5px #1b1b1b, 0px 0px 30px rgba(187, 134, 252, 0.9), 0px 0px 60px rgba(187, 134, 252, 0.7);
            transform: rotateY(10deg) rotateX(5deg) translateZ(50px);
            animation: text3D 2s infinite alternate ease-in-out, glow 1.5s infinite alternate;
        }
        
        @keyframes text3D {
            from { transform: rotateY(10deg) rotateX(5deg) translateZ(50px) scale(1); }
            to { transform: rotateY(-10deg) rotateX(-5deg) translateZ(80px) scale(1.1); }
        }
        
        @keyframes glow {
            from { text-shadow: 0px 0px 30px rgba(0, 255, 204, 0.9), 0px 0px 60px rgba(0, 255, 204, 0.7); }
            to { text-shadow: 3px 3px 5px black, 0px 0px 50px rgba(255, 255, 255, 1), 0px 0px 80px rgba(255, 255, 255, 0.9); }
        }
        
        .background-animation {
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(0,150,136,0.2) 10%, rgba(187,134,252,0.4) 40%, rgba(13,13,13,0.9) 100%);
            background-size: 400% 400%;
            animation: moveBg 6s infinite alternate ease-in-out, pulseGlow 4s infinite alternate;
            z-index: -1;
        }
        
        @keyframes moveBg {
            0% { transform: scale(1); background-position: 0% 0%; }
            50% { transform: scale(1.1); background-position: 50% 50%; }
            100% { transform: scale(1); background-position: 100% 100%; }
        }
        
        @keyframes pulseGlow {
            from { filter: blur(10px) brightness(1); }
            to { filter: blur(20px) brightness(1.5); }
        }

        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        .particle {
            position: absolute;
            width: 8px;
            height: 8px;
            background: rgba(0, 150, 136, 0.8);
            border-radius: 50%;
            opacity: 0.8;
            animation: floatParticles 5s infinite ease-in-out;
        }

        @keyframes floatParticles {
            from { transform: translateY(100vh) scale(0.4); opacity: 0; }
            to { transform: translateY(-10vh) scale(1.2); opacity: 1; }
        }

        @media (max-width: 768px) {
            .container {
                font-size: 3rem;
                transform: rotateY(5deg) rotateX(2deg) translateZ(30px);
            }
            .particle {
                width: 6px;
                height: 6px;
            }
        }
    </style>
</head>
<body>
    <div class="background-animation"></div>
    <div class="particles"></div>
    <div class="container">احبج سلسولي ❤️</div>
    
    <script>
        function createParticles() {
            for (let i = 0; i < 8; i++) {
                const particle = document.createElement("div");
                particle.classList.add("particle");
                document.querySelector(".particles").appendChild(particle);
                
                particle.style.left = Math.random() * 100 + "vw";
                particle.style.animationDuration = (Math.random() * 3 + 2) + "s";
                particle.style.animationDelay = Math.random() * 1.5 + "s";
                particle.style.width = particle.style.height = Math.random() * 12 + 4 + "px";
                
                setTimeout(() => { particle.remove(); }, 5000);
            }
        }
        setInterval(createParticles, 80);
    </script>
</body>
</html>
