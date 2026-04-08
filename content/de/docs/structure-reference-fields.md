---
title: "Konzept: Referenzfelder"
description: "Überblick über Referenzfelder und die am häufigsten verwendeten Typen."
id: "structure-reference-fields"
translation_key: "structure-reference-fields"
source_locale: "de"
---
## Erforderliche Vorkenntnisse { #structure-reference-fields }

[planning-data-types](./planning-data-types.md)
## Was ist ein Referenzfeld?

Ein _Referenzfeld_ ist ein Feld, das eine Beziehung zwischen einer Entität
und einer oder mehreren anderen Entitäten herstellt. Diese können derselben oder einer anderen Entität angehören.
Die drei am häufigsten verwendeten Referenzfeldtypen sind:

- **Inhalt:** Ein Verweis auf ein Inhaltselement. Zum Beispiel könnten Sie Rezepte den Lieferanten zuordnen wollen, die sie eingereicht haben. Dazu würden Sie ein Inhaltsreferenzfeld anlegen, dass den Namen „Eingereicht von“ trägt. Dieses verweist von den eingereichten Rezepten aus auf das Profil des Lieferanten, der das Rezept eingereicht hat.
- **Taxonomie-Begriff:** Eine Referenz auf einen Taxonomiebegriff. Beispielsweise könnten Sie Rezepte mit ihren Zutaten verbinden. Auf einem Rezept würden Sie dann die Zutaten für das jeweilige Gericht referenzieren. Dazu würden Sie im Inhaltstyp Rezept ein Taxonomie-Referenzfeld anlegen. Das Referenzfeld selbst würde auf das Taxonomievokabular Zutaten verweisen.
- **Benutzer:** Eine Referenz auf ein Benutzerkonto. Zum Beispiel könnten Sie von Rezepten aus auf Autoren der Rezepte oder auf die Lieferanten der Zutaten für ein bestimmtes Rezept referenzieren. Dafür würden Sie den Inhaltstyp Rezept ein Referenzfeld vom Typ Benutzer hinzufügen.
## Verwandte Themen

[structure-taxonomy](./structure-taxonomy.md)

*Mitwirkende*

Geschrieben und herausgegeben von [Surendra Mohan](https://www.drupal.org/u/surendramohan),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
