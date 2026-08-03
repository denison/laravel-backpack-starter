<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="color-scheme" content="light dark">

        <title>{{ config('app.name', 'Laravel Backpack Starter') }}</title>

        <style>
            :root {
                color-scheme: light;
                --page-bg: #f7f7fb;
                --card-bg: rgb(255 255 255 / 88%);
                --ink: #17141f;
                --muted: #6b6578;
                --line: #e7e2f0;
                --accent: #6d4df2;
                --accent-hover: #5b3fd8;
                --accent-soft: #f1edff;
                --shadow: 0 28px 80px rgb(38 27 74 / 12%);
            }

            * {
                box-sizing: border-box;
            }

            body {
                min-height: 100vh;
                margin: 0;
                display: grid;
                place-items: center;
                padding: 24px;
                color: var(--ink);
                background:
                    radial-gradient(circle at 15% 15%, var(--accent-soft), transparent 32rem),
                    var(--page-bg);
                font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            }

            .starter-card {
                width: min(760px, 100%);
                padding: clamp(32px, 7vw, 64px);
                border: 1px solid var(--line);
                border-radius: 24px;
                background: var(--card-bg);
                box-shadow: var(--shadow);
                backdrop-filter: blur(14px);
            }

            .starter-mark {
                width: 52px;
                height: 52px;
                display: grid;
                place-items: center;
                margin-bottom: 30px;
                border-radius: 15px;
                color: #fff;
                background: linear-gradient(135deg, var(--accent), #8b6cff);
                font-size: 22px;
                font-weight: 800;
                box-shadow: 0 12px 28px rgb(109 77 242 / 26%);
            }

            h1 {
                max-width: 620px;
                margin: 0;
                font-size: clamp(32px, 6vw, 54px);
                line-height: 1.05;
                letter-spacing: -.045em;
            }

            .description {
                max-width: 590px;
                margin: 20px 0 0;
                color: var(--muted);
                font-size: 17px;
                line-height: 1.65;
            }

            .actions {
                display: flex;
                align-items: center;
                gap: 16px;
                flex-wrap: wrap;
                margin-top: 34px;
            }

            .button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 46px;
                padding: 0 20px;
                border-radius: 11px;
                color: #fff;
                background: var(--accent);
                text-decoration: none;
                font-size: 14px;
                font-weight: 700;
                transition: background-color 160ms ease, transform 160ms ease;
            }

            .button:hover {
                background: var(--accent-hover);
                transform: translateY(-1px);
            }

            .version {
                color: var(--muted);
                font-size: 13px;
                font-weight: 600;
            }

            .hint {
                margin: 36px 0 0;
                padding-top: 22px;
                border-top: 1px solid var(--line);
                color: var(--muted);
                font-size: 13px;
                line-height: 1.55;
            }

            code {
                color: var(--ink);
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            }

            @media (prefers-color-scheme: dark) {
                :root {
                    color-scheme: dark;
                    --page-bg: #16131b;
                    --card-bg: rgb(31 27 37 / 90%);
                    --ink: #f7f4ff;
                    --muted: #bdb5ca;
                    --line: #3a3345;
                    --accent: #8b6cff;
                    --accent-hover: #9b82ff;
                    --accent-soft: rgb(139 108 255 / 13%);
                    --shadow: 0 30px 90px rgb(0 0 0 / 32%);
                }
            }
        </style>
    </head>
    <body>
        <main class="starter-card">
            <div class="starter-mark" aria-hidden="true">LB</div>

            <h1>{{ config('app.name', 'Laravel Backpack Starter') }}</h1>

            <p class="description">
                Base administrativa pronta para iniciar novos produtos com uma estrutura organizada,
                autenticação, permissões e gestão de empresas.
            </p>

            <div class="actions">
                <a class="button" href="{{ backpack_url('dashboard') }}">Acessar painel</a>
                <span class="version">Laravel {{ app()->version() }} · PHP {{ PHP_VERSION }}</span>
            </div>

            <p class="hint">
                Esta página é provisória. Quando o produto tiver uma landing page, substitua
                <code>resources/views/welcome.blade.php</code> sem alterar o painel em <code>/app</code>.
            </p>
        </main>
    </body>
</html>
