<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista de compras</title>
        
        </style>
    </head>
    <body>
    
    <div class="title">
      <h1>Lista de compras - {{ $titulo }}</h1>
    </div>

    <ol>
        <li>Arroz</li>
        <li>Feijão</li>
        <li>Massa</li>
        <li>óleo</li>
        <li>Pipoca</li>
        <li>Verdura</li>
                  
    </body>
</html>
