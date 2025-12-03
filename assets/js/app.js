document.addEventListener('DOMContentLoaded', () => {
    const splash = document.getElementById('splash-screen');
    const app = document.getElementById('app');
    const homePage = document.getElementById('home-page');
    const trackerPage = document.getElementById('tracker-page');

    const navLinks = document.querySelectorAll('.bottom-nav a');

    const pages = {
        'home': homePage,
        'tracker': trackerPage
    };

    // Splash screen logic
    setTimeout(() => {
        splash.style.opacity = '0';
        setTimeout(() => {
            splash.classList.add('hidden');
            app.classList.remove('hidden');
        }, 1000);
    }, 2000);

    // Navigation logic
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetPage = link.getAttribute('href').substring(1);

            // Toggle active class on nav links
            navLinks.forEach(nav => nav.classList.remove('active'));
            link.classList.add('active');

            // Show/hide pages
            for (const page in pages) {
                if (pages[page]) {
                    pages[page].classList.add('hidden');
                }
            }
            if (pages[targetPage]) {
                pages[targetPage].classList.remove('hidden');
            }
        });
    });

    // Chart.js for steps
    const stepsChartCtx = document.getElementById('steps-chart')?.getContext('2d');
    if (stepsChartCtx) {
        new Chart(stepsChartCtx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Steps',
                    data: [8540, 9230, 7890, 10200, 12430, 9870, 8800],
                    backgroundColor: 'rgba(137, 207, 240, 0.6)',
                    borderColor: 'rgba(137, 207, 240, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Button alerts for demo purposes
    const logWaterBtn = document.querySelector('.btn:nth-child(1)');
    const logMoodBtn = document.querySelector('.btn:nth-child(2)');
    if(logWaterBtn) logWaterBtn.addEventListener('click', () => alert('Water logged! (feature coming soon)'));
    if(logMoodBtn) logMoodBtn.addEventListener('click', () => alert('Mood logged! (feature coming soon)'));
});