# baseproject

Dieses Repository können Sie als Studenten der FH Kufstein des Kurses Web Development gerne als Basis für Ihre Projektarbeit nehmen.

Sollten Sie irgendwo über ein (c) copyright Daniel Hoover stoßen können Sie dieses gerne entfernen. Ich erhebe kein Copyright auf diesen Quelltext.

## Konfiguration

Passen Sie bitte die Dateien /.htaccess, /includes/dbconfig.php und /includes/config.php entsprechend an. 

## Grundsätzliche Nutzung

### Routen

Sie müssen in der Datei includes/routes.php entsprechende Routen definieren. Also bekannt geben für welche URL welcher Controller zu nutzen ist.

### View & Controller
Jeder View braucht einen eigenen Controller! Views liegen im Verzeichnis /includes/views/. Controller liegen im Verzeichnis /includes/views/controllers/

### Model
Häufig macht es Sinn, dass Sie für jede Tabelle ein eigenes Model schreiben. Models finden Sie in /includes/models/

### REST Klassen

Jeder Restservice hat auch eine eigene Klasse und erbt von RESTClass. Einen Restservice machen Sie in der Datei /includes/restservices.php bekannt.
Der Aufruf eines Restservices User über die API würde über /api/user/ erfolgen. (Die Klasse wird im REST Servicerequest dann Kleingeschrieben)

#### GET Request

Holen von Daten / Views. Ruft die Methode getRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des GET Requests)

#### POST Request

Erzeugen von Daten. z.B. das anlegen eines neuen Nutzers. Ruft die Methode createRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des POST Requests)

#### PUT Request

Speichern von Daten. z.B. das speichern von Daten nach ändern eines Nutzers. Ruft die Methode saveRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des PUT Requests)

#### DELETE Request

Löschen von Daten. z.B. das löschen von Nutzern. Ruft die Methode deleteRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des DELETE Requests)

## Tutorial

Ein kleines Tutorial um mit der Erweiterung und Nutzung dieses kleinen Frameworks warm zu werden finden Sie hier:
https://github.com/danielhoover/baseproject/wiki/Tutorial
