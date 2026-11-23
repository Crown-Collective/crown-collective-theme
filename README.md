# Crown Collective Theme

The WordPress block theme for [crowncollective.run](https://crowncollective.run).

## What this is

One theme for the whole Crown Collective site: the homepage, race pages (NoDa 5K, Charlotte Racefest, Triple Crown and more), the Around the Crown 10K section at `/atc10k`, and the consulting pages at `/consulting`.

It replaces the older custom theme (`red-robots/crown-collective`, built by Bellaworks). Nothing changes on the live site until this theme is activated.

## How it's organized

| Folder or file | What it holds |
|---|---|
| `theme.json` | Brand settings: colors, fonts, spacing. Change a color here and it updates everywhere. |
| `styles/` | Style variations, such as the warmer consulting look. |
| `patterns/` | Reusable sections: hero, photo strip, corral accordions, case studies, pricing, FAQ, sponsor walls. |
| `templates/` | Page layouts. |
| `parts/` | Shared header and footer. |
| `assets/` | Fonts and images. |

## Deploying

The live site pulls themes from GitHub with the WP Pusher plugin. When this theme is ready, it will be added in WP Pusher (Install Theme, pointing at this repository) and tested on a staging copy before it is activated.

## Rules

- Don't edit theme files directly on the live site. Make changes here, then deploy.
- No passwords, API keys or private data in this repository.
