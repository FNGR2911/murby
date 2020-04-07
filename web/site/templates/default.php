<?php snippet('header')?>
<div id="container">
    <main>
     <div id="logo">
        <a href="<?=$site->url()?>" title="Back to front">
          <svg xmlns="http://www.w3.org/2000/svg" width="286" height="41" viewBox="0 0 286 41"><defs><linearGradient id="a" x1="0%" x2="100%" y1="48.972%" y2="51.028%"><stop offset="0%" stop-color="#5F00CF"/><stop offset="26.254%" stop-color="#9600E9"/><stop offset="100%" stop-color="#5D00CE"/></linearGradient></defs><path fill="url(#a)" d="M11.1 40V26.961l-.006-1.92a544.812 544.812 0 00-.106-7.472l.112-.055a210.671 210.671 0 005.326 7.68l4.878 6.74 4.821-6.74 2.166-3.07a204.493 204.493 0 003.16-4.61l.112.055-.049 2.652c-.035 2.17-.063 4.536-.063 6.74V40H43V0H32.012L21.584 14.586 11.1 0H0v40h11.1zM107 0H96.066v20.584c0 3.96-.608 6.526-1.878 8.088-1.16 1.45-2.982 2.343-5.467 2.343-2.761 0-4.694-1.116-5.799-2.678-1.056-1.494-1.506-3.651-1.543-7.253L81.376 0H70v21.253c0 5.913 1.05 10.208 3.148 13.165C76.185 38.713 81.928 41 88.5 41c6.682 0 12.15-2.399 15.131-6.415 2.21-2.956 3.369-7.196 3.369-13.332V0zm28 40h11.408V24.807h1.772L157.097 40H170l-10.633-16.796c4.984-2.099 7.366-5.856 7.366-10.773 0-5.193-2.603-8.564-6.48-10.442C157.484.608 153.884 0 149.011 0H135v40zm11-23V9h2.124c2.628 0 3.97.222 4.92.667 1.173.555 1.956 1.61 1.956 3.333 0 1.5-.559 2.556-1.621 3.167-.895.555-2.404.833-4.528.833H146zm47 23h13.033c4.88 0 8.929-.663 11.98-2.044C222.614 35.912 225 32.32 225 27.68c0-4.42-2.163-7.956-7.764-9.835v-.11c3.937-1.492 6.1-3.923 6.1-7.68 0-3.59-1.94-6.188-4.825-7.79-2.677-1.493-6.44-2.214-12.437-2.262L193 0v40zm11-24V9h1.422c2.548 0 3.911.168 4.8.616 1.304.616 1.778 1.568 1.778 2.856 0 2.464-1.719 3.528-5.393 3.528H204zm1 15v-8h3.545c3.6 0 5.455 1.209 5.455 4.029 0 1.496-.49 2.532-1.582 3.165-.927.518-2.563.806-5.782.806H205zm53.754 9V22.1L243 0h13.455l3.7 5.635a242.522 242.522 0 014.485 6.962h.112c1.094-1.74 2.187-3.481 3.28-5.175L272.882 0H286l-15.698 21.878V40h-11.548z"/></svg>
        </a>
      </div>
      <h1 class="title"><?=$page->title()?></h1>
      <?=$page->text()->kirbytext()?>
    </main>
</div>
<?php snippet('footer')?>