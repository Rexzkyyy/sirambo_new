<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sirambo' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #166534;
            --primary-dark: #14532d;
            --accent: #22c55e;
            --bg: #f8fafc;
            --text: #0f172a;
        }

        * {
            box-sizing: border-box;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
        }

        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
        }

        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 440px;
            padding: 32px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .brand__mark {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            display: grid;
            place-items: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
        }

        .brand__text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .brand__title {
            font-size: 20px;
            font-weight: 700;
        }

        .brand__subtitle {
            font-size: 12px;
            color: #64748b;
            font-weight: 600;
        }

        .title {
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 4px;
        }

        .subtitle {
            margin: 0 0 24px;
            color: #475569;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 16px;
        }

        .field label {
            font-weight: 600;
            font-size: 14px;
            color: #1f2937;
        }

        .field input, .field select {
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            font-size: 14px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .field input:focus, .field select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.15);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 12px 14px;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.2s ease;
        }

        .btn--primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            box-shadow: 0 10px 30px -10px rgba(22, 101, 52, 0.6);
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .helper {
            margin-top: 12px;
            font-size: 14px;
            color: #475569;
            text-align: center;
        }

        .error {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
            border-radius: 10px;
            padding: 12px 14px;
            margin-bottom: 16px;
            font-size: 14px;
        }

        .dashboard {
            max-width: 960px;
            width: 100%;
        }

        .dashboard__header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 20px;
        }

        .dashboard__card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 20px 40px -16px rgba(0,0,0,0.12);
            border: 1px solid #e2e8f0;
        }

        .dashboard__grid {
            display: grid;
            gap: 16px;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 999px;
            background: #ecfdf3;
            color: var(--primary-dark);
            font-weight: 600;
            font-size: 13px;
        }

        .logout {
            background: #f1f5f9;
            color: #0f172a;
            border: 1px solid #e2e8f0;
            width: auto;
            padding: 10px 14px;
        }

        .muted {
            color: #64748b;
            margin: 0;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<div class="page">
    @yield('content')
</div>
</body>
</html>
