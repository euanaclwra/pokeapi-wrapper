# PokéAPI Wrapper ✨
Um Wrapper simples em PHP para a [PokéAPI](https://pokeapi.co/).

## 1️⃣ Instalação
Faça o download do pacote através do composer:
```
composer require anaclrdev/pokeapi-wrapper
```

## 2️⃣ Utilização
**1.** Instancie a classe:
```
$client = new PokeAPI\Client();
$pokemon = new PokeAPI\Resource\Pokemon($client);
```
Você também pode buscar por **Type** (tipos de pokémon) ou **Ability** (habilidades de pokemón).

**2.** Para a requisição, utilize:
```
$response = $pokemon->getByName('pikachu');
//ou
$response = $pokemon->getById('25');
```
Ambos os métodos retornam um JSON.
