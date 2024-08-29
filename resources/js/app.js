import './bootstrap';

const background = document.getElementById('background');
let ctx = background.getContext('2d');

let resize = () => {
    background.width = window.innerWidth;
    background.height = window.innerHeight;
}
window.addEventListener('resize', resize);
resize();

let elements = [];
let presets = {};

presets.o = (x, y, s, dx, dy) => {
    return {
        x: x,
        y: y,
        r: 45 * s,
        w: 10 * s,
        dx: dx,
        dy: dy,
        draw: function(ctx, t) {
            this.x += this.dx;
            this.y += this.dy;

            if (this.x - this.r < 0 || this.x + this.r > background.width) this.dx *= -1;
            if (this.y - this.r < 0 || this.y + this.r > background.height) this.dy *= -1;

            ctx.beginPath();
            ctx.arc(this.x + Math.sin((50 + x + (t / 10)) / 100) * 3, this.y + Math.cos((45 + x + (t / 10)) / 100) * 4, this.r, 0, 2 * Math.PI, false);
            ctx.lineWidth = this.w;
            ctx.strokeStyle = '#265973';
            ctx.stroke();
        }
    }
}

presets.x = (x, y, s, dx, dy, dr, r) => {
    r = r || 0;
    return {
        x: x,
        y: y,
        s: 45 * s,
        w: 20 * s,
        r: r,
        dx: dx,
        dy: dy,
        dr: dr,
        draw: function(ctx, t) {
            this.x += this.dx;
            this.y += this.dy;
            this.r += this.dr;

            if (this.x - this.s / 2 < 0 || this.x + this.s / 2 > background.width) this.dx *= -1;
            if (this.y - this.s / 2 < 0 || this.y + this.s / 2 > background.height) this.dy *= -1;

            let _this = this;
            let line = function(x, y, tx, ty, c, o) {
                o = o || 0;
                ctx.beginPath();
                ctx.moveTo(-o + ((_this.s / 2) * x), o + ((_this.s / 2) * y));
                ctx.lineTo(-o + ((_this.s / 2) * tx), o + ((_this.s / 2) * ty));
                ctx.lineWidth = _this.w;
                ctx.strokeStyle = c;
                ctx.stroke();
            };

            ctx.save();

            ctx.translate(this.x + Math.sin((x + (t / 10)) / 100) * 5, this.y + Math.sin((10 + x + (t / 10)) / 100) * 2);
            ctx.rotate(this.r * Math.PI / 180);

            line(-1, -1, 1, 1, '#265973');
            line(1, -1, -1, 1, '#265973');

            ctx.restore();
        }
    }
}

presets.t = (x, y, s, dx, dy, dr, r) => {
    return {
        x: x,
        y: y,
        s: 55 * s,
        w: 10 * s,
        r: r,
        dx: dx,
        dy: dy,
        dr: dr,
        draw: function(ctx, t) {
            this.x += this.dx;
            this.y += this.dy;
            this.r += this.dr;

            if (this.x - this.s / 2 < 0 || this.x - this.s / 2 > background.width) this.dx *= -1;
            if (this.y -this.s / 2 < 0 || this.y -this.s / 2 > background.height) this.dy *= -1;

            const diff = this.s / (2 * Math.sqrt(3));

            ctx.save();
            ctx.translate(this.x, this.y);
            ctx.rotate(this.r * Math.PI / 180);
            ctx.beginPath();
            ctx.moveTo(0, -this.s / (2 * Math.sqrt(3)) - diff);
            ctx.lineTo(-this.s / 2, this.s / Math.sqrt(3) - diff);
            ctx.lineTo(this.s / 2, this.s / Math.sqrt(3) - diff);
            ctx.closePath();
            ctx.lineWidth = this.w;
            ctx.strokeStyle = '#265973';
            ctx.stroke();
            ctx.restore();
        }
    }
}

presets.s = (x, y, s, dx, dy, dr, r) => {
    return {
        x: x,
        y: y,
        s: 45 * s,
        w: 10 * s,
        r: r,
        dx: dx,
        dy: dy,
        dr: dr,
        draw: function(ctx, t) {
            this.x += this.dx;
            this.y += this.dy;
            this.r += this.dr;

            if (this.x - this.s / 2 < 0 || this.x - this.s / 2 > background.width) this.dx *= -1;
            if (this.y - this.s / 2 < 0 || this.y - this.s / 2 > background.height) this.dy *= -1;

            ctx.save();
            ctx.translate(this.x, this.y);
            ctx.rotate(this.r * Math.PI / 180);
            ctx.beginPath();
            ctx.rect(-this.s / 2, -this.s / 2, this.s, this.s);
            ctx.lineWidth = this.w;
            ctx.strokeStyle = '#265973';
            ctx.stroke();
            ctx.restore();
        }
    }
}

for (let x = 0; x < background.width; x++) {
    for (let y = 0; y < background.height; y++) {
        if (Math.round(Math.random() * 8000) === 1) {
            let s = ((Math.random() * 5) + 1) / 10;
            let dx = (Math.random() - 0.5) * 0.75;
            let dy = (Math.random() - 0.5) * 0.75;
            let shapeType = Math.floor(Math.random() * 4);
            switch (shapeType) {
                case 0:
                    elements.push(presets.o(x, y, s, dx, dy));
                    break;
                case 1:
                    elements.push(presets.x(x, y, s, dx, dy, (Math.random() * 6) - 3, (Math.random() * 360)));
                    break;
                case 2:
                    elements.push(presets.t(x, y, s, dx, dy, (Math.random() * 6) - 3, (Math.random() * 360)));
                    break;
                case 3:
                    elements.push(presets.s(x, y, s, dx, dy, (Math.random() * 6) - 3, (Math.random() * 360)));
                    break;
            }
        }
    }
}

setInterval(() => {
    ctx.clearRect(0, 0, background.width, background.height);

    let time = new Date().getTime();
    elements.forEach((elem) => {
        elem.draw(ctx, time);
    });
}, 10);

const menuBtn = document.getElementById('menu-btn');
const menuBox = document.getElementById('menu-box');
menuBtn.addEventListener('click', (e) => {
    e.currentTarget.classList.toggle('active');
    menuBox.classList.toggle('active');
});

const skillList = document.querySelectorAll('.skill-down');
skillList.forEach((skill) => {
    skill.addEventListener('click', () => {
        const target = skill.getAttribute('data-target');
        const targetElement = document.getElementById(target);
        targetElement.classList.toggle('active');
    });
});

const headerBtn = document.querySelectorAll('.header-btn');
headerBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
        const target = btn.getAttribute('data-target');
        const targetElement = document.getElementById(target);
        const headerHeight = document.querySelector('header').clientHeight;
        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

        menuBtn.classList.remove('active');
        menuBox.classList.remove('active');

        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    });
});
