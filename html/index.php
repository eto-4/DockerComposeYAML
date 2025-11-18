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

        .status-error {
            background: #e53e3e;
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

        .productes-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .productes-table th,
        .productes-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .productes-table th {
            background: #667eea;
            color: white;
            font-weight: 600;
        }

        .productes-table tr:hover {
            background: #f7fafc;
        }

        .preu {
            font-weight: bold;
            color: #2d3748;
        }

        .producte-id {
            color: #718096;
            font-weight: 600;
        }

        .error-message {
            background: #fed7d7;
            color: #c53030;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
            border-left: 4px solid #e53e3e;
        }

        .success-message {
            background: #c6f6d5;
            color: #276749;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
            border-left: 4px solid #48bb78;
        }

        @media (max-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2rem;
            }

            .productes-table {
                font-size: 0.9rem;
            }

            .productes-table th,
            .productes-table td {
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Capçalera -->
        <header class="header">
            <h1>🎯 Magatzem - Gestió de Productes</h1>
            <p>Sistema de gestió amb PHP, MySQL i Docker</p>
            <?php
            // Configuració de connexió a la base de dades
            $servername = "172.20.0.10"; // IP estática del contenidor MySQL
            $username = "juanito";
            $password = "1234";
            $database = "magatzem";
            
            // Crear connexió
            $conn = new mysqli($servername, $username, $password, $database);
            
            // Verificar connexió
            if ($conn->connect_error) {
                echo '<div class="status-badge status-error">❌ ERROR CONNEXIÓ BD</div>';
            } else {
                echo '<div class="status-badge">✅ SISTEMA OPERATIU</div>';
            }
            ?>
        </header>

        <!-- Contingut Principal -->
        <div class="content-grid">
            <!-- Targeta de Productes -->
            <div class="card">
                <h2>📦 Llista de Productes</h2>
                <div class="ip-display">
                    <strong>Base de Dades:</strong> magatzem | <strong>Taula:</strong> productes
                </div>
                
                <?php
                if (!$conn->connect_error) {
                    // Consultar productes
                    $sql = "SELECT * FROM productes ORDER BY idp";
                    $result = $conn->query($sql);
                    
                    if ($result && $result->num_rows > 0) {
                        echo '<div class="success-message">';
                        echo '✅ ' . $result->num_rows . ' productes trobats';
                        echo '</div>';
                        
                        echo '<table class="productes-table">';
                        echo '<thead><tr><th>ID</th><th>Producte</th><th>Preu (€)</th></tr></thead>';
                        echo '<tbody>';
                        
                        while($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td class="producte-id">#' . $row["idp"] . '</td>';
                            echo '<td>' . htmlspecialchars($row["nomarticle"]) . '</td>';
                            echo '<td class="preu">' . number_format($row["preu"], 2) . ' €</td>';
                            echo '</tr>';
                        }
                        
                        echo '</tbody></table>';
                    } else {
                        echo '<div class="error-message">';
                        echo '❌ No s\'han trobat productes o hi ha un error en la consulta';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="error-message">';
                    echo '❌ No es pot connectar a la base de dades: ' . $conn->connect_error;
                    echo '</div>';
                }
                ?>
            </div>

            <!-- Targeta d'Informació del Servidor Web -->
            <div class="card">
                <h2>🌐 Servidor Web</h2>
                <div class="ip-display">
                    <strong>IP Estàtica:</strong> 172.20.0.15
                </div>
                <p>Aquest servidor està executant PHP-Apache i connecta amb la base de dades MySQL. La configuració inclou:</p>
                <ul class="features-list">
                    <li>Servidor web Apache amb PHP 7.4</li>
                    <li>Connexió MySQL amb mysqli</li>
                    <li>Contenidor Docker amb IP estàtica</li>
                    <li>Port 80 mapejat al 8888 de l'host</li>
                </ul>
            </div>

            <!-- Targeta de Base de Dades -->
            <div class="card">
                <h2>🗃️ Base de Dades</h2>
                <div class="ip-display">
                    <strong>IP Estàtica:</strong> 172.20.0.10
                </div>
                <p>El servidor de base de dades MySQL està configurat amb:</p>
                <ul class="features-list">
                    <li>Base de dades: magatzem</li>
                    <li>Taula: productes (5 registres)</li>
                    <li>Usuari: username</li>
                    <li>Connexions des de la xarxa interna</li>
                </ul>
                
                <?php
                if (!$conn->connect_error) {
                    // Estadístiques de la base de dades
                    $stats_sql = "SELECT COUNT(*) as total, SUM(preu) as valor_total, AVG(preu) as preu_mitja FROM productes";
                    $stats_result = $conn->query($stats_sql);
                    
                    if ($stats_result && $stats_row = $stats_result->fetch_assoc()) {
                        echo '<div style="margin-top: 1rem; padding: 1rem; background: #f0fff4; border-radius: 8px;">';
                        echo '<h3 style="color: #2d3748; margin-bottom: 0.5rem;">📊 Estadístiques</h3>';
                        echo '<p><strong>Total productes:</strong> ' . $stats_row['total'] . '</p>';
                        echo '<p><strong>Valor total:</strong> ' . number_format($stats_row['valor_total'], 2) . ' €</p>';
                        echo '<p><strong>Preu mitjà:</strong> ' . number_format($stats_row['preu_mitja'], 2) . ' €</p>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>

        <!-- Peu de pàgina -->
        <footer class="footer">
            <div class="tech-stack">
                <span class="tech-item">Docker</span>
                <span class="tech-item">PHP 7.4</span>
                <span class="tech-item">Apache</span>
                <span class="tech-item">MySQL</span>
                <span class="tech-item">MySQLi</span>
            </div>
            <?php
            if (!$conn->connect_error) {
                echo '<p>📊 <strong>Estat del sistema:</strong> Tots els serveis estan operatius</p>';
                echo '<p>🔗 <strong>Connexió BD:</strong> Establerta correctament</p>';
            } else {
                echo '<p>📊 <strong>Estat del sistema:</strong> Error de connexió a la base de dades</p>';
            }
            
            // Tancar connexió
            if (isset($conn) && !$conn->connect_error) {
                $conn->close();
            }
            ?>
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