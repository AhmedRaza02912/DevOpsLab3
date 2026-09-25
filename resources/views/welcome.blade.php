<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Cloud Lab 3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #102a2b;
            --muted: #607273;
            --paper: #f4f7f1;
            --mint: #c9e9d8;
            --coral: #ff775f;
            --line: rgba(16, 42, 43, 0.16);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            color: var(--ink);
            background: var(--paper);
            font-family: 'Space Grotesk', sans-serif;
        }

        .page {
            min-height: 100vh;
            padding: 28px clamp(20px, 5vw, 76px);
            background: radial-gradient(circle at 86% 15%, #fff3d5 0, transparent 28%), var(--paper);
        }

        .topbar, .hero, .details, footer {
            width: min(1120px, 100%);
            margin: 0 auto;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 26px;
            border-bottom: 1px solid var(--line);
        }

        .brand, .eyebrow, .tag, .detail-label, .status {
            font-family: 'DM Mono', monospace;
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .brand { font-size: .78rem; font-weight: 500; }
        .lab-number { color: var(--coral); font-size: .78rem; }

        .hero {
            display: grid;
            grid-template-columns: minmax(0, 1.35fr) minmax(280px, .65fr);
            gap: clamp(36px, 8vw, 120px);
            align-items: end;
            padding: clamp(70px, 12vw, 150px) 0 100px;
        }

        .eyebrow { margin: 0 0 20px; color: var(--coral); font-size: .76rem; }

        h1 {
            max-width: 760px;
            margin: 0;
            font-size: clamp(3.5rem, 9vw, 8.2rem);
            line-height: .9;
            letter-spacing: -.07em;
            font-weight: 600;
        }

        .hero-copy {
            max-width: 330px;
            margin: 0 0 5px;
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .hero-copy strong { color: var(--ink); font-weight: 600; }

        .details {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            border-top: 1px solid var(--ink);
            border-bottom: 1px solid var(--line);
        }

        .detail { min-height: 148px; padding: 24px 28px 24px 0; }
        .detail + .detail { padding-left: 28px; border-left: 1px solid var(--line); }
        .detail-label { display: block; margin-bottom: 24px; color: var(--muted); font-size: .7rem; }
        .detail-value { margin: 0; font-size: 1.12rem; font-weight: 500; line-height: 1.35; }

        footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 28px 0;
            color: var(--muted);
            font-size: .84rem;
        }

        .tag {
            display: inline-block;
            padding: 9px 12px;
            color: var(--ink);
            background: var(--mint);
            font-size: .67rem;
        }

        .status { font-size: .66rem; }
        .status::before { content: ''; display: inline-block; width: 7px; height: 7px; margin: 0 8px 1px 0; border-radius: 50%; background: #40a86b; }

        @media (max-width: 700px) {
            .page { padding-top: 20px; }
            .hero { display: block; padding: 78px 0 72px; }
            .hero-copy { margin-top: 32px; }
            .details { grid-template-columns: 1fr; }
            .detail, .detail + .detail { min-height: auto; padding: 22px 0; border-left: 0; }
            .detail + .detail { border-top: 1px solid var(--line); }
            footer { align-items: flex-start; gap: 20px; flex-direction: column; }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="topbar">
            <span class="brand">DevOps / Cloud Computing</span>
            <span class="lab-number">Lab 03</span>
        </header>

        <main>
            <section class="hero">
                <div>
                    <p class="eyebrow">Welcome to the workspace</p>
                    <h1>Build.<br>Ship.<br>Learn.</h1>
                </div>
                <p class="hero-copy">A hands-on space for exploring how modern teams <strong>automate, deploy, and operate</strong> software in the cloud.</p>
            </section>

            <section class="details" aria-label="Lab details">
                <div class="detail">
                    <span class="detail-label">Focus</span>
                    <p class="detail-value">Cloud infrastructure<br>&amp; delivery</p>
                </div>
                <div class="detail">
                    <span class="detail-label">Task</span>
                    <p class="detail-value">Create a reliable<br>deployment workflow</p>
                </div>
                <div class="detail">
                    <span class="detail-label">Mindset</span>
                    <p class="detail-value">Small changes.<br>Fast feedback.</p>
                </div>
            </section>
        </main>

        <footer>
            <span class="tag">DevOps Lab 03</span>
            <span class="status">Environment ready</span>
        </footer>
    </div>
</body>
</html>
