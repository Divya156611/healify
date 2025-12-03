<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALIFY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <div id="splash-screen">
        <div class="logo">HEALIFY</div>
        <div class="tagline">Track • Grow • Glow</div>
    </div>

            <main id="app" class="hidden">
                <div id="home-page">
                    <header>
                        <h1>Home</h1>
                    </header>
    
                    <section id="dashboard">
                        <div class="card wellness-score">
                            <h2>Wellness Score</h2>
                            <div class="score">85</div>
                        </div>
                        <div class="card steps">
                            <i class="fas fa-walking"></i>
                            <h3>Steps</h3>
                            <p>8,540</p>
                        </div>
                        <div class="card sleep">
                            <i class="fas fa-bed"></i>
                            <h3>Sleep</h3>
                            <p>7h 30m</p>
                        </div>
                        <div class="card water">
                            <h3>Water Intake</h3>
                            <div class="progress-bar">
                                <div class="progress" style="width: 60%;"></div>
                            </div>
                            <p>6/10 glasses</p>
                        </div>
                        <div class="card mood">
                            <i class="fas fa-smile"></i>
                            <h3>Mood</h3>
                            <p>Happy</p>
                        </div>
                        <div class="card quote">
                            <p>"The greatest wealth is health."</p>
                        </div>
                        <div class="card health-tip">
                            <h3>Health Tip</h3>
                            <p>Stay hydrated, it improves everything.</p>
                        </div>
                    </section>
    
                    <section class="quick-add">
                        <button class="btn"><i class="fas fa-tint"></i> Log Water</button>
                        <button class="btn"><i class="fas fa-grin"></i> Log Mood</button>
                        <button class="btn"><i class="fas fa-dumbbell"></i> Start Workout</button>
                                    </section>
                                </div>
                    
                                <div id="tracker-page" class="hidden">
                                    <header>
                                        <h1>Health Tracker</h1>
                                    </header>
                    
                                    <section id="tracker-dashboard">
                                        <div class="card">
                                            <h3>Weekly Steps</h3>
                                            <canvas id="steps-chart"></canvas>
                                        </div>
                                        <div class="card">
                                            <i class="fas fa-tint"></i>
                                            <h3>Water Intake</h3>
                                            <p>6/10 glasses</p>
                                            <button class="btn btn-small">+</button>
                                            <button class="btn btn-small">-</button>
                                        </div>
                                        <div class="card">
                                            <i class="fas fa-bed"></i>
                                            <h3>Sleep Log</h3>
                                            <p>7h 30m</p>
                                            <input type="text" placeholder="Add sleep time"/>
                                        </div>
                                        <div class="card meal-tracker">
                                            <h3>Meal Tracker</h3>
                                            <ul>
                                                <li>Breakfast: Oats</li>
                                                <li>Lunch: Salad</li>
                                                <li>Dinner: Chicken</li>
                                            </ul>
                                        </div>
                                        <div class="card">
                                            <h3>Calories</h3>
                                            <p>1800 kcal</p>
                                        </div>
                                        <div class="card">
                                            <i class="fas fa-heartbeat"></i>
                                            <h3>Heart Rate</h3>
                                            <p>72 bpm</p>
                                            <input type="text" placeholder="Add heart rate"/>
                                        </div>
                                    </section>
                                </div>
                    
                    
        <nav class="bottom-nav">
            <a href="#home" class="active"><i class="fas fa-home"></i><span>Home</span></a>
            <a href="#tracker"><i class="fas fa-heartbeat"></i><span>Tracker</span></a>
            <a href="#"><i class="fas fa-smile-beam"></i><span>Mood</span></a>
            <a href="#"><i class="fas fa-dumbbell"></i><span>Workout</span></a>
            <a href="#"><i class="fas fa-user"></i><span>Profile</span></a>
        </nav>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
