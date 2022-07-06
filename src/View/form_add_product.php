<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="compra, tenis,roupas,">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Loja de varejo- Cadastro de produtos</title>
</head>
<body>
<header class="bg-red-600">
    <ul class="flex">
        <li class="mx-3">
            <a href="../../index.html">Home</a>
        </li>
        <li>
            <a href="#">Novo produto</a>
        </li>
        <li class="mx-3">
            <a href="form_add_provider.php">Novo Fornecedor</a>
        </li>
    </ul>
    <main class="mt-4">
        <form action="../Controller/Product.php" method="POST" class=" square bg-yellow-500">
            <section class="columns-3">
                <article class="mx-3">
                    <label for="name">Digite o nome do produto: </label>
                    <input type="text" id="name" name="name" class="border border-blue-400">
                </article>
                <article class="mx-3">
                    <label for="price">Digite o preço do produto: </label>
                    <input type="number" id="price"
                    name="price" class="border border-blue-400" min="1" max="99999999999999999999">
                </article>
                <article class="mx-3">
                    <label for="quantity">Quantidade em estoque: </label>
                    <input type="number" id="quantity"
                    name="quantity" class="border border-blue-400" min="1" max="99999999999999999999">
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="rounded-full p-4 bg-orange-700 text-white">
                    Cadastrar
                </button>
            </article>
        </form>
    </main>
    <header class="bg-stone-900 aspect-square">
</header>
</body>
</html>
