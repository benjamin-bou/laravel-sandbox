<!-- Appel du composant layout avec du contenu récupérable avec $slot -->
<x-layout>
    <!-- Pour le titre de la page, on pourrait faire <x-layout $title="titre"> -->
    <x-slot:title>
        Home Page
    </x-slot:title>
</x-layout>