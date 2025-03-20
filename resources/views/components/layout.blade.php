<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <nav>
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/about" style="color : red">About</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
    </nav>

    <!-- La variable slot contient l'intérieur de la balise lors de l'appel (voir dans home.blade.php) -->
    <!-- On pourrait appeler la variable $slot via une balise php -->
    <?php //echo $slot; 
    ?>

    <!-- Mais on va plutôt appeler la variable $slot via la syntaxe blade (c'est la même chose car blade va être compilé en créant une balise php mais c'est plus lisible) -->
    {{ $slot }}
</body>

</html>