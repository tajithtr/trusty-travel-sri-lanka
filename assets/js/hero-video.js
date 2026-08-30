/* ==========================================================================
   Trusty Travel Sri Lanka - Ultra Luxury 60fps Animated Sri Lanka Fleet Map
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('heroMapCanvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width = canvas.width = canvas.offsetWidth;
    let height = canvas.height = canvas.offsetHeight;

    window.addEventListener('resize', () => {
        if (!canvas) return;
        width = canvas.width = canvas.offsetWidth;
        height = canvas.height = canvas.offsetHeight;
    });

    // Sri Lanka Tour Route Waypoints with Detailed Icons & Labels
    const waypoints = [
        { name: 'Colombo Airport (CMB)', x: 0.28, y: 0.65, icon: '✈️', tag: 'Arrival Gate' },
        { name: 'Anuradhapura Citadel', x: 0.45, y: 0.26, icon: '🏛️', tag: 'Ancient Capital' },
        { name: 'Sigiriya Lion Rock', x: 0.56, y: 0.40, icon: '🏰', tag: 'Wonder of World' },
        { name: 'Kandy Temple of Tooth', x: 0.52, y: 0.56, icon: '🛕', tag: 'Cultural Hub' },
        { name: 'Nuwara Eliya Hills', x: 0.58, y: 0.68, icon: '🍃', tag: 'Tea Country' },
        { name: 'Yala Safari Park', x: 0.74, y: 0.82, icon: '🐆', tag: 'Leopard Safari' },
        { name: 'Mirissa Beach', x: 0.50, y: 0.90, icon: '🐋', tag: 'Whale Watching' }
    ];

    // Vehicles traversing the island
    const fleet = [
        { name: 'White Honda Vezel SUV', emoji: '🚘', color: '#00d2ff', size: 28, speedOffset: 0.0 },
        { name: 'Silver Toyota Roomy', emoji: '🚗', color: '#fbbf24', size: 26, speedOffset: 0.25 },
        { name: 'Black Montero 4x4', emoji: '🚙', color: '#f59e0b', size: 30, speedOffset: 0.50 },
        { name: 'Silver KDH Van', emoji: '🚐', color: '#25D366', size: 32, speedOffset: 0.75 }
    ];

    let progress = 0;
    const speed = 0.0012; // Smooth 60fps movement

    function getScreenPoint(normX, normY) {
        // Render map on the right side of desktop screens (or center on mobile)
        const isMobile = width < 768;
        const scale = Math.min(width, height) * (isMobile ? 0.75 : 0.82);
        const originX = isMobile ? width * 0.5 : width * 0.70;
        const originY = height * 0.5;

        return {
            x: originX + (normX - 0.5) * scale,
            y: originY + (normY - 0.5) * scale
        };
    }

    function getPathPoint(t) {
        const count = waypoints.length;
        const index = Math.floor(t * count) % count;
        const nextIndex = (index + 1) % count;
        const subT = (t * count) - Math.floor(t * count);

        const p1 = getScreenPoint(waypoints[index].x, waypoints[index].y);
        const p2 = getScreenPoint(waypoints[nextIndex].x, waypoints[nextIndex].y);

        return {
            x: p1.x + (p2.x - p1.x) * subT,
            y: p1.y + (p2.y - p1.y) * subT,
            angle: Math.atan2(p2.y - p1.y, p2.x - p1.x)
        };
    }

    function drawSriLankaSilhouette() {
        ctx.save();
        ctx.strokeStyle = 'rgba(0, 210, 255, 0.35)';
        ctx.lineWidth = 3;
        ctx.shadowColor = '#00d2ff';
        ctx.shadowBlur = 20;

        ctx.beginPath();
        waypoints.forEach((wp, i) => {
            const pt = getScreenPoint(wp.x, wp.y);
            if (i === 0) ctx.moveTo(pt.x, pt.y);
            else ctx.lineTo(pt.x, pt.y);
        });
        ctx.closePath();
        ctx.stroke();

        // Soft Glowing Fill for Sri Lanka Island Area
        ctx.fillStyle = 'rgba(0, 210, 255, 0.04)';
        ctx.fill();
        ctx.restore();
    }

    function drawWaypoints() {
        waypoints.forEach(wp => {
            const pt = getScreenPoint(wp.x, wp.y);

            // Pulsing Radar Ring
            const pulse = (Math.sin(Date.now() * 0.005 + wp.x * 5) + 1) * 8 + 6;
            ctx.save();
            ctx.beginPath();
            ctx.arc(pt.x, pt.y, pulse, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(245, 158, 11, 0.15)';
            ctx.fill();

            // Landmark Pin Node
            ctx.beginPath();
            ctx.arc(pt.x, pt.y, 6, 0, Math.PI * 2);
            ctx.fillStyle = '#f59e0b';
            ctx.shadowColor = '#f59e0b';
            ctx.shadowBlur = 12;
            ctx.fill();

            // Landmark Name & Icon Tag
            ctx.fillStyle = '#ffffff';
            ctx.font = '700 12px "Outfit", sans-serif';
            ctx.shadowColor = 'rgba(0,0,0,0.8)';
            ctx.shadowBlur = 8;
            ctx.fillText(wp.icon + ' ' + wp.name, pt.x + 12, pt.y + 4);
            ctx.restore();
        });
    }

    function drawFleetVehicles() {
        fleet.forEach(v => {
            const vehicleT = (progress + v.speedOffset) % 1.0;
            const pt = getPathPoint(vehicleT);

            ctx.save();
            ctx.translate(pt.x, pt.y);

            // Vehicle Emoji / Icon Render
            ctx.font = `${v.size}px sans-serif`;
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            ctx.shadowColor = v.color;
            ctx.shadowBlur = 15;
            ctx.fillText(v.emoji, 0, 0);

            // Floating Label Badge above Vehicle
            ctx.restore();
            ctx.save();
            ctx.fillStyle = 'rgba(15, 23, 42, 0.88)';
            ctx.strokeStyle = v.color;
            ctx.lineWidth = 1.5;

            const textWidth = ctx.measureText(v.name).width + 20;
            ctx.beginPath();
            ctx.roundRect(pt.x - textWidth / 2, pt.y - 28, textWidth, 20, 10);
            ctx.fill();
            ctx.stroke();

            ctx.fillStyle = '#ffffff';
            ctx.font = '800 10px "Plus Jakarta Sans", sans-serif';
            ctx.textAlign = 'center';
            ctx.fillText(v.name, pt.x, pt.y - 15);
            ctx.restore();
        });
    }

    function renderFrame() {
        ctx.clearRect(0, 0, width, height);

        drawSriLankaSilhouette();
        drawWaypoints();
        drawFleetVehicles();

        progress += speed;
        if (progress > 1.0) progress = 0;

        requestAnimationFrame(renderFrame);
    }

    renderFrame();
});
