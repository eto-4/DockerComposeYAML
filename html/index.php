<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicació Web amb Base de Dades</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-bottom: 2rem;
            backdrop-filter: blur(10px);
        }

        .header h1 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .header p {
            color: #666;
            font-size: 1.2rem;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            color: #4a5568;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            border-bottom: 3px solid #667eea;
            padding-bottom: 0.5rem;
        }

        .card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .status-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: #48bb78;
            color: white;
            border-radius: 25px;
            font-weight: bold;
            margin-top: 0.5rem;
        }

        .ip-display {
            background: #edf2f7;
            padding: 1rem;
            border-radius: 8px;
            border-left: 4px solid #667eea;
            margin: 1rem 0;
        }

        .ip-display strong {
            color: #2d3748;
        }

        .features-list {
            list-style: none;
        }

        .features-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
        }

        .features-list li:before {
            content: "✓";
            color: #48bb78;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .footer {
            text-align: center;
            color: white;
            padding: 2rem;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .tech-stack {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 1rem 0;
            flex-wrap: wrap;
        }

        .tech-item {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            color: white;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Capçalera -->
        <header class="header">
            <h1>🎯 Aplicació Web amb Base de Dades</h1>
            <p>Contenidors Docker amb configuració personalitzada</p>
            <div class="status-badge">SISTEMA OPERATIU</div>
        </header>

        <!-- Contingut Principal -->
        <div class="content-grid">
            <!-- Targeta d'Informació del Servidor Web -->
            <div class="card">
                <h2>🌐 Servidor Web</h2>
                <div class="ip-display">
                    <strong>IP Estàtica:</strong> 192.168.100.20
                </div>
                <p>Aquest servidor està executant Nginx i serveix les pàgines web estàtiques. La configuració inclou:</p>
                <ul class="features-list">
                    <li>Servidor web d'alt rendiment</li>
                    <li>Suport per a contingut estàtic</li>
                    <li>Configuració personalitzada</li>
                    <li>Logs en temps real</li>
                </ul>
            </div>

            <!-- Targeta de Base de Dades -->
            <div class="card">
                <h2>🗃️ Base de Dades</h2>
                <div class="ip-display">
                    <strong>IP Estàtica:</strong> 192.168.100.10
                </div>
                <p>El servidor de base de dades MySQL està configurat amb:</p>
                <ul class="features-list">
                    <li>Base de dades inicialitzada automàticament</li>
                    <li>Usuaris i permisos configurats</li>
                    <li>Dades de exemple carregades</li>
                    <li>Connexions des de la xarxa interna</li>
                </ul>
            </div>

            <!-- Targeta de Configuració -->
            <div class="card">
                <h2>⚙️ Configuració</h2>
                <p>Aquesta aplicació està desplegada utilitzant Docker Compose amb les següents característiques:</p>
                <ul class="features-list">
                    <li>Xarxa personalitzada Docker</li>
                    <li>IPs estàtiques assignades</li>
                    <li>Volums persistents</li>
                    <li>Configuració en entorn de producció</li>
                    <li>Reinici automàtic en fallades</li>
                </ul>
            </div>
        </div>

        <!-- Peu de pàgina -->
        <footer class="footer">
            <div class="tech-stack">
                <span class="tech-item">Docker</span>
                <span class="tech-item">Nginx</span>
                <span class="tech-item">MySQL</span>
                <span class="tech-item">HTML5</span>
                <span class="tech-item">CSS3</span>
            </div>
            <p>📊 <strong>Estat del sistema:</strong> Tots els serveis estan operatius i funcionant correctament</p>
            <p>🕐 Última actualització: <span id="current-time"></span></p>
        </footer>
    </div>

    <script>
        // Actualitza l'hora actual
        function updateTime() {
            const now = new Date();
            const options = { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit',
                timeZone: 'Europe/Madrid'
            };
            document.getElementById('current-time').textContent = 
                now.toLocaleDateString('ca-ES', options);
        }
        
        updateTime();
        setInterval(updateTime, 1000);

        // Efecte de càrrega suau
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>