<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?= htmlspecialchars($title ?? 'LexCorp') ?>
    </title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Configuração Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        lex: {
                            navy: '#071A2F',
                            yellow: '#D9A900',
                            yellowHover: '#B88F00'
                        }
                    }
                }
            }
        }
    </script>

    <!-- CSS da aplicação -->
    <link
        rel="stylesheet"
        href="/assets/css/app.css"
    >

</head>

<body class="bg-slate-50 text-slate-900">

    <?php require BASE_PATH . '/resources/views/partials/header.php'; ?>


    <main>

        <?= $content ?>

    </main>


    <?php require BASE_PATH . '/resources/views/partials/footer.php'; ?>


    <!-- JavaScript -->
    <script src="/assets/js/app.js"></script>

</body>

</html>