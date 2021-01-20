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

    fetch('https://rickandmortyapi.com/api/character/')
        .then(response => response.json())
        .then(judul => tampil_judul(judul.results));
    tampil_judul = judul => {
        const titleDiv = document.querySelector("#zzz");
        judul.forEach(newJudul => {
            const judulElement = document.createElement('P');
            judulElement.innerText = 'judul ' + newJudul.name;
            titleDiv.append(judulElement);
        });
    }
</script>
