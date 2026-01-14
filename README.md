# Brukerregistrering-nettside

## Oppgaver

### Installere og kjøre XAMPP
Jeg installerte XAMMP og startet de nødvendige tjenestene.

### Opprette database
Opprettet en database via phpMyAdmin og ga den navnet «data», opprettet en tabell med id, username, email og password

### Lage registreringsskjema og Medlemsområde
Jeg opprettet et registreringsskjema med post metoden som sender data til serveren, inkludert et kryptert passord.
Jeg mener at den nødvendige informasjonen er e-postadressen, fordi passordet er ubrukelig for oss, akkurat som navnet i tilfellet med min nettside.

### Koble til databasen og Tilgangskontroll
Forbindelsen mellom nettstedet og databasen fungerer perfekt og lagrer alle data.
Hvis du prøver å gå direkte til Medlemsområde, blir du automatisk omdirigert til hjemmesiden fordi du ikke er logget inn på kontoen din.

### Design med CSS
Laget et behagelig og attraktivt design som er enkelt å bruke

### Ekstraoppgave
Jeg opprettet en annen fil, admin.php, som vises som en lenke i Medlemsområde. Hvis du har tilgang, gjorde jeg dette ved å sette denne brukerens rolle til 1, mens alle andre er satt til 0.
Når du går inn i Medlemsområde og Admin Panel, blir det sjekket om brukeren er administrator.
![image](https://github.com/DaniOnats/Brukerregistrering-nettside/ReadmeImage/image.jpg?raw=true)
