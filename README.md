# Crown Collective Theme

The WordPress block theme for [crowncollective.run](https://crowncollective.run).

## What this is

One theme for the whole Crown Collective site, built so that each part of the site can carry its own brand:

| Section | Brand | Status |
|---|---|---|
| Crown Collective (homepage, race pages) | Crown Collective brand | Planned |
| Consulting (`/consulting`) | Consulting look: cream, clay red, Fraunces + DM Sans | **First build, the test run** |
| Around the Crown 10K (`/atc10k`) | ATC10K's own brand | Next, after Consulting proves the approach |

Consulting goes first because it is new and self-contained. What works there (patterns, page templates, the way brands switch) becomes the starting point for the ATC10K build.

It replaces the older custom theme (`red-robots/crown-collective`, built by Bellaworks). Nothing changes on the live site until this theme is activated.

## How it's organized

| Folder or file | What it holds |
|---|---|
| `theme.json` | Base settings shared by every brand: spacing, layout, type scale. |
| `styles/` | One style variation per brand (colors and fonts): `consulting.json`, later `atc10k.json`. |
| `patterns/` | Reusable sections: hero, photo strip, corral accordions, case studies, pricing, FAQ, sponsor walls. |
| `templates/` | Page layouts, including one per brand section. |
| `parts/` | Shared header and footer, with brand-specific versions where needed. |
| `assets/` | Fonts and images. |

## Deploying

The live site pulls themes from GitHub with the WP Pusher plugin. When this theme is ready, it will be added in WP Pusher (Install Theme, pointing at this repository) and tested on a staging copy before it is activated.

## Rules

- Don't edit theme files directly on the live site. Make changes here, then deploy.
- No passwords, API keys or private data in this repository.
