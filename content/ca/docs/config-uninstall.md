---
title: "Desinstal·lació de mòduls en desús"
description: "Com desinstal·lar mòduls per reduir la sobrecàrrega."
id: "config-uninstall"
translation_key: "config-uninstall"
source_locale: "ca"
---
## Objectiu { #config-uninstall }

Desinstal·lar els mòduls del nucli Search i History, així com també els mòduls del nucli Activity Tracker si els heu instal·lat en la [config-install](./config-install.md), per reduir la sobrecàrrega.
## Coneixements previs

[understanding-modules](./understanding-modules.md)
## Requisits previs del lloc

* Heu de tenir almenys un mòdul en desús al vostre lloc que vulgueu desinstal·lar, com ara el mòdul del nucli Search.
* Si voleu utilitzar el Drush per desinstal·lar mòduls, l'heu de tenir instal·lat. Vegeu [install-tools](./install-tools.md).
## Passos

Podeu utilitzar la interfície d'administració o el Drush per desinstal·lar mòduls.
### Utilitzant la interfície d'administració

1. Al menú d'administració _Gestiona_, navegueu a _Amplia_ > _Desinstal·la_
    (_admin/modules/uninstall_) on trobareu el llistat de mòduls que estan preparats per a ser desinstal·lats.
1. Marqueu les caselles pels mòduls que esteu desinstal·lant (_Search_, _History_, i
    _Activity Tracker_). Feu clic a _Desinstal·la_ a la part inferior de la pàgina.
    <img src="/images/config-uninstall_check-modules.webp" alt="Desinstal·lant un mòdul" width="100%" />
