# Contao: Artikel Eigenschaften Bundle

Dieses Bundle erweitert die Aktikel-Konfiguration. Für jeden Artikel kann folgendes definiert werden:

- Container (Fixed, Fluid, Eingerückt)
- Innenabstand (Normal, Kein)
- Hintergrundfarbe
- Hintergrundbild
- Füllmethode (Innen, Ausgefüllt, Vollflächig)
- Textfarbe (Hell, Dunkel)

Diese Definitionen werden als CSS-Klassen innerhalb des Artikel-Templates ausgegeben. Diese können dann im
Anschluss mit eigenem CSS näher definiert werden.

## Installation

`composer require lumturo-net/article-properties-bundle`

Danach muss das Contao Installtool unter `https://example.com/contao/install` aufgerufen werden, um die zusätzlichen
Datenbankfelder zu erstellen.

## Eigene Bundle-Konfiguration

Die ausgegebenen CSS Klassen können überschrieben bzw. beliebig erweitert werden. Dazu muss eine Datei `config.yml` im Ordner `config/` erstellt
werden. Dort kann die Bundle-Konfiguration wie folgt überschrieben/erweitert werden:

```yaml
parameters:
  article.paddings:
    section-padding-normal: Normal
    section-padding-none: Keiner
  article.containers:
    container: Fixed
    container-fluid: Fluid
    container-indent: Eingerückt
  article.background-colors:
    bg-color-white: Weiß
    bg-color-black: Schwarz
    bg-color-red: Rot
  article.background-sizes:
    bg-image-contain: Innen
    bg-image-cover: Ausgefüllt
    bg-image-full: Vollflächig
  article.background-positions:
    bg-image-center: Zentriert
  article.text-colors:
    text-bright: Hell
    text-dark: Dunkel
```

Der erste Wert (zb. `container-fluid`) bestimmt die CSS-Klasse.

Der zweite Wert (zb. `Fixed`) bestimmt den Wert, welcher im Select-Menü im Backend angezeigt wird.

Neue CSS Klassen können unter der jeweiligen Sektion hinzugefügt werden. Bspw.:

```yaml
article.background-colors:
  bg-color-yellow: Gelb
```