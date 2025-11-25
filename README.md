# Bucketlist-hemsida
Uppgiften går ut på att bygga en objektorienterad PHP-applikation där användaren kan:

- visa en lista med mål (bucketlist)
- lägga till nya mål
- radera mål
- lagra informationen i en MySQL-databas

Projektet innehåller även både ER-diagram och UML-diagram enligt kursens krav.

---

## Funktionalitet

### Visa mål  
`bucketlist.php` visar alla poster i databasen i en tabell.

### Lägg till mål  
`addbucketlist.php` låter användaren lägga till:
- namn  
- beskrivning  
- prioritet (1 = låg, 2 = mellan, 3 = hög)

### Radera mål  
Varje rad i tabellen har en radera-knapp som anropar `delete.php` och skickar tillbaka användaren till listan.

## Databas

Tabellen `bucketlist` används och ser ut så här:

| Kolumn      | Typ        | Beskrivning                         |
|-------------|------------|-------------------------------------|
| id          | INT (PK)   | Auto-increment, primärnyckel        |
| name        | VARCHAR    | Titel på målet                      |
| description | TEXT       | Beskrivning av målet                |
| priority    | TINYINT    | 1 = låg, 2 = mellan, 3 = hög        |
| created_at  | TIMESTAMP  | Sätts automatiskt vid skapande      |

ER-diagram finns i `diagrams/er.drawio`.

---

## Objektorientering

Projektet använder en klass:

### **ListItem**
- Hanterar databasuppkoppling  
- Hämtar, lägger till och raderar data  
- Använder setters för enkel validering  

UML-diagram finns i `diagrams/uml.drawio`.

---

## Publicering
Projektet är publicerat på **studenter.miun.se** och använder deras MySQL-server.  
Serverconfig (`config.server.php`) laddas manuellt upp via FileZilla och versionshanteras inte.
