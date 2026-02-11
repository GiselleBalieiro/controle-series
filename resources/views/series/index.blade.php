<x-layout title="Séries">
  <a href="/series/create">Adicionar série</a>

  <ul>
    <?php foreach ($series as $serie): ?>
      <li><?= $serie->Nome ?></li>
    <?php endforeach; ?>
  </ul>
</x-layout>
