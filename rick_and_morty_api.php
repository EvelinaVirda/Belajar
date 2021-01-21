<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty Data</title>
</head>

<body>
    <div id="rick-and-morty-characters" style="color:red"></div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script>
    fetch('https://rickandmortyapi.com/api/character/')
        .then(response => response.json())
        .then(characters => showCharacters(characters.results));
    showCharacters = characters => {
        const charactersDiv = document.querySelector('#rick-and-morty-characters');
        characters.forEach(character => {
            const characterElement = document.createElement('BUTTON');
            characterElement.innerText = 'Name : ' + character.name + '\n status : ' + character.status;
            charactersDiv.append(characterElement);
        });
    }
</script>

</html>
